<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rencontre extends Model
{
    public function Album()
    {
        return $this->belongsTo('App\Models\Album');
    }
    public function Equipe()
    {
        return $this->belongsTo('App\Models\Equipe');
    }
    public function Users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
