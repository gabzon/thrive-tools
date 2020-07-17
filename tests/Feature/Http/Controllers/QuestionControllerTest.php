<?php

namespace Tests\Feature\Http\Controllers;

use App\Question;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\QuestionController
 */
class QuestionControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $questions = factory(Question::class, 3)->create();

        $response = $this->get(route('question.index'));

        $response->assertOk();
        $response->assertViewIs('question.index');
        $response->assertViewHas('questions');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('question.create'));

        $response->assertOk();
        $response->assertViewIs('question.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\QuestionController::class,
            'store',
            \App\Http\Requests\QuestionStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $question = $this->faker->word;

        $response = $this->post(route('question.store'), [
            'question' => $question,
        ]);

        $questions = Question::query()
            ->where('question', $question)
            ->get();
        $this->assertCount(1, $questions);
        $question = $questions->first();

        $response->assertRedirect(route('question.index'));
        $response->assertSessionHas('question.id', $question->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $question = factory(Question::class)->create();

        $response = $this->get(route('question.show', $question));

        $response->assertOk();
        $response->assertViewIs('question.show');
        $response->assertViewHas('question');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $question = factory(Question::class)->create();

        $response = $this->get(route('question.edit', $question));

        $response->assertOk();
        $response->assertViewIs('question.edit');
        $response->assertViewHas('question');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\QuestionController::class,
            'update',
            \App\Http\Requests\QuestionUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $question = factory(Question::class)->create();
        $question = $this->faker->word;

        $response = $this->put(route('question.update', $question), [
            'question' => $question,
        ]);

        $response->assertRedirect(route('question.index'));
        $response->assertSessionHas('question.id', $question->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $question = factory(Question::class)->create();

        $response = $this->delete(route('question.destroy', $question));

        $response->assertRedirect(route('question.index'));

        $this->assertDeleted($question);
    }
}
