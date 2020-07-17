<?php

return [
    'name'          => 'Decision making',
    'slug'          => 'decision-making',
    'description'   => 'Make faster and better decisions, based on real facts and logical criterias',
    'tips'  => '
        * - Try to be objective
        * - Order criteria on a scale from 1 to 10
        * - Two criteria cannot have the same weight
        * - Get the coefficients based on the decision makers opinions
    ',
    'duration'      => '1',
    'duration_unit' => 'hour', // seconds,minutes,hours,days,weeks
    'type'          => 'tool', //tool,guide,methodology 
    'participants'  => '',
    'icon'          => 'decision-making',    
    'user_id'       => '',
    'attitude'      => ['Analytical', 'Critical', 'Rational'],
    'industries'    => [],
    'phases'        => [],
    'questions'     => [
        'How can I make a logical decision?',
        'Is this a good idea?',
        'What is the best option?',
        'Which decision to make?'
    ],
    'resources'     => [],
    'sources'       => [],
    'taxonomies'    => ['Operations','Organisation','Strategy'],
    'tags'          => ['Decision making', 'Multi-criteria', 'Advisors', 'Consultants', 'Decision makers', 'Directors', 'Engineers', 'Entrepreneurs', 'Managers'],
    'files'         => [
        [ 'name' => 'Decision making',  'version' => '1.0', 'uploaded_at' => '2016-10-10'],    
    ],
    'video'         => []
];

