<?php

namespace Tests\Feature\Http\Controllers;

use App\File;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\FileController
 */
class FileControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $files = factory(File::class, 3)->create();

        $response = $this->get(route('file.index'));

        $response->assertOk();
        $response->assertViewIs('file.index');
        $response->assertViewHas('files');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('file.create'));

        $response->assertOk();
        $response->assertViewIs('file.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\FileController::class,
            'store',
            \App\Http\Requests\FileStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $file = $this->faker->word;

        $response = $this->post(route('file.store'), [
            'file' => $file,
        ]);

        $files = File::query()
            ->where('file', $file)
            ->get();
        $this->assertCount(1, $files);
        $file = $files->first();

        $response->assertRedirect(route('file.index'));
        $response->assertSessionHas('file.id', $file->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $file = factory(File::class)->create();

        $response = $this->get(route('file.show', $file));

        $response->assertOk();
        $response->assertViewIs('file.show');
        $response->assertViewHas('file');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $file = factory(File::class)->create();

        $response = $this->get(route('file.edit', $file));

        $response->assertOk();
        $response->assertViewIs('file.edit');
        $response->assertViewHas('file');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\FileController::class,
            'update',
            \App\Http\Requests\FileUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $file = factory(File::class)->create();
        $file = $this->faker->word;

        $response = $this->put(route('file.update', $file), [
            'file' => $file,
        ]);

        $response->assertRedirect(route('file.index'));
        $response->assertSessionHas('file.id', $file->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $file = factory(File::class)->create();

        $response = $this->delete(route('file.destroy', $file));

        $response->assertRedirect(route('file.index'));

        $this->assertDeleted($file);
    }
}
