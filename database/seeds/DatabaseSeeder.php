<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            AttitudeSeeder::class,
            IndustrySeeder::class,
            QuestionSeeder::class,
            ResourceSeeder::class,
            SourceSeeder::class,
            TaxonomySeeder::class,
            ToolSeeder::class,
            GuideSeeder::class,
            VideoSeeder::class
        ]);
    }
}
