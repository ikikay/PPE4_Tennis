<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    public function Rencontres()
    {
        return $this->hasMany('App\Models\Rencontre');
    }
}
