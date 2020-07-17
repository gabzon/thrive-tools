<?php

use Illuminate\Database\Seeder;
use App\Attitude;

class AttitudeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Attitude::create([
            'name' => 'analytical',
            'slug' => 'analytical',            
            'description' => 'relating to or using analysis or logical reasoning'
        ]);
        Attitude::create([
            'name' => 'amused',
            'slug' => 'amused',
            'description' => 'finding something funny or entertaining'
        ]);
        Attitude::create([
            'name' => 'angry',
            'slug' => 'angry',
            'description' => 'feeling or showing strong annoyance, displeasure, or hostility; full of anger'
        ]);
        Attitude::create([
            'name' => 'apathetic',
            'slug' => 'apathetic',
            'description' => 'showing or feeling no interest, enthusiasm, or concern'
        ]);
        Attitude::create([
            'name' => 'appreciative',
            'slug' => 'appreciative',
            'description' => 'feeling or showing gratitude or pleasure'
        ]);
        Attitude::create([
            'name' => 'arrogant',
            'slug' => 'arrogant',
            'description' => "having or revealing an exaggerated sense of one's own importance or abilities"
        ]);
        Attitude::create([
            'name' => 'artificial',
            'slug' => 'artificial',
            'description' => '(of a person or their behaviour) insincere or affected'
        ]);
        Attitude::create([
            'name' => 'audacious',
            'slug' => 'audacious',
            'description' => 'showing a willingness to take surprisingly bold risks'
        ]);
        Attitude::create([
            'name' => 'authoritative',
            'slug' => 'authoritative',
            'description' => 'commanding and self-confident; likely to be respected and obeyed'
        ]);
        Attitude::create([
            'name' => 'awe',
            'slug' => 'awe',
            'description' => 'a feeling of reverential respect mixed with fear or wonder'
        ]);
        Attitude::create([
            'name' => 'bantering',
            'slug' => 'bantering',
            'description' => 'characterized by good-humoured teasing'
        ]);
        Attitude::create([
            'name' => 'benevolent',
            'slug' => 'benevolent',
            'description' => 'well meaning and kindly'
        ]);
        Attitude::create([
            'name' => 'brave',
            'slug' => 'brave',
            'description' => 'ready to face and endure danger or pain; showing courage'
        ]);
        Attitude::create([
            'name' => 'confident',
            'slug' => 'confident',
            'description' => "feeling or showing confidence in oneself or one's abilities or qualities"
        ]);
        Attitude::create([
            'name' => 'coherente',
            'slug' => 'coherente',
            'description' => '(of an argument, theory, or policy) logical and consistent'
        ]);
        Attitude::create([
            'name' => 'calm',
            'slug' => 'calm',
            'description' => 'not showing or feeling nervousness, anger, or other strong emotions'
        ]);
        Attitude::create([
            'name' => 'cooperative',
            'slug' => 'cooperative',
            'description' => 'involving mutual assistance in working towards a common goal'
        ]);
        Attitude::create([
            'name' => 'Cheerful',
            'slug' => 'cheerful',
            'description' => 'noticeably happy and optimistic'
        ]);
        Attitude::create([
            'name' => 'centered',
            'slug' => 'centered',
            'description' => '(of a person) well balanced and confident or serene. Having a specified subject as the most important or focal element'
        ]);
        Attitude::create([
            'name' => 'clear',
            'slug' => 'clear',
            'description' => 'easy to perceive, understand, or interpret'
        ]);
        Attitude::create([
            'name' => 'complimentary',
            'slug' => 'complimentary',
            'description' => 'expressing a compliment; praising or approving'
        ]);
        Attitude::create([
            'name' => 'critical',
            'slug' => 'critical',
            'description' => 'expressing or involving an analysis of the merits and faults of a work or an idea'
        ]);
        Attitude::create([
            'name' => 'dreamy',
            'slug' => 'dreamy',
            'description' => 'having a magical or pleasantly unreal quality; dreamlike'
        ]);
        Attitude::create([
            'name' => 'droll',
            'slug' => 'droll',
            'description' => 'curious or unusual in a way that provokes dry amusement'
        ]);
        Attitude::create([
            'name' => 'earnest',
            'slug' => 'earnest',
            'description' => 'resulting from or showing sincere and intense conviction'
        ]);
        Attitude::create([
            'name' => 'ecstatic',
            'slug' => 'ecstatic',
            'description' => 'feeling or expressing overwhelming happiness or joyful excitement'
        ]);
        Attitude::create([
            'name' => 'elated',
            'slug' => 'elated',
            'description' => 'someone who is ecstatically happy'
        ]);
        Attitude::create([
            'name' => 'encouraging',
            'slug' => 'encouraging',
            'description' => 'giving someone support or confidence; supportive'
        ]);
        Attitude::create([
            'name' => 'energetic',
            'slug' => 'energetic',
            'description' => 'showing or involving great activity or vitality'
        ]);
        Attitude::create([
            'name' => 'enthusiastic',
            'slug' => 'enthusiastic',
            'description' => 'having or showing intense and eager enjoyment, interest, or approval'
        ]);
        Attitude::create([
            'name' => 'excited',
            'slug' => 'excited',
            'description' => 'very enthusiastic and eager'
        ]);
        Attitude::create([
            'name' => 'friendly',
            'slug' => 'friendly',
            'description' => 'kind and pleasant'
        ]);
        Attitude::create([
            'name' => 'judgmental',
            'slug' => 'judgmental',
            'description' => 'having or displaying an overly critical point of view'
        ]);

        Attitude::create([
            'name' => 'objective',
            'slug' => 'objective',
            'description' => '(of a person or their judgement) not influenced by personal feelings or opinions in considering and representing facts'
        ]);
        
        Attitude::create([
            'name' => 'optimistic',
            'slug' => 'optimistic',
            'description' => 'hopeful and confident about the future'
        ]);
        Attitude::create([
            'name' => 'passionate',
            'slug' => 'passionate',
            'description' => 'having, showing, or caused by strong feelings or beliefs'
        ]);
        Attitude::create([
            'name' => 'playful',
            'slug' => 'playful',
            'description' => 'ond of games and amusement; light-hearted'
        ]);
        Attitude::create([
            'name' => 'reflective',
            'slug' => 'reflective',
            'description' => 'relating to or characterized by deep thought; thoughtful'
        ]);
        Attitude::create([
            'name' => 'relaxed',
            'slug' => 'relaxed',
            'description' => 'free from tension and anxiety'
        ]);
        Attitude::create([
            'name' => 'sharp',
            'slug' => 'sharp',
            'description' => '(of an object) having an edge or point that is able to cut or pierce something'
        ]);
        Attitude::create([
            'name' => 'sincere',
            'slug' => 'sincere',
            'description' => 'free from pretence or deceit; proceeding from genuine feelings'
        ]);
        Attitude::create([
            'name' => 'understanding',
            'slug' => 'understanding',
            'description' => "sympathetically aware of other people's feelings; tolerant and forgiving"
        ]);
        Attitude::create([
            'name' => 'vibrant',
            'slug' => 'vibrant',
            'description' => 'full of energy and life'
        ]);
        Attitude::create([
            'name' => 'Curious',
            'slug' => 'curious',
            'description' => 'eager to know or learn something'
        ]);
    }
}
