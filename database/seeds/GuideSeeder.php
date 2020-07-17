<?php

use Illuminate\Database\Seeder;
use App\Guide;

class GuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Guide::create([            
            'name' => 'Adapt to new Markets',
            'slug' => 'adapt-to-new-markets',
            'description' => 'It is not the strongest or the most intelligent who will survive but those who can manage change',
            'user_id' =>  1
        ]);

        Guide::create([
            'name' => 'Avoid risk and Failure',
            'slug' => 'avoid-risk-and-failure',
            'description' => 'It is not a risk is a challenge. The real loss, is the failure of not trying',
            'user_id' =>  1
        ]);

        Guide::create([
            'name' => 'Attract new clients', 
            'slug' => 'attract-new-clients',
            'description' => 'Attract the clients by the qualities you display, and retain them by the quality you possess',
            'user_id' =>  1
        ]);

        Guide::create([
            'name' => 'Create new markets',
            'slug' => 'create-new-markets',
            'description' => 'When a market is saturated, you don’t need to steal it from your competitors, create your own',
            'user_id' =>  1
        ]);

        Guide::create([
            'name' => 'Create value',            
            'slug' => 'create-value',
            'description' => 'The best value you can deliver is the one you already have. Follow your values', 
            'user_id' =>  1
        ]);

        Guide::create([
            'name' => 'Gain trust',  
            'slug' => 'gain-trust',
            'description' => 'Trust is something you can gain by simply keeping your promises',
            'user_id' =>  1
        ]);

        Guide::create([
            'name' => 'Innovate', 
            'slug' => 'innovate', 
            'description' => 'Imagination is coming up with new and different things. Innovation means doing them',
            'user_id' =>  1
        ]);

        Guide::create([
            'name' => 'Save time',
            'slug' => 'save-time',
            'description' => 'Time is not money, is more than that. If you waste your time, you are wasting part of your life',
            'user_id' =>  1
        ]);
    }
}
