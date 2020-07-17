<?php

namespace Tests\Feature\Http\Controllers;

use App\Video;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\VideoController
 */
class VideoControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $videos = factory(Video::class, 3)->create();

        $response = $this->get(route('video.index'));

        $response->assertOk();
        $response->assertViewIs('video.index');
        $response->assertViewHas('videos');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('video.create'));

        $response->assertOk();
        $response->assertViewIs('video.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\VideoController::class,
            'store',
            \App\Http\Requests\VideoStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $video = $this->faker->word;

        $response = $this->post(route('video.store'), [
            'video' => $video,
        ]);

        $videos = Video::query()
            ->where('video', $video)
            ->get();
        $this->assertCount(1, $videos);
        $video = $videos->first();

        $response->assertRedirect(route('video.index'));
        $response->assertSessionHas('video.id', $video->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $video = factory(Video::class)->create();

        $response = $this->get(route('video.show', $video));

        $response->assertOk();
        $response->assertViewIs('video.show');
        $response->assertViewHas('video');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $video = factory(Video::class)->create();

        $response = $this->get(route('video.edit', $video));

        $response->assertOk();
        $response->assertViewIs('video.edit');
        $response->assertViewHas('video');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\VideoController::class,
            'update',
            \App\Http\Requests\VideoUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $video = factory(Video::class)->create();
        $video = $this->faker->word;

        $response = $this->put(route('video.update', $video), [
            'video' => $video,
        ]);

        $response->assertRedirect(route('video.index'));
        $response->assertSessionHas('video.id', $video->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $video = factory(Video::class)->create();

        $response = $this->delete(route('video.destroy', $video));

        $response->assertRedirect(route('video.index'));

        $this->assertDeleted($video);
    }
}
