<?php
namespace App\Traits;

use App\Models\Company;
use App\Models\Credential;
use App\Models\Document;
use App\Models\Favoris;
use App\Models\PaymentOrder;
use App\Models\Tender;
use App\Models\ViewReport;
use Illuminate\Support\Facades\DB;

trait Stats {
    /**
     * @return int
     */
    public function getTendersCount()
    {
        return Tender::count();
    }

    /**
     * @return int
     */
    public function getTendersCountBySource(string $source)
    {
        return Tender::where('source', $source)->count();
    }

    /**
     * @return int
     */
    public function getBuyersCount()
    {
        return DB::table('companies')->select('companies.*')
                ->join('account_types', 'companies.account_types_id', 'account_types.id')
                ->where('account_types.slug', 'buyer')
                ->count();
    }

    /**
     * @return int
     */
    public function companyCardViewCount(int $company_id)
    {
        return ViewReport::where('reportable_id', $company_id)
            ->where('reportable_type', Company::class)
            ->where('type', 'company_page')
            ->count();
    }

    /**
     * @return int
     */
    public function getUserDocumentCount(int $user_id)
    {
        return Document::where('user_id', $user_id)->count();
    }

    /**
     * @return int
     */
    public function getUserFavorisCount(int $user_id)
    {
        return Favoris::where('user_id', $user_id)->count();
    }

    /**
     * @return int
     */
    public function getUserCredentialsCount(int $user_id)
    {
        return Credential::where('user_id', $user_id)->count();
    }

}
