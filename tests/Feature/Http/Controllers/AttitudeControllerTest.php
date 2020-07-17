<?php

namespace Tests\Feature\Http\Controllers;

use App\Attitude;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\AttitudeController
 */
class AttitudeControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $attitudes = factory(Attitude::class, 3)->create();

        $response = $this->get(route('attitude.index'));

        $response->assertOk();
        $response->assertViewIs('attitude.index');
        $response->assertViewHas('attitudes');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('attitude.create'));

        $response->assertOk();
        $response->assertViewIs('attitude.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\AttitudeController::class,
            'store',
            \App\Http\Requests\AttitudeStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $attitude = $this->faker->word;

        $response = $this->post(route('attitude.store'), [
            'attitude' => $attitude,
        ]);

        $attitudes = Attitude::query()
            ->where('attitude', $attitude)
            ->get();
        $this->assertCount(1, $attitudes);
        $attitude = $attitudes->first();

        $response->assertRedirect(route('attitude.index'));
        $response->assertSessionHas('attitude.id', $attitude->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $attitude = factory(Attitude::class)->create();

        $response = $this->get(route('attitude.show', $attitude));

        $response->assertOk();
        $response->assertViewIs('attitude.show');
        $response->assertViewHas('attitude');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $attitude = factory(Attitude::class)->create();

        $response = $this->get(route('attitude.edit', $attitude));

        $response->assertOk();
        $response->assertViewIs('attitude.edit');
        $response->assertViewHas('attitude');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\AttitudeController::class,
            'update',
            \App\Http\Requests\AttitudeUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $attitude = factory(Attitude::class)->create();
        $attitude = $this->faker->word;

        $response = $this->put(route('attitude.update', $attitude), [
            'attitude' => $attitude,
        ]);

        $response->assertRedirect(route('attitude.index'));
        $response->assertSessionHas('attitude.id', $attitude->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $attitude = factory(Attitude::class)->create();

        $response = $this->delete(route('attitude.destroy', $attitude));

        $response->assertRedirect(route('attitude.index'));

        $this->assertDeleted($attitude);
    }
}
