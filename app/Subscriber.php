<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    //


    
    public function channels()
    {
        return $this->hasMany('App\Channel');
    }

}
