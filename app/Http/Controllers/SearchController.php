<?php

namespace App\Http\Controllers;

use App\Http\Resources\TenderSimpleResource;
use App\Http\Resources\TenderCollection;
use App\Models\Tender;
use Illuminate\Http\Request;
use App\Repositories\SearchRepository;
use App\Services\TenderSearchService;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    /**
     * @var App\Repositories\SearchRepository
     */
    private SearchRepository $searchRepository;
    /**
     * @param App\Repositories\SearchRepository
     */
    public function __construct(SearchRepository $searchRepository)
    {
        $this->searchRepository = $searchRepository;
    }
    /**
     * @return Response
     */
    public function getSearchFilterOptions(Request $request)
    {
        $types = $request->get('types');
        $types = $types ? explode(',', $types) : [];
        $data = [];

        if (!$types || in_array('activities', $types)) {
            $data['activities'] = $this->searchRepository->getActivityFilterOptions();
        }

        if (!$types || in_array('regions', $types)) {
            $data['regions'] = $this->searchRepository->getRegionFilterOptions();
        }

        if (!$types || in_array('cpv', $types)) {
            $data['cpv'] = $this->searchRepository->getCpvFilterOptions();
        }

        if (!$types || in_array('procedures', $types)) {
            $data['procedures'] = $this->searchRepository->getProcedureTypeFilterOptions();
        }

        if (!$types || in_array('budgets', $types)) {
            $data['budgets'] = $this->searchRepository->getBudgetTypeFilterOptions();
        }

        return response()->json($data);
    }
    /**
     * @return Response
     */
    public function search(Request $request, TenderSearchService $tenderSearchService)
    {
        $sbycontent = $request->get('qby') == 'title' ? false : true;

        $tenderSearchService->appendGlobalScope();

        if (Auth::check()) {
            $tenderSearchService->appendActivity($request->get('activities'))
                ->appendRegion($request->get('regions'))
                ->appendDepartment($request->get('departments'))
                ->appendKeyWord($request->get('keywords'), $sbycontent)
                ->appendNotKeyWord($request->get('keywords_x'), $sbycontent)
                ->appendCpv($request->get('cpv'))
                ->appendProcedure($request->get('procedures'))
                ->appendPublishDate(
                    $request->get('publish_date_start'),
                    $request->get('publish_date_end')
                )
                ->appendClosingDate(
                    $request->get('closing_date_start'),
                    $request->get('closing_date_end')
                )
                ->appendBudget($request->get('budgets'))
                ->appendState($request->get('state'))
                ->appendBuyerName($request->get('buyer'))
                ->appendSourceRef($request->get('ref'));
        }

        $page = (int) $request->page;
        if ((!Auth::check() && $page >= 2) || (Auth::check() && !Auth::user()->is_verify && $page >= 3)) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        $count = (int) ($request->get('count') ?? 5);
        $count = min($count, 20);

        $paginator = $tenderSearchService->paginate($count);
        $collection = Tender::hydrate($paginator->items());
        $collection->load( 'procedure', 'city', 'department.region', 'activity', 'cpv', 'budget', 'favoris', );
        $paginator->setCollection($collection);

        return new TenderCollection($paginator);
    }
}
