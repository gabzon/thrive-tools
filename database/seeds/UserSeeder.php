<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email','gab.zambrano@gmail.com')->first();

        if (!$user) {
            User::create([
                'name'      => 'Gabriel Zambrano',                
                'email'     => 'gab.zambrano@gmail.com',
                'password'  => Hash::make('password')                
            ]);
        }

        factory(App\User::class, 50)->create();
    }
}
