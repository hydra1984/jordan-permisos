<?php

namespace App\JordanPermission\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    
    protected $fillable = [
        'name', 'slug', 'description',
    ];
    
    //desde aqui
       public function roles(){
        return $this->belongsToMany('App\JordanPermission\Models\Role')->withTimesTamps();
    }
}
