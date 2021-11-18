<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response; 
use Tests\TestCase;
use App\Models\Tender;
           
class TenderResourceTest extends TestCase
{
    /**
     * Tests tender creation with no data sended
     *
     * @return void
     */
    public function testCreateTenderWithDataErrors()
    {
        $response = $this->post('/api/v1/tender');

        $response->assertStatus(Response::HTTP_FOUND);
    }
    /**
     * Tests tender store with valid data
     *
     * @return void
     */
    public function testCreateTenderWithData()
    {
        $tender = Tender::factory()->make()->toArray(); 
        
        $tender['phone'] = $tender['tel']; 
        $tender['crm_lang'] = $tender['crm_langue']; 

        $response = $this->post('/api/v1/tender', $tender); 
        $response->assertStatus(Response::HTTP_CREATED);
    }
    /**
     *  Tests request getting tenders 
     * 
     * @return void
     */
    public function testGetTenders()
    {
        $response = $this->get('/api/v1/tender'); 
        $response->assertStatus(Response::HTTP_OK); 
    }
    /**
     * Test getting a tender which didn't exist
     *
     * @return void
     */
    public function testGetNonExistentTender()
    {
        $response = $this->get('/api/v1/tender/12222222222222'); 
        $response->assertStatus(Response::HTTP_NOT_FOUND);
    }
    /**
     * Test getting a existent tender
     *
     * @return void
     */
    public function testGetExistentTender()
    {
        $tender = Tender::factory()->create();
        $response = $this->get('/api/v1/tender/'.$tender->id);
        $response->assertStatus(Response::HTTP_OK);
    }
}






