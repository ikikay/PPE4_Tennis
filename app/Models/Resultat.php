<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resultat extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
    public function rencontres()
    {
        return $this->hasMany('App\Models\Rencontre');
    }
}