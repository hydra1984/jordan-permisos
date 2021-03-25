<?php
//permission user
        $permission = Permission::create([
            'name' => 'List user',
            'slug' => 'user.index',
            'description' => 'A user can list user',
    
        ]);

        //agrego el permiso al array de permisos
        $permission_all[] = $permission->id;



        //permission user
   $permission = Permission::create([
    'name' => 'Show user',
    'slug' => 'user.show',
    'description' => 'A user can see user',

]);

//agrego el permiso al array de permisos
$permission_all[] = $permission->id;



//permission user (en el caso no es necesario porque se crea en el register)
  /* $permission = Permission::create([
    'name' => 'Create user',
    'slug' => 'user.create',
    'description' => 'A user can create user',

]);*/

//agrego el permiso al array de permisos
//$permission_all[] = $permission->id;





//permission user
   $permission = Permission::create([
    'name' => 'Edit user',
    'slug' => 'user.edit',
    'description' => 'A user can edit user',

]);

//agrego el permiso al array de permisos
$permission_all[] = $permission->id;





//permission user
   $permission = Permission::create([
    'name' => 'Destroy user',
    'slug' => 'user.destroy',
    'description' => 'A user can destroy user',

]);

//agrego el permiso al array de permisos
$permission_all[] = $permission->id;

