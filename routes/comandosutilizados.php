<?php
Route::get('/test', function () {

    /*return Role::create([
        'name' => 'Admin',
        'slug' => 'admin',
        'description' => 'Administrator',
        'full-access' => 'yes'

    ]);
    
     return Role::create([
        'name' => 'Guest',
        'slug' => 'guest',
        'description' => 'Guest',
        'full-access' => 'no'

    ]);

        return Role::create([
        'name' => 'Test',
        'slug' => 'test',
        'description' => 'Test',
        'full-access' => 'no'

    ]);
    */
    
    //buscar el usuario con id 1 y agregarle dos reles y devolver esos roles funciona
    //$user = User::find(1);
    //$user->roles()->sync([1,2]);
   // return $user->roles;



   //busca un rol y le asigna dos permisos 
   $role = Role::find(2);
    
   $role->permissions()->sync([1,2]);

   return $role->permissions;












    //$user->roles()->sync([1,3]);

   
    //$user->roles()->attach([1,2,3]);
   // return $user->roles;
    //crear roles se duplican si se actualiza mas de una vez
    //$user->roles()->attach([1,3]);

    //borrar registros roles, paso el id uno a la vez
    //$user->roles()->detach([1]);

    //nueva herramienta laravel solo deja el rol especificado
    
    //parte del video 3
    /*
    $user->roles()->sync([1,2,3]);
    return Permission::create([
        'name' => 'Create Product',
        'slug' => 'product.create',
        'description' => 'A user can create a permission',

    ]);

    $role = Role::find(2);

    $role->permissions()->sync([1]);

    return $role->permissions;*/



});