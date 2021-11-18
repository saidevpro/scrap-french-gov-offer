<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentOrder extends Model
{
    use HasFactory;

    const COMPLETED = 'completed';
    const PENDING = 'pending';
    const CANCELED = 'cancelled';

    /**
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @var string
     */
    protected $table = 'payments';

    public function getExpirationDateFromCreatedDate()
    {
        if (!$this->created_at || !$this->package) {
            return date('Y-m-d H:i:s');
        }

        $duration_days = $this->package->duration + 1;
        $created_date = new \DateTime($this->created_at);
        $created_date->add(new \DateInterval("P{$duration_days}D"));
        return $created_date->format('Y-m-d H:i:s');
    }

    public function package()
    {
        return $this->belongsTo(SubscriptionPackage::class, 'subscription_package_id', 'id');
    }
}
