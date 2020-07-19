<?php

use App\File;
use Illuminate\Database\Seeder;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        File::create([
            'name'          => 'Blueprint',  
            'version'       => '1.1', 
            'author'        => 'Gabriel Zambrano',            
            'type'          => 'pdf',            
            'lang'          => 'en',        
            'file'          => 'files/Blueprint-1.1-EN.pdf',    
            'thumbnail'     => 'files/blueprint-thumb.jpg',    
            'tool_id'       => 1,
        ]);

        File::create([
            'name'          => 'BMC',  
            'version'       => '1.0', 
            'author'        => 'Gabriel Zambrano',            
            'type'          => 'pdf',            
            'lang'          => 'en',        
            'file'          => 'files/business_model_canvas_poster.pdf',    
            'thumbnail'     => 'files/business-model-canvas-thumb.jpg',    
            'tool_id'       => 2,
        ]);

        File::create([
            'name'          => 'Compass',  
            'version'       => '1.1', 
            'author'        => 'Gabriel Zambrano',            
            'type'          => 'pdf',            
            'lang'          => 'en',        
            'file'          => 'files/Compass-1.1-EN.pdf',    
            'thumbnail'     => 'files/compass-thumb.jpg',    
            'tool_id'       => 3,
        ]);
        // return [
        //     'name'          => 'Compass',
        //     'files'         => [
        //         [ 'name' => 'Compass',  'version' => '1.0', 'uploaded_at' => '2012-10-10'],
        //         [ 'name' => 'Compass',  'version' => '1.0', 'uploaded_at' => '2016-10-17'],
        //     ],    
        // ];

        File::create([
            'name'          => 'Decision Making',  
            'version'       => '1.1', 
            'author'        => 'Gabriel Zambrano',            
            'type'          => 'kit',            
            'lang'          => 'en',        
            'file'          => 'files/Decision-making-1.0.zip',    
            'thumbnail'     => 'files/decision-making-thumb.jpg',    
            'tool_id'       => 4,
        ]);
        // return [
        //     'name'          => 'Decision making',
        //     'files'         => [
        //         [ 'name' => 'Decision making',  'version' => '1.0', 'uploaded_at' => '2016-10-10'],    
        //     ],
        // ];

        File::create([
            'name'          => 'Empathy map',  
            'version'       => '1.0', 
            'author'        => 'Gabriel Zambrano',            
            'type'          => 'pdf',            
            'lang'          => 'en',        
            'file'          => 'files/empathy-map-1.0-EN.pdf',    
            'thumbnail'     => 'files/empathy-map-thumb.jpg',    
            'tool_id'       => 5,
        ]);
        // return [
        //     'name'          => 'Empathy map',
        //     'files'         => [
        //         [ 'name' => 'Empathy map',  'version' => '1.0', 'uploaded_at' => '2016-10-12'],        
        //     ],
        // ];

        File::create([
            'name'          => 'Insight board',  
            'version'       => '1.0', 
            'author'        => 'Gabriel Zambrano',            
            'type'          => 'pdf',            
            'lang'          => 'en',        
            'file'          => 'files/Insight-board-2.1-EN.pdf',    
            'thumbnail'     => 'files/inside-board-thumb.jpg',    
            'tool_id'       => 6,
        ]);
        // return [
        //     'name'          => 'Insight board',
        //     'files'         => [
        //         [ 'name' => 'Insight board',  'version' => '2.1', 'uploaded_at' => '2016-10-19'],        
        //     ],    
        // ];

        File::create([
            'name'          => 'Keynote',  
            'version'       => '1.0', 
            'author'        => 'Gabriel Zambrano',            
            'type'          => 'pdf',            
            'lang'          => 'en',        
            'file'          => 'files/keynote-1.0.pdf',    
            'thumbnail'     => 'files/keynote-thumb.jpg',    
            'tool_id'       => 7,
        ]);
        File::create([
            'name'          => 'Keynote',  
            'version'       => '1.1', 
            'author'        => 'Gabriel Zambrano',            
            'type'          => 'pdf',            
            'lang'          => 'en',        
            'file'          => 'files/keynote-1.1.pdf',    
            'thumbnail'     => 'files/keynote-thumb.jpg',    
            'tool_id'       => 7,
        ]);
        File::create([
            'name'          => 'Keynote',  
            'version'       => '1.2', 
            'author'        => 'Gabriel Zambrano',            
            'type'          => 'pdf',            
            'lang'          => 'en',        
            'file'          => 'files/keynote-1.2-EN.pdf',    
            'thumbnail'     => 'files/keynote-thumb.jpg',    
            'tool_id'       => 7,
        ]);
        // return [
        //     'name'          => 'Keynote',
        //     'files'         => [
        //         [ 'name' => 'Keynote',  'version' => '1.0', 'uploaded_at' => '2013-10-04'],
        //         [ 'name' => 'Keynote',  'version' => '1.1', 'uploaded_at' => '2014-07-24'],
        //         [ 'name' => 'Keynote',  'version' => '1.2', 'uploaded_at' => '2016-10-08'],
        //     ],
        // ];

        File::create([
            'name'          => 'Persona',  
            'version'       => '1.0', 
            'author'        => 'Gabriel Zambrano',            
            'type'          => 'pdf',            
            'lang'          => 'en',        
            'file'          => 'files/personas-1.0.pdf',    
            'thumbnail'     => 'files/personas-thumb.jpg',    
            'tool_id'       => 8,
        ]);

        File::create([
            'name'          => 'Persona',  
            'version'       => '1.1', 
            'author'        => 'Gabriel Zambrano',            
            'type'          => 'pdf',            
            'lang'          => 'en',        
            'file'          => 'files/personas-1.1.pdf',    
            'thumbnail'     => 'files/personas-thumb.jpg',    
            'tool_id'       => 8,
        ]);
        
        File::create([
            'name'          => 'Persona',  
            'version'       => '1.2', 
            'author'        => 'Gabriel Zambrano',            
            'type'          => 'pdf',            
            'lang'          => 'en',        
            'file'          => 'files/personas-1.2.pdf',    
            'thumbnail'     => 'files/personas-thumb.jpg',    
            'tool_id'       => 8,
        ]);

        File::create([
            'name'          => 'Persona',  
            'version'       => '1.3', 
            'author'        => 'Gabriel Zambrano',            
            'type'          => 'pdf',            
            'lang'          => 'en',        
            'file'          => 'files/personas-1.3-EN.pdf',    
            'thumbnail'     => 'files/personas-thumb.jpg',    
            'tool_id'       => 8,
        ]);
        // return [
        //     'name'          => 'Persona',
        //     'files'         => [
        //         [ 'name' => 'Persona',  'version' => '1.0', 'uploaded_at' => '10/11/2014'],
        //         [ 'name' => 'Persona',  'version' => '1.1', 'uploaded_at' => '10/10/2016'],
        //         [ 'name' => 'Persona',  'version' => '1.2', 'uploaded_at' => '21/12/2015'],
        //         [ 'name' => 'Persona',  'version' => '1.3', 'uploaded_at' => '21/10/2016'],
        //     ],
        // ];

        File::create([
            'name'          => 'Puzzle',  
            'version'       => '2.1', 
            'author'        => 'Gabriel Zambrano',            
            'type'          => 'pdf',            
            'lang'          => 'en',        
            'file'          => 'files/puzzle-2.1-EN.pdf',    
            'thumbnail'     => 'files/puzzle-thumb.jpg',    
            'tool_id'       => 9,
        ]);
        // return [
        //     'name'          => 'Puzzle',
        //     'files'         => [
        //         [ 'name' => 'Puzzle',  'version' => '', 'uploaded_at' => '2016-10-11'],        
        //     ],
        // ];

        File::create([
            'name'          => 'Storyboard',  
            'version'       => '1.0', 
            'author'        => 'Gabriel Zambrano',            
            'type'          => 'pdf',            
            'lang'          => 'en',        
            'file'          => 'files/Storyboard-1.0.pdf',    
            'thumbnail'     => 'files/storyboard-thumb.jpg',    
            'tool_id'       => 10,
        ]);

        File::create([
            'name'          => 'Storyboard',  
            'version'       => '1.1', 
            'author'        => 'Gabriel Zambrano',            
            'type'          => 'pdf',            
            'lang'          => 'en',        
            'file'          => 'files/Storyboard-1.1-EN.pdf',    
            'thumbnail'     => 'files/storyboard-thumb.jpg',    
            'tool_id'       => 10,
        ]);
        // return [
        //     'name'          => 'Storyboard',
        //     'files'         => [
        //         [ 'name' => 'Storyboard',  'version' => '1.0', 'uploaded_at' => '2014-03-12'],
        //         [ 'name' => 'Storyboard',  'version' => '1.1', 'uploaded_at' => '2016-10-11'],
        //     ],    
        // ];

        File::create([
            'name'          => 'Storytelling',  
            'version'       => '1.2', 
            'author'        => 'Gabriel Zambrano',            
            'type'          => 'pdf',            
            'lang'          => 'en',        
            'file'          => 'files/Storytelling-v1.2-EN.pdf',    
            'thumbnail'     => 'files/storytelling-thumb.jpg',    
            'tool_id'       => 11,
        ]);
        // return [
        //     'name'          => 'Storytelling',
        //     'files'         => [
        //         [ 'name' => 'Storytelling',  'version' => '', 'uploaded_at' => '2014-10-03'],
        //         [ 'name' => 'Storytelling',  'version' => '', 'uploaded_at' => '2016-10-12'],
        //     ],
        // ];

        File::create([
            'name'          => 'SWOT',  
            'version'       => '1.2', 
            'author'        => 'Gabriel Zambrano',            
            'type'          => 'pdf',            
            'lang'          => 'en',        
            'file'          => 'files/swot.pdf',    
            'thumbnail'     => null,    
            'tool_id'       => 12,
        ]);
        // return [
        //     'name'          => 'SWOT',
        //     'files'         => [
        //         [ 'name' => 'SWOT',  'version' => '1.0', 'uploaded_at' => '2016-11-07'],      
        //     ],    
        // ];

        File::create([
            'name'          => 'Teamwork',  
            'version'       => '1.0', 
            'author'        => 'Gabriel Zambrano',            
            'type'          => 'pdf',            
            'lang'          => 'en',        
            'file'          => 'files/Teamwork-EN.pdf',    
            'thumbnail'     => 'files/teamwork-thumb.jpg',    
            'tool_id'       => 13,
        ]);
        // return [
        //     'name'          => 'Teamwork',
        //     'files'         => [
        //         [ 'name' => 'Teamwork',  'version' => '', 'uploaded_at' => ''],        
        //     ],  
        // ];
    }
}

//$table->enum('type', ["pdf","example","kit"])->default('pdf');
//$table->string('image_file')->nullable();            

// return [
//     'name'          => 'Value Proposition Canvas',
//     'files'         => [
//         [ 'name' => 'Value Proposition Canvas',  'version' => '1.0', 'uploaded_at' => '07/11/2016'],
//         [ 'name' => '',  'version' => '', 'uploaded_at' => ''],
//     ],
// ];


