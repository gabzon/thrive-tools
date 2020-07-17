<?php

use Illuminate\Database\Seeder;
use App\Taxonomy;

class TaxonomySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Taxonomy::create([
            'name' => 'Research and Development (R&D)',
            'slug' => 'research-development'
        ]);
        Taxonomy::create([
            'name' => 'Production',
            'slug' => 'production'
        ]);
        Taxonomy::create([
            'name' => 'Purchasing',
            'slug' => 'purchasing'
        ]);
        Taxonomy::create([
            'name' => 'Marketing',
            'slug' => 'marketing'
        ]);
        Taxonomy::create([
            'name' => 'Accounting',
            'slug' => 'accounting'
        ]);
        Taxonomy::create([
            'name' => 'Sales',
            'slug' => 'sales'
        ]);
        Taxonomy::create([
            'name' => 'Custumer Service',
            'slug' => 'custumer-service'
        ]);
        Taxonomy::create([
            'name' => 'Human Resource',
            'slug' => 'human-resource'
        ]);
        Taxonomy::create([
            'name' => 'IT Support',
            'slug' => 'it-Support'
        ]);
        Taxonomy::create([
            'name' => 'Finance',
            'slug' => 'finance'
        ]);
        Taxonomy::create([
            'name' => 'Organisation',
            'slug' => 'organisation'
        ]);
        Taxonomy::create([
            'name' => 'Operations',
            'slug' => 'operations'
        ]);
        Taxonomy::create([
            'name' => 'Strategy',
            'slug' => 'strategy'
        ]);
        Taxonomy::create([
            'name' => 'Business Development',
            'slug' => 'business-development'
        ]);
        Taxonomy::create([
            'name' => 'Self Development',
            'slug' => 'self-development'
        ]);
        Taxonomy::create([
            'name' => 'Innovation',
            'slug' => 'innovation'
        ]);
        Taxonomy::create([
            'name' => 'Risk Management',
            'slug' => 'risk-management'
        ]);
        Taxonomy::create([
            'name' => 'Family Business Succession',
            'slug' => 'family-business-succession'
        ]);
        Taxonomy::create([
            'name' => 'Administration',
            'slug' => 'administration'
        ]);
    }
}
