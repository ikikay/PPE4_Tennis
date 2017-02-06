<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comite extends Model
{
    public function Users()
    {
        return $this->hasMany('App\Models\User');
    }
    
}


