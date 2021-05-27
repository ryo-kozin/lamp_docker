<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new \App\User([
                'name' => 'Edwin Diez',
                'email' => 'hello@gmail.com',
                'password' => '123'
            ]);
        $user->save();

        // DB::table('users')->insert([
        //     'name' => ,
        //     'email' => ,
        //     'password' => 
        // ]);
    }
}
