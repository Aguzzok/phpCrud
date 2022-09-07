<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

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

//aca se rutea con las vistas

/*Route::get('/', function () { //si el usuario entra a cualquier url '/' que retorne welcome
    return view('welcome');
});

Route::get('/empleado', function () { 
    return view('empleado.index');//Aca estamos poniendo que retorne la vista que esta dentro de la carpeta empleado, y despues del punto la vista que queremos mostrar, en este caso la vista index.

}); //Ahora cuando en el navegador vayamos a la url /empleado, me tiene que retornar la vista index, que esta dentro de la carpeta 'empleado'.

Route::get('/empleado/create',[EmpleadoController::class,'create']);
*/
Route::resource('empleado',EmpleadoController::class);
//Con esta instrucción ya estoy cambiando todas las solicitudes de las vistas
//YA puedo acceder a todas las URLs y trabajar comodamente con los metodos de EmpleadoController

