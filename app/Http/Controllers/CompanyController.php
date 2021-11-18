<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Http\Resources\CompanyResource;
use App\Http\Resources\CompanyTinyResource;
use App\Models\City;
use App\Models\Company;
use App\Models\CompanyCategory;
use App\Models\CompanyContact;
use App\Models\Document;
use App\Models\MetaCompany;
use App\Repositories\SearchRepository;
use App\Traits\Importable;
use App\Traits\Payable;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use PhpOffice\PhpSpreadsheet\Spreadsheet;



class CompanyController extends Controller
{
    use Importable, Payable;
     /**
     * @var App\Repositories\SearchRepository
     */
    private $searchRepository;

    /**
     * @param App\Repositories\SearchRepository
     */
    public function __construct(SearchRepository $searchRepository)
    {
        $this->searchRepository = $searchRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = DB::table('companies')->select('companies.*');
        $query->join('account_types', 'companies.account_types_id', 'account_types.id')
                ->where('account_types.slug', $request->type);

        $limit = min($request->limit ?? 10, 10);

        if ($request->type === 'buyer') {
            if (Auth::user()->isBuyer()) {
                return response()->json([
                    'message' => "Unauthorized"
                ], 401);
            }

            $limit = min($request->limit ?? 4, 10);
            $query = $this->searchBuyer($request, $query);
        }

        else if ($request->type === 'provider') {
            if (Auth::user()->isProvider()) {
                return response()->json([
                    'message' => "Unauthorized"
                ], 401);
            }
            $query = $this->searchProvider($request, $query);
        } else {
            return response()->json([
                'message' => "Forbidden"
            ], 403);
        }

        $paginator = $query->paginate($limit);
        $companies = Company::hydrate($paginator->items());
        $companies->load('city');
        $paginator->setCollection($companies);

        return CompanyResource::collection($paginator);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyRequest $request)
    {
        $validator = $this->validateForm($request);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        $company = Company::create($validator->validated());

        return response()->json([
            'message' => 'Company successfully registered',
            'company' => $company
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        if (!$company) {
            return response()->json([
                'message' => "Company not found"
            ], 404);
        }

        $city = City::find($company['city_id']);
        $company->city = $city ? $city->name : null;

        return response()->json(['company' => new CompanyResource($company)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        if (!$company || !Gate::allows('manage-company', $company)) {
            return response()->json([
                'message' => "Company not found"
            ], 404);
        }

        if($request->input('id')) {
            return response()->json(['name' => 'Remove The id field from body.'], 400);
        }

        $data = $request->validated();

        if ($request->city) {
            $city = City::where('name', mb_strtolower($request->city))->first();
            $data['city_id'] = $city ? $city->id : null;
            $data['department_id'] = $city ? $city->department_id : null;
            $data['region_id'] = $city ? $city->region_id : null;
        }

        if ($request->logo && $request->logo->path()) {
            $logodocument = $this->saveFile($request->logo, $company);
            $data['logo'] = $logodocument->id;
        }

        if ($request->coverImage && $request->coverImage->path()) {
            $cover = $this->saveFile($request->coverImage, $company);
            $data['cover_image'] = $cover->id;
        }

        if($request->galery && is_array($request->galery)) {
            $ids = [];
            foreach($request->galery as $file) {
                $document = $this->saveFile($file, $company);
                $ids[] = $document->id;
            }

            $data['galery'] = implode(',', $ids);
        }

        $entity = array_reduce(array_keys($data), function($array, $key) use ($data, $request) {
            $value = $data[$key];

            if (!is_null($value) && !$value) {
                return $array;
            }

            if ($request->has($key) && !$request->{$key}) {
                $array[$key] = null;
                return $array;
            }

            $array[$key] = is_array($value) ? json_encode($value) : $value;
            return $array;
        }, []);

        $company->update($entity);

        if ($request->has('contacts')) {
            CompanyContact::where('company_id', $company->id)->delete();
        }

        if (isset($data['contacts']) && $data['contacts']) {
            foreach($data['contacts'] as $contact) {
                CompanyContact::create([
                    'first_name' => $contact['first_name'],
                    'last_name' => $contact['last_name'],
                    'email' => $contact['email'],
                    'phone' => $contact['phone'],
                    'service' => $contact['service'],
                    'role' => $contact['role'],
                    'company_id' => $company->id
                ]);
            }
        }

        return response()->json([
            'message' => 'Company successfully updated',
            'company' => new CompanyResource($company)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        if (!$company || !Gate::allows('manage-company', $company)) {
            return response()->json([
                'message' => "Company not found"
            ], 404);
        }

        if($company->delete()) {
            return response()->json([
                'message' => 'Company successfully deleted',
                'company' => $company
            ], 202);
        } else {
            return response()->json([
                'message' => 'company not found'
            ], 204);
        }
    }
    /**
     *  Return the different categories of company
     *  @return \Illuminate\Http\Response
     */
    public function types()
    {
        return response()->json([
            'data' => CompanyCategory::all()
        ]);
    }
    /**
     * @param
     * @return \App\Models\Document
     */
    private function saveFile($file,  $documentable)
    {
        $pathname = $file->path();
        $base64 = base64_encode(file_get_contents($pathname));
        $hash = hash('sha256', file_get_contents($pathname));

        $document = Document::where('hash', $hash)->first();

        if ($document) return $document;

        $size = filesize($pathname);
        $document = new Document([
            'title' => "Company image",
            'type' => $file->extension(),
            'size' => $size,
            'base64' => $base64,
            'hash' => $hash,
        ]);

        $document->documentable()->associate($documentable);
        $document->save();

        return $document;
    }
    /**
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function updateCompanyPageUrl(Request $request, $id)
    {
        $company = Company::find($id);

        if (!$company || !Gate::allows('manage-company', $company)) {
            return response()->json([
                'message' => "Company not found"
            ], 404);
        }

        if (!Gate::allows('can-publish-company-page')) {
            return response()->json([
                'message' => "unauthorized"
            ], 401);
        }

        if (!$request->url && !$request->has('is_published')) {
            return response()->json([
                'message' => "Forbidden"
            ], 403);
        }

        if ($request->has('url')) {
            $exist = Company::where('id', '!=', $id)->where('page_url' , $request->url)->exists();

            if ($exist) {
                return response()->json([
                    "errors" => [
                        "url" => "The url is already used"
                    ]
                ], 409);
            }

            $company->update([ 'page_url' => $request->url ]);
        }


        if ($request->has('is_published')) {

            if ($request->is_published == 1 && !$this->hasUserValidSubscription(Auth::id())) {
                return response()->json([
                    "message" => "Not authorized"
                ], 401);
            }

            if (!$company->page_url) {
                return response()->json([
                    "errors" => [
                        "url" => "First generate the url"
                    ]
                ], 409);
            }

            $company->update([ 'is_page_published' => $request->is_published == 1 ]);
        }

        return response()->json([
            'message' => "The company was updated successfully"
        ]);
    }
    /**
     * @param  string $page_url
     * @return \Illuminate\Http\Response
     */
    public function getCompanyByUrl(string $page_url)
    {
        $company = Company::where('page_url', $page_url)
                            ->where('is_page_published', true)
                            ->first();

        if (!$company) {
            return response()->json([
                'message' => "Not found"
            ], 404);
        }

        return response()->json([
            'company' => new CompanyTinyResource($company)
        ]);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function getFilterItemChoices(Request $request)
    {
        $regions = $this->searchRepository->getSingleRegions();
        $departments = $this->searchRepository->getSingleDepartments();

        $region_options = $regions->merge($departments);
        $region_options = $region_options->map(function ($r) {
            return $r->name;
        });

        $code_naf_options = $this->searchRepository->getProviderCodeNafFilterOptions()->map(function ($c) {
            return $c->code_naf;
        });

        $keywords_options = $this->searchRepository->getProviderCompaniesKeywordsFilterOptons()->reduce(function ($c, $kw) {
            $kw = $kw->search_keywords;
            $kw = is_array($kw) ? $kw : json_decode($kw, true);
            $c = array_merge($c, array_values($kw));
            return array_unique($c);
        }, []);

        $names_options = $this->searchRepository->getProviderCompaniesNames()->map(function ($c) {
            return $c->name;
        });

        return response()->json([
            'data' => [
                'regions' => $region_options,
                'code_nafs' => $code_naf_options,
                'keywords' => array_values($keywords_options),
                'names' => $names_options
            ]
        ]);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Database\Query\Builder
     */
    private function searchProvider(Request $request, Builder $query)
    {
        if ($regions = (array) $request->get('regions')) {
            $query->where(function ($q) use ($regions) {
                foreach($regions as $r) {
                    $q->orWhere('intervention_zones', 'LIKE', "%{$r}%");
                }
            });
        }

        if ($naf = $request->get('code_nafs')) {
            $query->where('code_naf', 'LIKE', "{$naf}%");
        }

        if ($kw = $request->get('keywords')) {
            $query->where('search_keywords', 'LIKE', "%{$kw}%");
        }

        if ($name = $request->get('name')) {
            $query->where('companies.name', 'LIKE', "{$name}%");
        }

        return $query;
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Database\Query\Builder
     */
    private function searchBuyer(Request $request, Builder $query)
    {
        if ($request->name) {
            $query->where('companies.name', 'like', $request->name.'%');
        }

        if ($request->regions) {
            $query->join('departments', 'companies.department_id', 'departments.id')
                    ->join('regions', 'departments.region_id', 'regions.id')
                    ->whereIn('regions.slug', $request->regions);
        }

        $page = (int) $request->page;
        if ($page && $page > 1 && Auth::user()->is_verify == false) {
            return response()->json([
                'message' => 'unauthorized',
            ], 401);
        }

        return $query;
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    public function imports(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'file' => 'file|mimes:xlsx,xls,csv',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        /** @var \Illuminate\Http\UploadedFile */
        $file = $request->file;
        $extension = $file->getClientOriginalExtension();
        $pathname = $file->getPathname();

        $this->importCompanies($pathname, $extension);

        return response()->json([
            'message' => "Company imported successfully"
        ]);
    }
}
