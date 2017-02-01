<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albums';
    public function Photos()
    {
        return $this->hasMany('App\Models\Photo');
        //return $this->hasMany('photos','album_id');
    }
    
}
