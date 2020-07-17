<?php

namespace Tests\Feature\Http\Controllers;

use App\Guide;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\GuideController
 */
class GuideControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $guides = factory(Guide::class, 3)->create();

        $response = $this->get(route('guide.index'));

        $response->assertOk();
        $response->assertViewIs('guide.index');
        $response->assertViewHas('guides');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('guide.create'));

        $response->assertOk();
        $response->assertViewIs('guide.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\GuideController::class,
            'store',
            \App\Http\Requests\GuideStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $guide = $this->faker->word;

        $response = $this->post(route('guide.store'), [
            'guide' => $guide,
        ]);

        $guides = Guide::query()
            ->where('guide', $guide)
            ->get();
        $this->assertCount(1, $guides);
        $guide = $guides->first();

        $response->assertRedirect(route('guide.index'));
        $response->assertSessionHas('guide.id', $guide->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $guide = factory(Guide::class)->create();

        $response = $this->get(route('guide.show', $guide));

        $response->assertOk();
        $response->assertViewIs('guide.show');
        $response->assertViewHas('guide');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $guide = factory(Guide::class)->create();

        $response = $this->get(route('guide.edit', $guide));

        $response->assertOk();
        $response->assertViewIs('guide.edit');
        $response->assertViewHas('guide');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\GuideController::class,
            'update',
            \App\Http\Requests\GuideUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $guide = factory(Guide::class)->create();
        $guide = $this->faker->word;

        $response = $this->put(route('guide.update', $guide), [
            'guide' => $guide,
        ]);

        $response->assertRedirect(route('guide.index'));
        $response->assertSessionHas('guide.id', $guide->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $guide = factory(Guide::class)->create();

        $response = $this->delete(route('guide.destroy', $guide));

        $response->assertRedirect(route('guide.index'));

        $this->assertDeleted($guide);
    }
}
