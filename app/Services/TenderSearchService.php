<?php
namespace App\Services;

use App\Database\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TenderSearchService {
    /**
     * @var string
     */
    private string $table = 'tenders';
    /**
     * @var string
     */
    private \Illuminate\Database\Query\Builder $db;
    /**
     * @return null
     */
    public function __construct(array $ids = null)
    {
        $this->db = DB::table('tenders')->from($this->table)
                ->select('tenders.*')
                ->distinct()
                ->orderBy('tenders.release_date', 'desc');

        if ($ids) {
            $this->appendId($ids);
        }
    }
    /**
     * @return self
     */
    public function appendGlobalScope()
    {
        $this->appendNature(['appeloffre', 'rectificatif']);
        return $this;
    }
    /**
     * @param $values
     * @param string $filter_by
     * @return self
     */
    public function appendActivity($values, string $filter_by = 'slug')
    {
        if (!$values) return $this;

        $values = is_array($values) ? $values : [$values];
        $this->db->join('activities', "{$this->table}.activity_id", "activities.id")
                ->whereIn("activities.$filter_by", $values);

        return $this;
    }
    /**
     * @param $values
     * @param string $filter_by
     * @return self
     */
    public function appendRegion($values, string $filter_by = 'slug')
    {
        if (!$values) return $this;

        $values = is_array($values) ? $values : [$values];

        if ($filter_by === 'slug') {
            $values = array_map(function ($v) {
                return $this->slugifyString($v);
            }, $values);
        }

        if (!$this->isJoinUsed('departments')) {
            $this->db->join('departments', "{$this->table}.department_id", "departments.id");
        }
        $this->db->join('regions', 'departments.region_id', 'regions.id')
                    ->whereIn("regions.$filter_by", $values);

        return $this;
    }
    /**
     * @param $values
     * @param string $filter_by
     * @return self
     */
    public function appendDepartment($values, string $filter_by = 'slug')
    {
        if (!$values) return $this;

        $values = is_array($values) ? $values : [$values];

        if ($filter_by === 'slug') {
            $values = array_map(function ($v) {
                return $this->SlugifyString($v);
            }, $values);
        }
        if (!$this->isJoinUsed('departments')) {
            $this->db->join('departments', "{$this->table}.department_id", "departments.id");
        }
        $this->db->whereIn("departments.$filter_by", $values);
        return $this;
    }
    /**
     * @param $values
     * @param string $filter_by
     * @return self
     */
    public function appendKeyWord($values, $searchbycontent = true, $searchbytitle = true)
    {
        if (!$values) return $this;

        $values = is_array($values) ? array_values($values) : [$values];

        $this->db->where(function($query) use($values, $searchbycontent, $searchbytitle) {
            foreach($values as $value) {
                if ($searchbycontent) {
                    $query->orWhere('tenders.searchable_content', 'like', "%$value%");
                }

                if ($searchbytitle) {
                    $query->orWhere('tenders.title', 'like', "%$value%");
                }
            }
        });

        return $this;
    }
    /**
     * @param $values
     * @param string $filter_by
     * @return self
     */
    public function appendNotKeyWord($values, $searchbycontent = true, $searchbytitle = true)
    {
        if (!$values) return $this;

        $values = is_array($values) ? array_values($values) : [$values];

        $this->db->where(function($query) use($values, $searchbycontent, $searchbytitle) {
            foreach($values as $value) {
                if ($searchbycontent) {
                    $query->where('tenders.searchable_content', 'not like', "%$value%");
                }

                if ($searchbytitle) {
                    $query->where('tenders.title', 'not like', "%$value%");
                }
            }
        });

        return $this;
    }
    /**
     * @param $values
     * @param string $filter_by
     * @return self
     */
    public function appendCpv($values, $filter_by = 'code')
    {
        if (!$values) return $this;

        $values = is_array($values) ? array_values($values) : [$values];
        $this->db->join('tender_cpv', "{$this->table}.id", 'tender_cpv.tender_id')
                    ->join('cpv', 'tender_cpv.cpv_id', '=', 'cpv.id')
                    ->whereIn("cpv.$filter_by", $values);

        return $this;
    }
    /**
     * @param $values
     * @param string $filter_by
     * @return self
     */
    public function appendProcedure($values, $filter_by = 'slug')
    {
        if (!$values) return $this;

        $values = is_array($values) ? array_values($values) : [$values];
        $this->db->join('procedure_types', "{$this->table}.procedure_type_id", 'procedure_types.id')
                    ->whereIn("procedure_types.$filter_by", $values);

        return $this;
    }
    /**
     * @param string $start_date
     * @param string $end_date
     * @return self
     */
    public function appendPublishDate(string $start_date = null , string $end_date = null)
    {

        if ($start_date) {
            $this->db->where("{$this->table}.release_date", ">=", $start_date);
        }
        if ($end_date) {
            $this->db->where("{$this->table}.release_date", "<=", $end_date);
        }
        return $this;
    }
    /**
     * @param string $start_date
     * @param string $end_date
     * @return self
     */
    public function appendClosingDate(string $start_date = null , string $end_date = null)
    {
        if ($start_date) {
            $this->db->where("{$this->table}.closing_date", ">=", $start_date);
        }
        if ($end_date) {
            $this->db->where("{$this->table}.closing_date", "<=", $end_date);
        }
        return $this;
    }
    /**
     * @param $values
     * @param string $filter_by
     * @return self
     */
    public function appendBudget($values, $filter_by = 'slug')
    {
        if (!$values) return $this;

        $values = is_array($values) ? array_values($values) : [$values];
        $this->db->join('budget_types', "{$this->table}.budget_type_id", 'budget_types.id')
                    ->whereIn("budget_types.$filter_by", $values);

        return $this;
    }
    /**
     * @param $values
     * @param string $filter_by
     * @return self
     */
    public function appendState(string $state = null)
    {
        if (!$state) return $this;

        if ($state === 'progress') {
            $this->db->where("{$this->table}.closing_date", ">=", date('Y-m-d'));
        }

        if ($state === 'closed') {
            $this->db->where("{$this->table}.closing_date", "<=", date('Y-m-d'));
        }

        return $this;
    }
    /**
     * @param $natures
     * @return self
     */
    public function appendNature($natures = null)
    {
        if (!$natures) return $this;

        $natures = is_array($natures) ? $natures : [$natures];

        $this->db->whereIn("{$this->table}.nature", $natures);


        return $this;
    }
    /**
     * @param string ref
     * @return self
     */
    public function appendSourceRef(string $ref = null)
    {
        if (!$ref) return $this;

        $this->db->where('tenders.source_ref', 'like', $ref.'%');
        return $this;
    }
    /**
     * @param string ref
     * @return self
     */
    public function appendRef(string $ref = null)
    {
        if (!$ref) return $this;

        $this->db->where('tenders.ref', 'like', $ref.'%');
        return $this;
    }
    /**
     * @param string ref
     * @return self
     */
    public function appendBuyerName(string $name = null)
    {
        if (!$name) return $this;

        $this->db->where('tenders.denomination','like', "%$name%");

        return $this;
    }
    /**
     * @param string ref
     * @return self
     */
    public function appendId($ids)
    {
        if (!$ids) return $this;

        $ids = is_array($ids) ? $ids : [$ids];

        $this->db->whereIn('tenders.id',$ids);

        return $this;
    }
    /**
     * @return Collection
     */
    public function get()
    {
        return $this->db->get();
    }
    /**
     * @return Illuminate\Pagination\LengthAwarePaginator
     */
    public function paginate(int $count)
    {
        return $this->db->paginate($count, ['tenders.id']);
    }
    /**
     * @return int
     */
    public function count()
    {
        return $this->db->count();
    }
    /**
     * @param string $table
     * @return boolean
     */
    private function isJoinUsed(string $table)
    {
        return in_array($table, collect($this->db->joins)->pluck('table')->toArray());
    }
    /**
     * @param string $value
     * @return string
     */
    public function SlugifyString(string $value)
    {
        $value = preg_replace('/[\']+/', '-', $value);
        return Str::slug($value);
    }
}
