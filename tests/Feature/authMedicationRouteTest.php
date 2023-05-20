<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class authMedicationRouteTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function medications_route_requires_authentication()
    {
        $response = $this->get('/medications');
        
        $response->assertRedirect('/login');
    }
}
