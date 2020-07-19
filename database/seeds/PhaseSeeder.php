<?php

use App\Phase;
use Illuminate\Database\Seeder;

class PhaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        Phase::create(['name' => 'Plan']);             
        Phase::create(['name' => 'Strategy']);
        Phase::create(['name' => 'Decision making']);
        Phase::create(['name' => 'Discovery']);
        Phase::create(['name' => 'Research']);
        Phase::create(['name' => 'Analysis']);
        Phase::create(['name' => 'Design']);
        Phase::create(['name' => 'Disruption']);
        Phase::create(['name' => 'Test']);
        Phase::create(['name' => 'Deployment']);
        Phase::create(['name' => 'Launch']);
        Phase::create(['name' => 'Assesment']);
        Phase::create(['name' => 'Action']);
        Phase::create(['name' => 'Pivot']);
        Phase::create(['name' => 'Creativity']);        
    }
}