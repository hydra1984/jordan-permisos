<?php

namespace App\JordanPermission\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = [
        'name', 'slug', 'description', 'full-access',
    ];

    public function users(){
        return $this->belongsToMany('App\User')->withTimesTamps();
    }

     //desde aqui
     public function permissions(){
        return $this->belongsToMany('App\JordanPermission\Models\Permission')->withTimesTamps();
    }
}
