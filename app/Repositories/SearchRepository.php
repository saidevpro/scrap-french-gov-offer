<?php
namespace App\Repositories;

use App\Models\Department;
use App\Models\Region;
use Illuminate\Support\Facades\DB;

class SearchRepository {
    /**
     * @return array
     */
    public function getActivityFilterOptions()
    {
        return DB::table('activities')->select(DB::raw('count(tenders.id) as count_tenders, activities.name, activities.slug, activities.id'))
                    ->leftJoin('tenders', 'activities.id', '=', 'tenders.activity_id')
                    ->whereIn('tenders.nature', ['appeloffre', 'rectificatif'])
                    ->groupBy('activities.id', 'activities.name', 'activities.slug')
                    ->get();
    }
    /**
     * @return array
     */
    public function getDepartmentFilterOptions()
    {
        return DB::table('departments')->select(DB::raw('count(tenders.id) as count_tenders, departments.name, departments.code'))
                    ->leftJoin('tenders', 'departments.id', '=', 'tenders.department_id')
                    ->whereIn('tenders.nature', ['appeloffre', 'rectificatif'])
                    ->groupBy('departments.name', 'departments.code')
                    ->get();
    }
    /**
     * @return array
     */
    public function getRegionFilterOptions($with_departments = true)
    {
        $regions = DB::table('regions')->select(DB::raw('count(tenders.id) as count_tenders, regions.name, regions.id, regions.slug'))
                            ->leftJoin('departments', 'regions.id', 'departments.region_id')
                            ->leftJoin('tenders', 'departments.id', '=', 'tenders.department_id')
                            ->whereIn('tenders.nature', ['appeloffre', 'rectificatif'])
                            ->groupBy('regions.id', 'regions.name', 'regions.slug')
                            ->get();

        if ($with_departments) {
            foreach($regions as &$region) {
                $departments = DB::table('departments')->select(DB::raw('count(tenders.id) as count_tenders, departments.name, departments.slug'))
                                    ->leftJoin('tenders', 'departments.id', '=', 'tenders.department_id')
                                    ->whereIn('tenders.nature', ['appeloffre', 'rectificatif'])
                                    ->where('departments.region_id', $region->id)
                                    ->groupBy('departments.name', 'departments.slug')
                                    ->get();

                $region->departments = $departments->map(function ($department) use($region) {
                    $department->region_slug = $region->slug;
                    return $department;
                });
                unset($region->id);
            }
        }

        return $regions;
    }
    /**
     * @return array
     */
    public function getCpvFilterOptions()
    {
        return DB::table('cpv')->select(DB::raw('count(tenders.id) as count_tenders, cpv.name, cpv.code'))
                    ->leftJoin('tender_cpv', 'cpv.id', '=', 'tender_cpv.cpv_id')
                    ->leftJoin('tenders', 'tenders.id', '=', 'tender_cpv.tender_id')
                    ->whereIn('tenders.nature', ['appeloffre', 'rectificatif'])
                    ->groupBy('cpv.name', 'cpv.code')
                    ->get();
    }
    /**
     * @return array
     */
    public function getProcedureTypeFilterOptions()
    {
        return DB::table('procedure_types')->select(DB::raw('count(tenders.id) as count_tenders, procedure_types.name, procedure_types.slug'))
                    ->leftJoin('tenders', 'procedure_types.id', '=', 'tenders.procedure_type_id')
                    ->whereIn('tenders.nature', ['appeloffre', 'rectificatif'])
                    ->groupBy('procedure_types.name', 'procedure_types.slug')
                    ->get();
    }
    /**
     * @return array
     */
    public function getBudgetTypeFilterOptions()
    {
        return DB::table('budget_types')->select(DB::raw('count(tenders.id) as count_tenders, budget_types.name, budget_types.slug'))
                    ->leftJoin('tenders', 'budget_types.id', '=', 'tenders.budget_type_id')
                    ->whereIn('tenders.nature', ['appeloffre', 'rectificatif'])
                    ->groupBy('budget_types.name', 'budget_types.slug')
                    ->get();
    }
    /**
     * @return array
     */
    public function getProviderCodeNafFilterOptions()
    {
        return DB::table('companies')->select(DB::raw('companies.name, companies.code_naf'))
                ->join('account_types', 'companies.account_types_id', 'account_types.id')
                ->where('account_types.slug', 'provider')
                ->whereNotNull('companies.code_naf')
                ->get();
    }

    /**
     * @return Collection
     */
    public function getProviderCompaniesKeywordsFilterOptons()
    {
        return DB::table('companies')->select(DB::raw('companies.name, companies.search_keywords'))
                ->join('account_types', 'companies.account_types_id', 'account_types.id')
                ->where('account_types.slug', 'provider')
                ->whereNotNull('companies.search_keywords')
                ->get();
    }

    /**
     * @return array
     */
    public function getProviderCompaniesNames()
    {
        return DB::table('companies')->select(DB::raw('companies.name'))
                ->join('account_types', 'companies.account_types_id', 'account_types.id')
                ->where('account_types.slug', 'provider')
                ->get();
    }

    /**
     * @return array
     */
    public function getSingleRegions()
    {
        return Region::all();
    }

    /**
     * @return array
     */
    public function getSingleDepartments()
    {
        return Department::all();
    }
}
