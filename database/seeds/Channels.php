<?php

use Illuminate\Database\Seeder;

class Channels extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Channel::insert([
            'user_id' => '1',
            'name' => 'first Channel',
           
        ]);
        
    }
}
