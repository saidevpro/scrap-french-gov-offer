<?php

namespace Tests\Feature;

use App\Models\Activity;
use App\Services\TenderSearchService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TenderSearchServiceTest extends TestCase
{
    /**
     * @var 
     */
    private TenderSearchService $searchService;
    /**
     * @return null
     */
    public function setUp(): void
    {
        $this->searchService = app()->make(TenderSearchService::class);
    }
    /** 
     * A basic feature test example.
     *
     * @return void
     */
    public function testActivityFilter()
    {
        $act = Activity::where('slug', 'service')->first();
        $collection = $this->searchService->appendActivityFilter(['service']); 
        foreach($collection as $tender) {
            $this->assertTrue($tender->activity_id === $act->id);
        }   
    }
}
