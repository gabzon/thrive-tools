<?php

use Illuminate\Database\Seeder;
use App\Industry;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Industry::create([
            'name'      => 'Agricultural',
            'slug'      => 'agricultural',
            'sector'    => 'primary',
        ]);
        Industry::create([
            'name'      => 'Farming',
            'slug'      => 'farming',
            'sector'    => 'primary',
        ]);
        Industry::create([
            'name'      => 'Fishing',
            'slug'      => 'fishing',
            'sector'    => 'primary',
        ]);
        Industry::create([
            'name'      => 'Forestry',
            'slug'      => 'forestry',
            'sector'    => 'primary',
        ]);
        Industry::create([
            'name'      => 'Mining',
            'slug'      => 'mining',
            'sector'    => 'primary',
        ]);
        Industry::create([
            'name'      => 'Oil & Gas',
            'slug'      => 'oil-and-gas',
            'sector'    => 'primary',
        ]);
        Industry::create([
            'name'      => 'Manifacturing',
            'slug'      => 'manifacturing',
            'sector'    => 'secondary',
        ]);
        Industry::create([
            'name'      => 'Entertainment',
            'slug'      => 'entertainment',
            'sector'    => 'tertiary',
        ]);
        Industry::create([
            'name'      => 'Finance',
            'slug'      => 'finance',
            'sector'    => 'tertiary',
        ]);
        Industry::create([
            'name'      => 'Transportation',
            'slug'      => 'transportation',
            'sector'    => 'tertiary',
        ]);
        Industry::create([
            'name'      => 'Tourism',
            'slug'      => 'tourism',
            'sector'    => 'tertiary',
        ]);
        Industry::create([
            'name'      => 'Infrastructure',
            'slug'      => 'infrastructure',
            'sector'    => 'tertiary',
        ]);
        Industry::create([
            'name'      => 'Organisations',
            'slug'      => 'organisations',
            'sector'    => 'tertiary',
        ]);
        Industry::create([
            'name'      => 'Services',
            'slug'      => 'services',
            'sector'    => 'tertiary',
        ]);
        Industry::create([
            'name'      => 'Retail',
            'slug'      => 'retail',
            'sector'    => 'tertiary',
        ]);
        Industry::create([
            'name'      => 'Legal',
            'slug'      => 'legal',
            'sector'    => 'tertiary',
        ]);
        Industry::create([
            'name'      => 'Health',
            'slug'      => 'health',
            'sector'    => 'tertiary',
        ]);
        Industry::create([
            'name'      => 'Real Estate',
            'slug'      => 'real-estate',
            'sector'    => 'tertiary',
        ]);
        Industry::create([
            'name'      => 'Telecom',
            'slug'      => 'telecom',
            'sector'    => 'tertiary',
        ]);
        Industry::create([
            'name'      => 'Technology',
            'slug'      => 'technology',
            'sector'    => 'tertiary',
        ]);
        Industry::create([
            'name'      => 'Telecom',
            'slug'      => 'telecom',
            'sector'    => 'tertiary',
        ]);
        Industry::create([
            'name'      => 'Education',
            'slug'      => 'education',
            'sector'    => 'tertiary',
        ]);
        Industry::create([
            'name'      => 'Communication',
            'slug'      => 'communication',
            'sector'    => 'tertiary',
        ]);
        Industry::create([
            'name'      => 'Fashion',
            'slug'      => 'fashion',
            'sector'    => 'secondary',
        ]);
        Industry::create([
            'name'      => 'Construction',
            'slug'      => 'construction',
            'sector'    => 'tertiary',
        ]);
        Industry::create([
            'name'      => 'Robotics',
            'slug'      => 'robotics',
            'sector'    => 'secondary',
        ]);
    }
}
