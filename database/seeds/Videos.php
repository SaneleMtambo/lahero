<?php

use Illuminate\Database\Seeder;

class Videos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \App\Videos::insert([
            'user_id' => '1',
            'channel_id' => '1',
            'video' => 'http://player.vimeo.com/video/14592941?title=0&amp;byline=0&amp;portrait=0&amp;color=F64B39',
            'title' => 'First Video',
            'description' => 'theres no success without the first step theres no success without the first steptheres no success without the first steptheres no success without the first steptheres no success without the first steptheres no success without the first step',
          
        ]);
    }
}
