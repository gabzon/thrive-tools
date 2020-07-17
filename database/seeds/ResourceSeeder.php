<?php

use Illuminate\Database\Seeder;
use App\Resource;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resource::create([
            'name'  => 'Board',
            'slug'  => 'board',
            'icon'  => 'board'
        ]);
        Resource::create([
            'name'  => 'Glue',
            'slug'  => 'glue',
            'icon'  => 'glue'
        ]);
        Resource::create([
            'name'  => 'Highlighter',
            'slug'  => 'highlighter',
            'icon'  => 'highlighter'
        ]);
        Resource::create([
            'name'  => 'Microphone',
            'slug'  => 'microphone',
            'icon'  => 'microphone'
        ]);
        Resource::create([
            'name'  => 'Pen',
            'slug'  => 'pen',
            'icon'  => 'pen'
        ]);
        Resource::create([
            'name'  => 'Photo camera',
            'slug'  => 'photo-camera',
            'icon'  => 'photo-camera'
        ]);
        Resource::create([
            'name'  => 'Post-its',
            'slug'  => 'post-its',
            'icon'  => 'post-its'
        ]);
        Resource::create([
            'name'  => 'Scissors',
            'slug'  => 'scissors',
            'icon'  => 'scissors'
        ]);
        Resource::create([
            'name'  => 'Scotch tape',
            'slug'  => 'scotch-tape',
            'icon'  => 'scotch-tape'
        ]);
        Resource::create([
            'name'  => 'Smartphone',
            'slug'  => 'smartphone',
            'icon'  => 'smartphone'
        ]);
        Resource::create([
            'name'  => 'Thumbtack',
            'slug'  => 'thumbtack',
            'icon'  => 'thumbtack'
        ]);
        Resource::create([
            'name'  => 'Video camera',
            'slug'  => 'video-camera',
            'icon'  => 'video-camera'
        ]);
    }
}
