<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    //



    public function videos()
    {
        return $this->hasmany('App\videos');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function subscriber() {
        return $this->belongsTo('App\Subscriber', 'channel_id');
    }



    

    
}
