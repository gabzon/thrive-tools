<?php

namespace Tests\Feature\Http\Controllers;

use App\Source;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\SourceController
 */
class SourceControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $sources = factory(Source::class, 3)->create();

        $response = $this->get(route('source.index'));

        $response->assertOk();
        $response->assertViewIs('source.index');
        $response->assertViewHas('sources');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('source.create'));

        $response->assertOk();
        $response->assertViewIs('source.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\SourceController::class,
            'store',
            \App\Http\Requests\SourceStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $source = $this->faker->word;

        $response = $this->post(route('source.store'), [
            'source' => $source,
        ]);

        $sources = Source::query()
            ->where('source', $source)
            ->get();
        $this->assertCount(1, $sources);
        $source = $sources->first();

        $response->assertRedirect(route('source.index'));
        $response->assertSessionHas('source.id', $source->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $source = factory(Source::class)->create();

        $response = $this->get(route('source.show', $source));

        $response->assertOk();
        $response->assertViewIs('source.show');
        $response->assertViewHas('source');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $source = factory(Source::class)->create();

        $response = $this->get(route('source.edit', $source));

        $response->assertOk();
        $response->assertViewIs('source.edit');
        $response->assertViewHas('source');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\SourceController::class,
            'update',
            \App\Http\Requests\SourceUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $source = factory(Source::class)->create();
        $source = $this->faker->word;

        $response = $this->put(route('source.update', $source), [
            'source' => $source,
        ]);

        $response->assertRedirect(route('source.index'));
        $response->assertSessionHas('source.id', $source->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $source = factory(Source::class)->create();

        $response = $this->delete(route('source.destroy', $source));

        $response->assertRedirect(route('source.index'));

        $this->assertDeleted($source);
    }
}
