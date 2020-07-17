<?php

namespace Tests\Feature\Http\Controllers;

use App\Tool;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ToolController
 */
class ToolControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $tools = factory(Tool::class, 3)->create();

        $response = $this->get(route('tool.index'));

        $response->assertOk();
        $response->assertViewIs('tool.index');
        $response->assertViewHas('tools');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('tool.create'));

        $response->assertOk();
        $response->assertViewIs('tool.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ToolController::class,
            'store',
            \App\Http\Requests\ToolStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $tool = $this->faker->word;

        $response = $this->post(route('tool.store'), [
            'tool' => $tool,
        ]);

        $tools = Tool::query()
            ->where('tool', $tool)
            ->get();
        $this->assertCount(1, $tools);
        $tool = $tools->first();

        $response->assertRedirect(route('tool.index'));
        $response->assertSessionHas('tool.id', $tool->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $tool = factory(Tool::class)->create();

        $response = $this->get(route('tool.show', $tool));

        $response->assertOk();
        $response->assertViewIs('tool.show');
        $response->assertViewHas('tool');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $tool = factory(Tool::class)->create();

        $response = $this->get(route('tool.edit', $tool));

        $response->assertOk();
        $response->assertViewIs('tool.edit');
        $response->assertViewHas('tool');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ToolController::class,
            'update',
            \App\Http\Requests\ToolUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $tool = factory(Tool::class)->create();
        $tool = $this->faker->word;

        $response = $this->put(route('tool.update', $tool), [
            'tool' => $tool,
        ]);

        $response->assertRedirect(route('tool.index'));
        $response->assertSessionHas('tool.id', $tool->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $tool = factory(Tool::class)->create();

        $response = $this->delete(route('tool.destroy', $tool));

        $response->assertRedirect(route('tool.index'));

        $this->assertDeleted($tool);
    }
}
