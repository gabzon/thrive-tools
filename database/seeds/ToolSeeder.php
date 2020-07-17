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
             ]);
         }
 
         // 2. Business Model Canvas
         $bmc = Tool::where('name','Business Model Canvas')->first();
         if ( !$bmc ) {
             $tool = require_once database_path('data/tools/bmc.php');
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
             ]);
         }
 
         // 3. Compass 
         $compass = Tool::where('name','Compass')->first();
         if ( !$compass ) {            
             $tool = require_once database_path('data/tools/compass.php');
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
             ]);
         }
 
 
         // 9. Puzzle
         $puzzle = Tool::where('name','Puzzle')->first();
         if ( !$puzzle ) {
             $tool = require_once database_path('data/tools/puzzle.php');            
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
             ]);
         }
 
 
         // 14. Value Proposition Canvas
         $vcp = Tool::where('name','Value Proposition Canvas')->first();
         if ( !$vcp ) {
             $tool = require_once database_path('data/tools/vcp.php');            
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
             ]);
         }
    }
}
