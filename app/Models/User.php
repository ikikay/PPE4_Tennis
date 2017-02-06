<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function Comite()
    {
        return $this->belongsTo('App\Models\Comite');
    }
    
    public function Documents()
    {
        return $this->hasMany('App\Models\Document');
    }
    public function Rencontres()
    {
        return $this->belongsToMany('App\Models\Rencontre');
    }
}

