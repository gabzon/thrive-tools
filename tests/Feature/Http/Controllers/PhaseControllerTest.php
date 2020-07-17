<?php

namespace Tests\Feature\Http\Controllers;

use App\Phase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\PhaseController
 */
class PhaseControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $phases = factory(Phase::class, 3)->create();

        $response = $this->get(route('phase.index'));

        $response->assertOk();
        $response->assertViewIs('phase.index');
        $response->assertViewHas('phases');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('phase.create'));

        $response->assertOk();
        $response->assertViewIs('phase.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PhaseController::class,
            'store',
            \App\Http\Requests\PhaseStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $phase = $this->faker->word;

        $response = $this->post(route('phase.store'), [
            'phase' => $phase,
        ]);

        $phases = Phase::query()
            ->where('phase', $phase)
            ->get();
        $this->assertCount(1, $phases);
        $phase = $phases->first();

        $response->assertRedirect(route('phase.index'));
        $response->assertSessionHas('phase.id', $phase->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $phase = factory(Phase::class)->create();

        $response = $this->get(route('phase.show', $phase));

        $response->assertOk();
        $response->assertViewIs('phase.show');
        $response->assertViewHas('phase');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $phase = factory(Phase::class)->create();

        $response = $this->get(route('phase.edit', $phase));

        $response->assertOk();
        $response->assertViewIs('phase.edit');
        $response->assertViewHas('phase');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PhaseController::class,
            'update',
            \App\Http\Requests\PhaseUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $phase = factory(Phase::class)->create();
        $phase = $this->faker->word;

        $response = $this->put(route('phase.update', $phase), [
            'phase' => $phase,
        ]);

        $response->assertRedirect(route('phase.index'));
        $response->assertSessionHas('phase.id', $phase->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $phase = factory(Phase::class)->create();

        $response = $this->delete(route('phase.destroy', $phase));

        $response->assertRedirect(route('phase.index'));

        $this->assertDeleted($phase);
    }
}
