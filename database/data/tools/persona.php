<?php

return [
    'name'          => 'Persona',
    'slug'          => 'persona',
    'description'   => 'Personas are fictional characters created to represent customer types. They help you forecast the customer\'s personality, attitude and/or behavior he might use for a brand or product.',
    'tips'  => '
        * - Be creative, use information from Zodiac calendars, to numerology, to religion
        * - Try to find psychological profiles according to their preferences
        * - Imagine people\'s habits
        * - Search for a list of personalities
    ',
    'duration'      => 30,
    'duration_unit' => 'minutes',   // seconds,minutes,hours,days,weeks
    'type'          => 'tool',      //tool,guide,methodology 
    'participants'  => '1-4',
    'icon'          => 'persona',    
    'user_id'       => '',
    'attitude'      => ['Curiosity', 'Empathy', 'Understanding'],
    'industries'    => [],
    'phases'        => [],
    'questions'     => [
        'Attitude and behavior of my client?',
        'How can I understand better my clients?',
        'What is my client\'s personality?',
        'Who is my client?'
    ],
    'resources'     => [],
    'sources'       => [],
    'taxonomies'    => ['Marketing', 'Operations', 'Research & Development'],
    'tags'          => ['Character', 'Listening', 'Observation', 'Personality', 'Personas', 'Marketers', 'UX Designers'],
    'files'         => [
        [ 'name' => 'Persona',  'version' => '1.0', 'uploaded_at' => '10/11/2014'],
        [ 'name' => 'Persona',  'version' => '1.1', 'uploaded_at' => '10/10/2016'],
        [ 'name' => 'Persona',  'version' => '1.2', 'uploaded_at' => '21/12/2015'],
        [ 'name' => 'Persona',  'version' => '1.3', 'uploaded_at' => '21/10/2016'],
    ],
    'video'         => []
];

