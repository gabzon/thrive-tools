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
         $blueprint = Tool::where('name','blueprint')->first();
         if ( !$blueprint ) {
             $tool = require_once database_path('data/tools/blueprint.php');
             Tool::create([
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
 
         // 2. Business Model Canvas
         $bmc = Tool::where('name','Business Model Canvas')->first();
         if ( !$bmc ) {
             $tool = require_once database_path('data/tools/bmc.php');
             Tool::create([
                 'name'         => $tool['name'],
                 'slug'         => $tool['slug'],
                 'description'  => $tool['description'],
                 'tips'         => $tool['tips'],
                 'duration'     => $tool['duration'],
                 'duration_unit'=> $tool['duration_unit'], 
                 'participants' => $tool['participants'],            
                 'icon'         => $tool['icon'],         
                 'user_id'      => 1,
                 'image'        => 'tools/bmc.png',
             ]);
         }
 
         // 3. Compass 
         $compass = Tool::where('name','Compass')->first();
         if ( !$compass ) {            
             $tool = require_once database_path('data/tools/compass.php');
             Tool::create([
                 'name'         => $tool['name'],
                 'slug'         => $tool['slug'],
                 'description'  => $tool['description'],
                 'tips'         => $tool['tips'],
                 'duration'     => $tool['duration'],
                 'duration_unit'=> $tool['duration_unit'], 
                 'participants' => $tool['participants'],
                 'icon'         => $tool['icon'],          
                 'user_id'      => 1,
                 'image'        => 'tools/compass.png',
             ]);
         }
 
 
         // 4. Decision Making 
         $decision_making = Tool::where('name','Decision making')->first();
         if ( !$decision_making ) {            
             $tool = require_once database_path('data/tools/decision-making.php');
             Tool::create([
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
 
 
         // 5. Empathy map
         $empathy_map = Tool::where('name','Empathy map')->first();
         if ( !$empathy_map ) {
             $tool = require_once database_path('data/tools/empathy-map.php');            
             Tool::create([
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
 
 
         // 6. Insight Board
         $insight_board = Tool::where('name','Insight board')->first();
         if ( !$insight_board ) {
             $tool = require_once database_path('data/tools/insight-board.php');            
             Tool::create([
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
 
 
         // 7. Keynote
         $keynote = Tool::where('name','Keynote')->first();
         if ( !$keynote ) {
             $tool = require_once database_path('data/tools/keynote.php');
             Tool::create([
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
 
 
 
         // 8. Persona
         $persona = Tool::where('name','Persona')->first();
         if ( !$persona ) {
             $tool = require_once database_path('data/tools/persona.php');            
             Tool::create([
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
 
 
         // 9. Puzzle
         $puzzle = Tool::where('name','Puzzle')->first();
         if ( !$puzzle ) {
             $tool = require_once database_path('data/tools/puzzle.php');            
             Tool::create([
                 'name'         => $tool['name'],
                 'slug'         => $tool['slug'],
                 'description'  => $tool['description'],
                 'tips'         => $tool['tips'],
                 'duration'     => $tool['duration'],
                 'duration_unit'=> $tool['duration_unit'], 
                 'participants' => $tool['participants'],
                 'icon'         => $tool['icon'],          
                 'user_id'      => 1,
                 'image'        => 'tools/puzzle.png',
             ]);
         }
 
 
         // 10. Storyboard
         $storyboard = Tool::where('name','Storyboard')->first();
         if ( !$storyboard ) {
             $tool = require_once database_path('data/tools/storyboard.php');            
             Tool::create([
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
 
 
         // 11. Storytelling
         $storytelling = Tool::where('name','Storytelling')->first();
         if ( !$storytelling ) {
             $tool = require_once database_path('data/tools/storytelling.php');            
             Tool::create([
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
 
 
         // 12. SWOT
         $swot = Tool::where('name','SWOT')->first();
         if ( !$swot ) {
             $tool = require_once database_path('data/tools/swot.php');            
             Tool::create([
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
 
 
         // 13. Teamwork
         $teamwork = Tool::where('name','Teamwork')->first();
         if ( !$teamwork ) {
             $tool = require_once database_path('data/tools/teamwork.php');            
             Tool::create([
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
 
 
         // 14. Value Proposition Canvas
         $vcp = Tool::where('name','Value Proposition Canvas')->first();
         if ( !$vcp ) {
             $tool = require_once database_path('data/tools/vcp.php');            
             Tool::create([
                 'name'         => $tool['name'],
                 'slug'         => $tool['slug'],
                 'description'  => $tool['description'],
                 'tips'         => $tool['tips'],
                 'duration'     => $tool['duration'],
                 'duration_unit'=> $tool['duration_unit'], 
                 'participants' => $tool['participants'],
                 'icon'         => $tool['icon'],          
                 'user_id'      => 1,
                 'image'        => 'tools/vpc.png',
             ]);
         }
    }
}
