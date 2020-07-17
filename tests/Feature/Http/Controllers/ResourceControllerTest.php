<?php

namespace Tests\Feature\Http\Controllers;

use App\Resource;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ResourceController
 */
class ResourceControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $resources = factory(Resource::class, 3)->create();

        $response = $this->get(route('resource.index'));

        $response->assertOk();
        $response->assertViewIs('resource.index');
        $response->assertViewHas('resources');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('resource.create'));

        $response->assertOk();
        $response->assertViewIs('resource.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ResourceController::class,
            'store',
            \App\Http\Requests\ResourceStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $resource = $this->faker->word;

        $response = $this->post(route('resource.store'), [
            'resource' => $resource,
        ]);

        $resources = Resource::query()
            ->where('resource', $resource)
            ->get();
        $this->assertCount(1, $resources);
        $resource = $resources->first();

        $response->assertRedirect(route('resource.index'));
        $response->assertSessionHas('resource.id', $resource->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $resource = factory(Resource::class)->create();

        $response = $this->get(route('resource.show', $resource));

        $response->assertOk();
        $response->assertViewIs('resource.show');
        $response->assertViewHas('resource');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $resource = factory(Resource::class)->create();

        $response = $this->get(route('resource.edit', $resource));

        $response->assertOk();
        $response->assertViewIs('resource.edit');
        $response->assertViewHas('resource');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ResourceController::class,
            'update',
            \App\Http\Requests\ResourceUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $resource = factory(Resource::class)->create();
        $resource = $this->faker->word;

        $response = $this->put(route('resource.update', $resource), [
            'resource' => $resource,
        ]);

        $response->assertRedirect(route('resource.index'));
        $response->assertSessionHas('resource.id', $resource->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $resource = factory(Resource::class)->create();

        $response = $this->delete(route('resource.destroy', $resource));

        $response->assertRedirect(route('resource.index'));

        $this->assertDeleted($resource);
    }
}
