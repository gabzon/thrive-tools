<?php

use Illuminate\Database\Seeder;
use App\Source;

class SourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Source::create([
            'title'         => 'A Project guide to UX Design',
            'type'          => 'book',
            'author'        => 'Russ Unger & Carolyn Chandler',
            'location'      => 'Berkeley, CA. United States',
            'publisher'     => 'New Riders',
            'year'          => 2009,
            'isbn10'        => '9780321815385',
            'isbn13'        => '978-0321815385',
            'url'           => 'https://projectuxd.com',
        ]);

        Source::create([
            'title'         => 'Business Model Generation',
            'type'          => 'book',
            'author'        => 'Alexander Osterwalder & Yves Pigneur',
            'publisher'     => 'John Wiley & Sons, Inc',
            'year'          => 2010,
            'isbn10'        => '9781118656402',
            'isbn13'        => '9780470876411',
            'url'           => 'https://canvanizer.com/book/business-model-generation',
        ]);

        Source::create([
            'title'         => 'Designing For The Multifaceted User',
            'type'          => 'website',
            'author'        => 'Stephanie Troeth',
            'publisher'     => 'Smashing Magazine',
            'year'          => 2013,
            'url'           => 'https://www.smashingmagazine.com/2013/03/design-multifaceted-user/',
            'visited_on'    => '2013-08-14',
        ]);

        Source::create([
            'title'         => 'Disciplined dreaming',
            'type'          => 'book',
            'author'        => 'Josh Linkner',            
            'publisher'     => 'Jossy Bass',
            'year'          => 2011,
            'isbn10'        => '9781611201475',
            'isbn13'        => '978-1611201475',
            'url'           => 'https://joshlinkner.com/disciplined-dreaming/',
        ]);

        Source::create([
            'title'         => 'Disrupt',
            'type'          => 'book',
            'author'        => 'Luke Williams',            
            'publisher'     => 'Pearson Education Inc',
            'year'          => 2010,
            'isbn10'        => '0133995909',  
            'isbn13'        => '978-0133995909',  
        ]);

        Source::create([
            'title'         => 'GameStorming',
            'type'          => 'book',
            'author'        => 'Dave Gray, Sunni Brown & James Makanufo',
            'location'      => 'United States',
            'publisher'     => "O'reiley",
            'year'          => 2010,
            'isbn10'        => '0596804172',
            'isbn13'        => '978-0596804176',
            'url'           => 'https://gamestorming.com',
        ]);

        Source::create([
            'title'         => 'Persona (user experience)',
            'type'          => 'website',
            'author'        => 'wikipedia',            
            'publisher'     => 'wikipedia',                        
            'url'           => 'https://en.wikipedia.org/wiki/Persona_(user_experience)',                                            
            'visited_on'    => '2011-08-18',
            
        ]);
    }
}
