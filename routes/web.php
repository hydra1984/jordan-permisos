<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\JordanPermission\Models\Role;
use App\JordanPermission\Models\Permission;
use Illuminate\Support\Facades\Gate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

///rutas de full calendar
Route::get('/agenda', 'AgendaController@index');

Route::resource('/role', 'RoleController')->names('role');

Route::get('/test', function () {
    //buscamos un usuario
    $user = User::find(2);
    
    //le asignamos un rol
    //$user->roles()->sync([2]);

    //retorno el usuario con sus roles
    //return $user->roles;

    //averiguo si un usuario tiene un PERMISO
    //return $user->havePermission('role.create');

    //usar el gate para controlar el acceso del usuario logueado si tiene acceso para acceso al permiso
    Gate::authorize('haveaccess', 'role.show');

    //retorno lainformacion del usuario logueado en especifico o del buscado mas arriba
    return $user;
    
});

Route::resource('/role', 'RoleController')->names('role');

Route::resource('/user', 'UserController', ['except'=>['create','store']])->names('user');