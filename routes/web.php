<?php

use App\Http\Controllers\FacultyController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;

//Controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//ruta raiz principal y retorna una vista
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/estudiantes', [StudentController::class, 'index']);
Route::get('/docentes', [TeacherController::class, 'index']);

//Facultad
Route::get('/facultades', [FacultyController::class, 'index']);
Route::get('/facultades/registro', [FacultyController::class, 'register']);
Route::get('/facultades/actualizacion', [FacultyController::class, 'update']);

//Programas
Route::get('/programas', [ProgramController::class, 'index']);
Route::get('/programas/registro', [ProgramController::class, 'register']);
Route::get('/programas/actualizacion', [ProgramController::class, 'update']);


/* Route::get('/estudiantes', function(){
    return view('students');
});

Route::get('/docentes', function(){
    return view('teachers');
});

Route::get('/programas', function(){
    return view('program.programs');
});

Route::get('/facultades', function(){
    return view('faculty.faculties');
});

//ruta /academica/calificaciones
Route::get('/academica/calificaciones', function(){
    return view('academic.score.scores');
});

Route::get('/reporte/{codigo}', function($codigo){
    return 'El codigo estudiantil es: '. $codigo;
});

Route::get('/informe/{codigo}', function($codigo){
    return "Informe No. : {$codigo}";
});

//Validacion de solo numeros del 0 al 9 
Route::get('/informeNumValidado/{codigo}', function($codigo){
    return "Informe No. : {$codigo}";
})->where('codigo', '[0-9]+');

//Validacion de solo las vocales ->expreciones regulares
Route::get('/informeLetrasValidado/{codigo}', function($codigo){
    return "Informe No. : {$codigo}";
})->where('codigo', '[aeiou]+');

Route::get('/documento/{nombre}/{apellido}', function($nombre, $apellido){
    return 'El nombre es ' . $nombre . ' y el apellido es ' . $apellido;
});

//-------------------------EJERCICIO------------------------------
Route::get('/tarea/avanzada', function () {
    return view('avanzada.tarea.ej1');
});

Route::get('/tarea/avanzada/ejemplo', function(){
    return view('avanzada.tarea.ej2');
});

Route::get('/taller/{nombre}/{correo}/{telefono}', function($nombre, $correo, $telefono){
    return 'El nombre es: ' . $nombre . ' y el correo es: ' . $correo . ' y el telefono es: ' . $telefono;
})->where('nombre', '[a-zA-Z]+')
  ->where('telefono', '[0-9]+');

Route::get('/actividad/{codigo}/{edad?}', function($codigo, $edad=null){
    return 'El codigo es ' . $codigo . 'y la edad es ' . $edad;
})->where('edad', '[0-9]+'); */




