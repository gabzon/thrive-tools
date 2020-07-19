<?php

use Illuminate\Database\Seeder;
use App\Tool;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1. Blueprint
        $blueprint = Tool::where('name', 'blueprint')->first();
        if (!$blueprint) {
            $tool = require_once database_path('data/tools/blueprint.php');
            $blueprint = Tool::create([
                'name' => $tool['name'],
                'slug' => $tool['slug'],
                'description' => $tool['description'],
                'tips' => $tool['tips'],
                'duration' => $tool['duration'],
                'duration_unit' => $tool['duration_unit'],
                'participants' => $tool['participants'],
                'icon' => $tool['icon'],
                'user_id' => 1,
                'image' => 'tools/blueprint.png',
            ]);
        }
        $blueprint->attitudes()->attach([23, 34, 36]);
        $blueprint->questions()->attach([1,2]);
        $blueprint->taxonomies()->attach([13,4,12,2,1]);
        // return [
        //     'name' => 'Blueprint',
        //     'attitude' => ['Chronologic', 'Focused', 'Logic'],
        //     'questions' => [
        //         'How can I create a business process?',
        //         'How to reduce risk in a business process?'
        //     ],
        //     'taxonomies' => ['strategy','marketing','operations','production', 'research & development'],        
        //     'files' => [
        //         [ 'name' => 'Blueprint',  'version' => '1.0', 'uploaded_at' => '2013-12-18'],
        //         [ 'name' => 'Blueprint',  'version' => '1.1', 'uploaded_at' => '2016-10-17'],
        //     ]
        // ];

        // 2. Business Model Canvas
        $bmc = Tool::where('name', 'Business Model Canvas')->first();
        if (!$bmc) {
            $tool = require_once database_path('data/tools/bmc.php');
            $bmc = Tool::create([
                'name'         => $tool['name'],
                'slug'         => $tool['slug'],
                'description'  => $tool['description'],
                'tips'         => $tool['tips'],
                'duration'     => $tool['duration'],
                'duration_unit' => $tool['duration_unit'],
                'participants' => $tool['participants'],
                'icon'         => $tool['icon'],
                'user_id'      => 1,
                'image'        => 'tools/bmc.png',
            ]);
        }            
        $bmc->attitudes()->attach([48,49,50]);
        $bmc->questions()->attach([3,4,5,6]);
        $bmc->taxonomies()->attach([4,13,14]);
        // return [
        //     'name' => 'Business Model Canvas',
        //     'attitude' => ['Creative', 'Imaginative', 'Visionary'],
        //     'questions' => [
        //         'How can I change my business model?',
        //         'How can I create and deliver value?',
        //         'How can I innovate?',
        //         'What is my business model?',
        //     ],
        //     'resources' => ['Post-its','Pen'],
        //     'sources' => ['Business Model Generation'],
        //     'taxonomies' => ['Marketing','Startups','Strategy','Business Development'],            
        //     'files' => [
        //         [ 'name' => 'Business Model Canvas',  'version' => '1.0', 'uploaded_at' => '2013-09-09'],
        //         [ 'name' => '',  'version' => '', 'uploaded_at' => ''],
        //     ],
        //     'video' => ['www.youtube.com/embed/QoAOzMTLP5s']
        // ];

        // 3. Compass 
        $compass = Tool::where('name', 'Compass')->first();
        if (!$compass) {
            $tool = require_once database_path('data/tools/compass.php');
            $compass = Tool::create([
                'name'         => $tool['name'],
                'slug'         => $tool['slug'],
                'description'  => $tool['description'],
                'tips'         => $tool['tips'],
                'duration'     => $tool['duration'],
                'duration_unit' => $tool['duration_unit'],
                'participants' => $tool['participants'],
                'icon'         => $tool['icon'],
                'user_id'      => 1,
                'image'        => 'tools/compass.png',
            ]);
        }        
        $compass->attitudes()->attach([14, 52, 50]);
        $compass->questions()->attach([7,8]);
        $compass->taxonomies()->attach([4,13]);
        // return [
        //     'name'          => 'Compass',
        //     'attitude'      => ['Confident', 'Determined', 'Visionary'],
        //     'questions'     => [
        //         'What is my goal?',
        //         'What should I focus on?'
        //     ],
        //     'taxonomies'    => ['Marketing','Startups','Strategy'],
        //     'tags'          => ['Decision', 'Definition', 'Goal setting', 'Decision makers', 'Directors', 'Entrepreneurs', 'Managers'],
        //     'files'         => [
        //         [ 'name' => 'Compass',  'version' => '1.0', 'uploaded_at' => '2012-10-10'],
        //         [ 'name' => 'Compass',  'version' => '1.0', 'uploaded_at' => '2016-10-17'],
        //     ],
        //     'video'         => []
        // ];

        // 4. Decision Making 
        $decision_making = Tool::where('name', 'Decision making')->first();
        if (!$decision_making) {
            $tool = require_once database_path('data/tools/decision-making.php');
            $decision_making = Tool::create([
                'name' => $tool['name'],
                'slug' => $tool['slug'],
                'description' => $tool['description'],
                'tips' => $tool['tips'],
                'duration' => $tool['duration'],
                'duration_unit' => $tool['duration_unit'],
                'participants' => $tool['participants'],
                'icon' => $tool['icon'],
                'user_id' => 1,
                'image' => 'tools/decision-making.png',
            ]);
        }        
        $decision_making->attitudes()->attach([1, 22, 51]);
        $decision_making->questions()->attach([9,10,11,12,]);
        $decision_making->taxonomies()->attach([12,11,13]);
        // return [
        //     'name'          => 'Decision making',
        //     'attitude'      => ['Analytical', 'Critical', 'Rational'],
        //     'questions'     => [
        //         'How can I make a logical decision?',
        //         'Is this a good idea?',
        //         'What is the best option?',
        //         'Which decision to make?'
        //     ],
        //     'taxonomies'    => ['Operations','Organisation','Strategy'],
        //     'tags'          => ['Decision making', 'Multi-criteria', 'Advisors', 'Consultants', 'Decision makers', 'Directors', 'Engineers', 'Entrepreneurs', 'Managers'],
        //     'files'         => [
        //         [ 'name' => 'Decision making',  'version' => '1.0', 'uploaded_at' => '2016-10-10'],    
        //     ],    
        // ];
        

        // 5. Empathy map
        $empathy_map = Tool::where('name', 'Empathy map')->first();
        if (!$empathy_map) {
            $tool = require_once database_path('data/tools/empathy-map.php');
            $empathy_map = Tool::create([
                'name' => $tool['name'],
                'slug' => $tool['slug'],
                'description' => $tool['description'],
                'tips' => $tool['tips'],
                'duration' => $tool['duration'],
                'duration_unit' => $tool['duration_unit'],
                'participants' => $tool['participants'],
                'icon' => $tool['icon'],
                'user_id' => 1,
                'image' => 'tools/empathy-map.png',
            ]);
        }        
        $empathy_map->attitudes()->attach([45, 53]);
        $empathy_map->questions()->attach([13,14,15]);
        $empathy_map->taxonomies()->attach([8,4,12,1]);
        // return [
        //     'name'          => 'Empathy map',
        //     'attitude'      => ['Understanding', 'Empathetic'],
        //     'questions'     => [
        //         'How do I better understand my clients?',
        //         'Who is my client?',
        //         'Who is my consumer?'
        //     ],
        //     'taxonomies'    => ['Human Resources', 'Marketing','Operations', 'Research & Development'],
        //     'tags'          => ['Emotions', 'Empathy', 'Lawyers', 'Marketers', 'Mediators', 'Psychologist'],
        //     'files'         => [
        //         [ 'name' => 'Empathy map',  'version' => '1.0', 'uploaded_at' => '2016-10-12'],        
        //     ],
        //     'video'         => []
        // ];
        

        // 6. Insight Board
        $insight_board = Tool::where('name', 'Insight board')->first();
        if (!$insight_board) {
            $tool = require_once database_path('data/tools/insight-board.php');
            $insight_board = Tool::create([
                'name' => $tool['name'],
                'slug' => $tool['slug'],
                'description' => $tool['description'],
                'tips' => $tool['tips'],
                'duration' => $tool['duration'],
                'duration_unit' => $tool['duration_unit'],
                'participants' => $tool['participants'],
                'icon' => $tool['icon'],
                'user_id' => 1,
                'image' => 'tools/insight-board.png',
            ]);
        }        
        $insight_board->attitudes()->attach([47, 48]);
        $insight_board->questions()->attach([16,17]);
        $insight_board->taxonomies()->attach([4,1,13,16]);
        // return [
        //     'name'          => 'Insight board',
        //     'attitude'      => ['Curious', 'Creative'],
        //     'questions'     => [
        //         'How can I connect ideas together?',
        //         'How to visualize the whole industry?'
        //     ],
        //     'taxonomies'    => ['Marketing','Research & Development','Startups','Strategy', 'Innovation'],
        //     'tags'          => ['Connecting ideas', 'Creativity', 'Imagination', 'Insight', 'Linking', 'Detectives', 'Journalists', 'Researchers'],
        //     'files'         => [
        //         [ 'name' => 'Insight board',  'version' => '2.1', 'uploaded_at' => '2016-10-19'],        
        //     ],    
        // ];

        // 7. Keynote
        $keynote = Tool::where('name', 'Keynote')->first();
        if (!$keynote) {
            $tool = require_once database_path('data/tools/keynote.php');
            $keynote= Tool::create([
                'name' => $tool['name'],
                'slug' => $tool['slug'],
                'description' => $tool['description'],
                'tips' => $tool['tips'],
                'duration' => $tool['duration'],
                'duration_unit' => $tool['duration_unit'],
                'participants' => $tool['participants'],
                'icon' => $tool['icon'],
                'user_id' => 1,
                'image' => 'tools/keynote.png',
            ]);
        }
        //  'attitude'      => ['Confident', 'Energetic', 'Enthusiastic', 'Focused'],
        $keynote->attitudes()->attach([14,30,31,34]);
        $keynote->questions()->attach([18,19]);
        $keynote->taxonomies()->attach([6]);
        // return [
        //     'name'          => 'Keynote',
        //     'attitude'      => ['Confident', 'Energetic', 'Enthusiastic', 'Focused'],
        //     'questions'     => [
        //         'How to catch the attention of the audience?',
        //         'How to present a new concept?'
        //     ],
        //     'taxonomies'    => ['Sales','Startups'],
        //     'tags'          => ['Clear', 'Creative', 'Expressive', 'Keynote', 'Speaker', 'Entrepreneurs', 'Salesmen', 'Speakers'],
        //     'files'         => [
        //         [ 'name' => 'Keynote',  'version' => '1.0', 'uploaded_at' => '2013-10-04'],
        //         [ 'name' => 'Keynote',  'version' => '1.1', 'uploaded_at' => '2014-07-24'],
        //         [ 'name' => 'Keynote',  'version' => '1.2', 'uploaded_at' => '2016-10-08'],
        //     ],
        // ];

        // 8. Persona
        $persona = Tool::where('name', 'Persona')->first();
        if (!$persona) {
            $tool = require_once database_path('data/tools/persona.php');
            $persona = Tool::create([
                'name' => $tool['name'],
                'slug' => $tool['slug'],
                'description' => $tool['description'],
                'tips' => $tool['tips'],
                'duration' => $tool['duration'],
                'duration_unit' => $tool['duration_unit'],
                'participants' => $tool['participants'],
                'icon' => $tool['icon'],
                'user_id' => 1,
                'image' => 'tools/personas.png',
            ]);
        }
        //  'attitude'      => ['Curiosity', 'Empathy', 'Understanding'],
        $persona->attitudes()->attach([47,53,45]);
        $persona->questions()->attach([20,21,22,23]);
        $persona->taxonomies()->attach([4,12,1]);
        // return [
        //     'name'          => 'Persona',
        //     'attitude'      => ['Curiosity', 'Empathy', 'Understanding'],
        //     'questions'     => [
        //         'Attitude and behavior of my client?',
        //         'How can I understand better my clients?',
        //         'What is my client\'s personality?',
        //         'Who is my client?'
        //     ],
        //     'taxonomies'    => ['Marketing', 'Operations', 'Research & Development'],
        //     'tags'          => ['Character', 'Listening', 'Observation', 'Personality', 'Personas', 'Marketers', 'UX Designers'],
        //     'files'         => [
        //         [ 'name' => 'Persona',  'version' => '1.0', 'uploaded_at' => '10/11/2014'],
        //         [ 'name' => 'Persona',  'version' => '1.1', 'uploaded_at' => '10/10/2016'],
        //         [ 'name' => 'Persona',  'version' => '1.2', 'uploaded_at' => '21/12/2015'],
        //         [ 'name' => 'Persona',  'version' => '1.3', 'uploaded_at' => '21/10/2016'],
        //     ],
        // ];

        // 9. Puzzle
        $puzzle = Tool::where('name', 'Puzzle')->first();
        if (!$puzzle) {
            $tool = require_once database_path('data/tools/puzzle.php');
            $puzzle = Tool::create([
                'name'         => $tool['name'],
                'slug'         => $tool['slug'],
                'description'  => $tool['description'],
                'tips'         => $tool['tips'],
                'duration'     => $tool['duration'],
                'duration_unit' => $tool['duration_unit'],
                'participants' => $tool['participants'],
                'icon'         => $tool['icon'],
                'user_id'      => 1,
                'image'        => 'tools/puzzle.png',
            ]);
        }        

        $puzzle->attitudes()->attach([47,49,55,51]);
        $puzzle->questions()->attach([24,25]);
        $puzzle->taxonomies()->attach([4,1,13,16]);        
        // return [
        //     'name'          => 'Puzzle',
        //     'attitude'      => ['Curious', 'Imaginative', 'Open minded', 'Rational'],
        //     'questions'     => [
        //         'How can I generate a debate?',
        //         'Which questions are pertinent for a meeting?'
        //     ],
        //     'taxonomies'    => ['Marketing','Research & Development','Startup','Strategy', 'Innovation'],
        //     'tags'          => ['Advantages', 'Beginning', 'Ideas', 'Links', 'Meetings', 'Opportunities', 'Options', 'Risks', 'Threats', 'Brainstormers', 'Communication agencies', 'Consultants', 'Screenwriters', 'TV Shows'],
        //     'files'         => [
        //         [ 'name' => 'Puzzle',  'version' => '', 'uploaded_at' => '2016-10-11'],        
        //     ],
        // ];

        // 10. Storyboard
        $storyboard = Tool::where('name', 'Storyboard')->first();
        if (!$storyboard) {
            $tool = require_once database_path('data/tools/storyboard.php');
            $storyboard = Tool::create([
                'name' => $tool['name'],
                'slug' => $tool['slug'],
                'description' => $tool['description'],
                'tips' => $tool['tips'],
                'duration' => $tool['duration'],
                'duration_unit' => $tool['duration_unit'],
                'participants' => $tool['participants'],
                'icon' => $tool['icon'],
                'user_id' => 1,
                'image' => 'tools/blueprint.png',
            ]);
        }        
        $storyboard->attitudes()->attach([48, 54, 56, 53, 49]);
        $storyboard->questions()->attach([26,27]);
        $storyboard->taxonomies()->attach([4, 6]);
        // return [
        //     'name'          => 'Storyboard',
        //     'attitude'      => ['Creative', 'Dreamer', 'Emotional', 'Empathetic', 'Imaginative'],
        //     'questions'     => [
        //         'How can I prototype a service?',
        //         'How can I visualize a service?'
        //     ],    
        //     'taxonomies'    => ['Marketing','Sales'],
        //     'tags'          => ['Communication', 'Drawing', 'Prototyping', 'Stories', 'Storyboarding', 'Designers', 'Screenwriters', 'Writers'],
        //     'files'         => [
        //         [ 'name' => 'Storyboard',  'version' => '1.0', 'uploaded_at' => '2014-03-12'],
        //         [ 'name' => 'Storyboard',  'version' => '1.1', 'uploaded_at' => '2016-10-11'],
        //     ],    
        // ];

        // 11. Storytelling
        $storytelling = Tool::where('name', 'Storytelling')->first();
        if (!$storytelling) {
            $tool = require_once database_path('data/tools/storytelling.php');
            $storytelling = Tool::create([
                'name' => $tool['name'],
                'slug' => $tool['slug'],
                'description' => $tool['description'],
                'tips' => $tool['tips'],
                'duration' => $tool['duration'],
                'duration_unit' => $tool['duration_unit'],
                'participants' => $tool['participants'],
                'icon' => $tool['icon'],
                'user_id' => 1,
                'image' => 'tools/storytelling.png',
            ]);
        }
        $storytelling->attitudes()->attach([48,56,53]);
        $storytelling->attitudes()->attach([28]);
        $storytelling->attitudes()->attach([4, 6]);
        // return [
        //     'name'          => 'Storytelling',
        //     'attitude'      => ['Creative', 'Emotional', 'Empathetic'],
        //     'questions'     => ['How can I create an unforgettable story?'],
        //     'taxonomies'    => ['Marketing', 'Sales'],
        //     'tags'          => ['Storytelling','Stories','Communication','Presenters', 'Screenwriters', 'Salesmen', 'Speakers', 'Writers'],
        //     'files'         => [
        //         [ 'name' => 'Storytelling',  'version' => '', 'uploaded_at' => '2014-10-03'],
        //         [ 'name' => 'Storytelling',  'version' => '', 'uploaded_at' => '2016-10-12'],
        //     ],
        // ];

        // 12. SWOT
        $swot = Tool::where('name', 'SWOT')->first();
        if (!$swot) {
            $tool = require_once database_path('data/tools/swot.php');
            $swot = Tool::create([
                'name' => $tool['name'],
                'slug' => $tool['slug'],
                'description' => $tool['description'],
                'tips' => $tool['tips'],
                'duration' => $tool['duration'],
                'duration_unit' => $tool['duration_unit'],
                'participants' => $tool['participants'],
                'icon' => $tool['icon'],
                'user_id' => 1,
                'image' => 'tools/swot.png',
            ]);
        }        
        $swot->attitudes()->attach([1,58]);
        $swot->questions()->attach([29,30,31,32]);
        $swot->taxonomies()->attach([4,13,19]);
        // return [
        //     'name'          => 'SWOT',
        //     'attitude'      => ['Analytic', 'Introspection'],        
        //     'questions'     => [
        //         'What are my forces?',
        //         'What are my opportunities?',
        //         'What are my strengths?',
        //         'What are my weaknesses'
        //     ],
        //     'taxonomies'    => ['Marketing','Strategy','Startups','Administration'],
        //     'tags'          => ['Analysis', 'Matrix', 'Opportunities', 'Strengths', 'SWOT', 'Threats', 'Weaknesses', 'Agile Teams', 'Brainstormers', 'Decision makers', 'Designers', 'Directors', 'Entrepreneurs'],
        //     'files'         => [
        //         [ 'name' => 'SWOT',  'version' => '1.0', 'uploaded_at' => '2016-11-07'],      
        //     ],    
        // ];

        // 13. Teamwork
        $teamwork = Tool::where('name', 'Teamwork')->first();
        if (!$teamwork) {
            $tool = require_once database_path('data/tools/teamwork.php');
            $teamwork = Tool::create([
                'name' => $tool['name'],
                'slug' => $tool['slug'],
                'description' => $tool['description'],
                'tips' => $tool['tips'],
                'duration' => $tool['duration'],
                'duration_unit' => $tool['duration_unit'],
                'participants' => $tool['participants'],
                'icon' => $tool['icon'],
                'user_id' => 1,
                'image' => 'tools/teamwork.png',
            ]);
        }
        
        $teamwork->attitudes()->attach([20,17,53,31,59,57]);
        $teamwork->attitudes()->attach([33,34]);
        $teamwork->attitudes()->attach([8, 11]);
        // return [
        //     'name'          => 'Teamwork',
        //     'attitude'      => ['Clear', 'Cooperative', 'Empathetic', 'Enthusiastic', 'Helpful', 'Honest'],    
        //     'questions'     => [
        //         'How can I improve collaboration with my teammates?',
        //         'How to improve communication with teammates?'
        //     ],
        //     'taxonomies'    => ['Organisation', 'Human Resources'],
        //     'tags'          => ['Team player', 'Teamwork', 'Agile Teams', 'Designers', 'UX Teams', 'Web Developers'],
        //     'files'         => [
        //         [ 'name' => 'Teamwork',  'version' => '', 'uploaded_at' => ''],        
        //     ],  
        // ];

        // 14. Value Proposition Canvas
        $vcp = Tool::where('name', 'Value Proposition Canvas')->first();
        if (!$vcp) {
            $tool = require_once database_path('data/tools/vcp.php');
            $vcp = Tool::create([
                'name'         => $tool['name'],
                'slug'         => $tool['slug'],
                'description'  => $tool['description'],
                'tips'         => $tool['tips'],
                'duration'     => $tool['duration'],
                'duration_unit' => $tool['duration_unit'],
                'participants' => $tool['participants'],
                'icon'         => $tool['icon'],
                'user_id'      => 1,
                'image'        => 'tools/vpc.png',
            ]);
        }
        //  'attitude'      => ['Analytic', 'Emotional', 'Empathetic', 'Structured'],
         $vcp->attitudes()->attach([1,56,53,60]);
         $vcp->questions()->attach([35,36,37,38]);
         $vcp->taxonomies()->attach([1,4,13]);
         // return [
        //     'name'          => 'Value Proposition Canvas',
        //     'attitude'      => ['Analytic', 'Emotional', 'Empathetic', 'Structured'],
        //     'questions'     => [
        //         'What basic needs is your customer trying to satisfy?',
        //         'What emotional jobs is your customer trying get done?',
        //         'What functional jobs is your customer trying get done?',
        //         'What social jobs is your customer trying to get done?'
        //     ],
        //     'taxonomies'    => ['Research & Development', 'Marketing', 'Strategy'],
        //     'tags'          => ['Customer Gains', 'Customer Jobs', 'Customer Pains', 'Gain Creators', 'Pain Relievers', 'Products & Services', 'Value Proposition Canvas', 'Brainstormers', 'Consultants', 'Entrepreneurs', 'intrapreneurs', 'Marketers'],
        //     'files'         => [
        //         [ 'name' => 'Value Proposition Canvas',  'version' => '1.0', 'uploaded_at' => '07/11/2016'],
        //         [ 'name' => '',  'version' => '', 'uploaded_at' => ''],
        //     ],
        // ];
    }
}







