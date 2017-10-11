<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * Get the fights for the event.
     */
    public function fights()
    {
        return $this->hasMany('App\Fight');
    }
    
}
