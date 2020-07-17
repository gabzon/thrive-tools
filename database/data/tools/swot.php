<?php

return [
    'name'          => 'SWOT',
    'slug'          => 'swot',
    'description'   => 'A SWOT analysis can be carried out for a company, product, place, industry, or person. It involves specifying the objective of the business venture or project and identifying the internal and external factors that are favorable and unfavorable to achieve that objective',
    'tips'  => '
    **Strengths and Weaknesses:** 
    *These are the internal factors within an organization.*
    * - Human resources - staff, volunteers, board members, target population
    * - Physical resources - your location, building, equipment
    * - Financial - grants, funding agencies, other sources of income
    * - Activities and processes - programs you run, systems you employ
    * - Past experiences - building blocks for learning and success, your reputation in the community
    
    **Opportunities and Threats:** 
    *These are external factors stemming from community or societal forces.*
    * - Future trends in your field or the culture
    * - The economy - local, national, or international
    * - Funding sources - foundations, donors, legislatures
    * - Demographics - changes in the age, race, gender, culture of those you serve or in your area
    * - The physical environment (Is your building in a growing part of town? Is the bus company cutting routes?)
    * - Legislation (Do new federal requirements make your job harder...or easier?)
    * - Local, national, or international events
    ',
    'duration'      => '2',
    'duration_unit' => 'hours',  // seconds,minutes,hours,days,weeks
    'participants'  => '1-2',
    'icon'          => 'swot',    
    'user_id'       => '',
    'attitude'      => ['Analytic', 'Introspection'],
    'industries'    => [],
    'phases'        => [],
    'questions'     => [
        'What are my forces?',
        'What are my opportunities?',
        'What are my strengths?',
        'What are my weaknesses'
    ],
    'resources'     => [],
    'sources'       => [],
    'taxonomies'    => ['Marketing','Strategy','Startups','Administration'],
    'tags'          => ['Analysis', 'Matrix', 'Opportunities', 'Strengths', 'SWOT', 'Threats', 'Weaknesses', 'Agile Teams', 'Brainstormers', 'Decision makers', 'Designers', 'Directors', 'Entrepreneurs'],
    'files'         => [
        [ 'name' => 'SWOT',  'version' => '1.0', 'uploaded_at' => '2016-11-07'],      
    ],
    'video'         => []
];