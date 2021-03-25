<?php
namespace App\JordanPermission\Traits;

trait UserTrait {

    //desde aqui
    public function roles(){
        return $this->belongsToMany('App\JordanPermission\Models\Role')->withTimesTamps();
    }

    public function havePermission($permission){
        
        foreach ($this->roles as $role) {
            if ($role['full-access'] == 'yes'){
                return true;
            }

            foreach ($role->permissions as $perm) {
                if ($perm->slug == $permission) {
                    return true;
                }
            }
        }
        return false;
        //devuelve los roles de un usuario
        //return $this->roles;
    }

}

