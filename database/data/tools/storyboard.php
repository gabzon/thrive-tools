<?php

return [
    'name'          => 'Storyboard',
    'slug'          => 'storyboard',
    'description'   => 'Represent graphically a story. This helps you create a threat of continuity for your story and to include your environment',
    'tips'  => '
        * - Don\'t worry about the qualities of your drawings, you don\'t work at Disney
        * - Detail your context as much as you can
        * - Use colors
    ',
    'duration'      => '1',
    'duration_unit' => 'hour',  // seconds,minutes,hours,days,weeks
    'type'          => 'tool',  // tool,guide,methodology,concept
    'participants'  => '1-2',
    'icon'          => 'storyboard',    
    'user_id'       => '',
    'attitude'      => ['Creative', 'Dreamer', 'Emotional', 'Empathetic', 'Imaginative'],
    'industries'    => [],
    'phases'        => [],
    'questions'     => [
        'How can I prototype a service?',
        'How can I visualize a service?'
    ],
    'resources'     => [],
    'sources'       => [],
    'taxonomies'    => ['Marketing','Sales'],
    'tags'          => ['Communication', 'Drawing', 'Prototyping', 'Stories', 'Storyboarding', 'Designers', 'Screenwriters', 'Writers'],
    'files'         => [
        [ 'name' => 'Storyboard',  'version' => '1.0', 'uploaded_at' => '2014-03-12'],
        [ 'name' => 'Storyboard',  'version' => '1.1', 'uploaded_at' => '2016-10-11'],
    ],
    'video'         => []
];