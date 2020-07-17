<?php

namespace Tests\Feature\Http\Controllers;

use App\Industry;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\IndustryController
 */
class IndustryControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $industries = factory(Industry::class, 3)->create();

        $response = $this->get(route('industry.index'));

        $response->assertOk();
        $response->assertViewIs('industry.index');
        $response->assertViewHas('industries');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('industry.create'));

        $response->assertOk();
        $response->assertViewIs('industry.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\IndustryController::class,
            'store',
            \App\Http\Requests\IndustryStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $industry = $this->faker->word;

        $response = $this->post(route('industry.store'), [
            'industry' => $industry,
        ]);

        $industries = Industry::query()
            ->where('industry', $industry)
            ->get();
        $this->assertCount(1, $industries);
        $industry = $industries->first();

        $response->assertRedirect(route('industry.index'));
        $response->assertSessionHas('industry.id', $industry->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $industry = factory(Industry::class)->create();

        $response = $this->get(route('industry.show', $industry));

        $response->assertOk();
        $response->assertViewIs('industry.show');
        $response->assertViewHas('industry');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $industry = factory(Industry::class)->create();

        $response = $this->get(route('industry.edit', $industry));

        $response->assertOk();
        $response->assertViewIs('industry.edit');
        $response->assertViewHas('industry');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\IndustryController::class,
            'update',
            \App\Http\Requests\IndustryUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $industry = factory(Industry::class)->create();
        $industry = $this->faker->word;

        $response = $this->put(route('industry.update', $industry), [
            'industry' => $industry,
        ]);

        $response->assertRedirect(route('industry.index'));
        $response->assertSessionHas('industry.id', $industry->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $industry = factory(Industry::class)->create();

        $response = $this->delete(route('industry.destroy', $industry));

        $response->assertRedirect(route('industry.index'));

        $this->assertDeleted($industry);
    }
}
