<?php

use Illuminate\Database\Seeder;
use App\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::create([ 'question' => 'How can I create a business process?' ]);
        Question::create([ 'question' => 'How to reduce risk in a business process?' ]);
        Question::create([ 'question' => 'How can I change my business model?' ]);
        Question::create([ 'question' => 'How can I create and deliver value?' ]);
        Question::create([ 'question' => 'How can I innovate?' ]);
        Question::create([ 'question' => 'What is my business model?' ]);
        Question::create([ 'question' => 'What is my goal?' ]);
        Question::create([ 'question' => 'What should I focus on?' ]);
        Question::create([ 'question' => 'How can I make a logical decision?' ]);
        Question::create([ 'question' => 'Is this a good idea?' ]);
        Question::create([ 'question' => 'What is the best option?' ]);
        Question::create([ 'question' => 'Which decision to make?' ]);
        Question::create([ 'question' => 'How do I better understand my clients?' ]);
        Question::create([ 'question' => 'Who is my client?' ]);
        Question::create([ 'question' => 'Who is my consumer?' ]);
        Question::create([ 'question' => 'How can I connect ideas together?' ]);
        Question::create([ 'question' => 'How to visualize the whole industry?' ]);
        Question::create([ 'question' => 'How to catch the attention of the audience?' ]);
        Question::create([ 'question' => 'How to present a new concept?' ]);
        Question::create([ 'question' => 'Attitude and behavior of my client?' ]);
        Question::create([ 'question' => 'How can I understand better my clients?' ]);
        Question::create([ 'question' => 'What is my client\'s personality?' ]);
        Question::create([ 'question' => 'Who is my client?' ]);
        Question::create([ 'question' => 'How can I generate a debate?' ]);
        Question::create([ 'question' => 'Which questions are pertinent for a meeting?' ]);
        Question::create([ 'question' => 'How can I prototype a service?' ]);
        Question::create([ 'question' => 'How can I visualize a service?' ]);
        Question::create([ 'question' => 'How can I create an unforgettable story?' ]);
        Question::create([ 'question' => 'What are my forces?' ]);
        Question::create([ 'question' => 'What are my opportunities?' ]);
        Question::create([ 'question' => 'What are my strengths?' ]);
        Question::create([ 'question' => 'What are my weaknesses' ]);
        Question::create([ 'question' => 'How can I improve collaboration with my teammates?' ]);
        Question::create([ 'question' => 'How to improve communication with teammates?' ]);
        Question::create([ 'question' => 'What basic needs is your customer trying to satisfy?' ]);
        Question::create([ 'question' => 'What emotional jobs is your customer trying get done?' ]);
        Question::create([ 'question' => 'What functional jobs is your customer trying get done?' ]);
        Question::create([ 'question' => 'What social jobs is your customer trying to get done?' ]);
    }
}
