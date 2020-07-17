<?php

namespace Tests\Feature\Http\Controllers;

use App\Taxonomy;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\TaxonomyController
 */
class TaxonomyControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $taxonomies = factory(Taxonomy::class, 3)->create();

        $response = $this->get(route('taxonomy.index'));

        $response->assertOk();
        $response->assertViewIs('taxonomy.index');
        $response->assertViewHas('taxonomies');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('taxonomy.create'));

        $response->assertOk();
        $response->assertViewIs('taxonomy.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\TaxonomyController::class,
            'store',
            \App\Http\Requests\TaxonomyStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $taxonomy = $this->faker->word;

        $response = $this->post(route('taxonomy.store'), [
            'taxonomy' => $taxonomy,
        ]);

        $taxonomies = Taxonomy::query()
            ->where('taxonomy', $taxonomy)
            ->get();
        $this->assertCount(1, $taxonomies);
        $taxonomy = $taxonomies->first();

        $response->assertRedirect(route('taxonomy.index'));
        $response->assertSessionHas('taxonomy.id', $taxonomy->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $taxonomy = factory(Taxonomy::class)->create();

        $response = $this->get(route('taxonomy.show', $taxonomy));

        $response->assertOk();
        $response->assertViewIs('taxonomy.show');
        $response->assertViewHas('taxonomy');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $taxonomy = factory(Taxonomy::class)->create();

        $response = $this->get(route('taxonomy.edit', $taxonomy));

        $response->assertOk();
        $response->assertViewIs('taxonomy.edit');
        $response->assertViewHas('taxonomy');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\TaxonomyController::class,
            'update',
            \App\Http\Requests\TaxonomyUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $taxonomy = factory(Taxonomy::class)->create();
        $taxonomy = $this->faker->word;

        $response = $this->put(route('taxonomy.update', $taxonomy), [
            'taxonomy' => $taxonomy,
        ]);

        $response->assertRedirect(route('taxonomy.index'));
        $response->assertSessionHas('taxonomy.id', $taxonomy->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $taxonomy = factory(Taxonomy::class)->create();

        $response = $this->delete(route('taxonomy.destroy', $taxonomy));

        $response->assertRedirect(route('taxonomy.index'));

        $this->assertDeleted($taxonomy);
    }
}
