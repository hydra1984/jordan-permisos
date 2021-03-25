<?php

use Illuminate\Database\Seeder;
use App\User;
use App\JordanPermission\Models\Role;
use App\JordanPermission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class JordanPermissionInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate tables
        DB::statement("SET foreign_key_checks=0");
            DB::table('role_user')->truncate();
            DB::table('permission_role')->truncate();
            Permission::truncate();
            Role::truncate();
        DB::statement("SET foreign_key_checks=1");
       
        // user admin

        $useradmin = User::where('email', 'admin@admin.com')->first();
        if ($useradmin) {
            $useradmin->delete();
        }
        $useradmin = User::create([
            'name'      => 'admin',
            'email'     => 'admin@admin.com',
            'password'  => Hash::make('admin')
        ]);

      
        //role admin - esto es la creacion de un rol llamado administrador
        
        $roladmin = Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => 'Administrator',
            'full-access' => 'yes'
    
        ]);

        //table role-user al usuario admin le asigno el rol admin
        $useradmin->roles()->sync([$roladmin->id]);
    
    
    
    
    
    
    
    
    
    
        //permission creacion de un array para la creacion por arrays de permisos
        
    $permission_all = []; //esto es un array vacio

     //permission role
     $permission = Permission::create([
        'name' => 'List role',
        'slug' => 'role.index',
        'description' => 'A user can list role',

    ]);

    //agrego el permiso al array de permisos
    $permission_all[] = $permission->id;

//creacion automatica de permisos aqui empieza

    //permission role
$permission = Permission::create([
'name' => 'Show role',
'slug' => 'role.show',
'description' => 'A user can see role',

]);

//agrego el permiso al array de permisos
$permission_all[] = $permission->id;



//permission role
$permission = Permission::create([
'name' => 'Create role',
'slug' => 'role.create',
'description' => 'A user can create role',

]);

//agrego el permiso al array de permisos
$permission_all[] = $permission->id;





//permission role
$permission = Permission::create([
'name' => 'Edit role',
'slug' => 'role.edit',
'description' => 'A user can edit role',

]);

//agrego el permiso al array de permisos
$permission_all[] = $permission->id;





//permission role
$permission = Permission::create([
'name' => 'Destroy role',
'slug' => 'role.destroy',
'description' => 'A user can destroy role',

]);

//agrego el permiso al array de permisos
$permission_all[] = $permission->id;

//.....................................................................................................

//permission user - permisos sobre los usuarios
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

//nuevos permisos
$permission = Permission::create([
    'name' => 'Show own user',
    'slug' => 'userown.show',
    'description' => 'A user can see own user',
    
    ]);

    //agrego el permiso al array de permisos
$permission_all[] = $permission->id;

$permission = Permission::create([
    'name' => 'Edit own user',
    'slug' => 'userown.edit',
    'description' => 'A user can edit own user',
    
    ]);
    
    //agrego el permiso al array de permisos
    $permission_all[] = $permission->id;




//table permission-role asignacion de todos los permisos de usuario a el admin
$roladmin =  Role::where('name', 'Admin')->first();
//$roladmin->permissions()->sync($permission_all);


    }
}
