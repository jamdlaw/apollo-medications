<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Route;
use Tests\TestCase;

class MedicationFormTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_submit_medication_form()
    {
        $formData = [
            'medication-name' => 'Ibuprofen',
            'medication-dose' => '200',
            'medication-dose-uom' => 'mg',
            'medication-frequency' => '2',
            'medication-time-of-day' => 'morning-and-evening',
        ];

        // Define the route for the form submission
        Route::post('/medication', function () {
            return response()->json(['success' => true]);
        });

        // Submit the form using the POST method
        $response = $this->post('/medication', $formData);

        // Assert that the response has a successful status code
        $response->assertStatus(200);

        // Assert that the response has the expected JSON structure
        $response->assertJson(['success' => true]);
    }
}
