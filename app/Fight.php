<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fight extends Model
{
    /**
     * Get the event that owns the fight.
     */
    public function post()
    {
        return $this->belongsTo('App\Event');
    }
}
