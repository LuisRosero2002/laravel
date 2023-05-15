<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inicio;
use App\Http\Controllers\materias;
use App\Http\Controllers\personas;
use App\Http\Controllers\universidad;




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

Route::get('/',[inicio::class,'index']);
Route::get('/login',[inicio::class,'login']);


/////////////////////////////////////////////////////////////////////
/// Personas

Route::get('/docentes',[personas::class,'docentes']);
Route::get('/estudiantes',[personas::class,'estudiantes']);


///////////////////////////////////////////////////////////////////
/// Universidad

Route::get('/facultad',[universidad::class,'facultades']);
Route::get('/programas',[universidad::class,'programas']);


/////////////////////////////////////////////////////////////////
//// Materias

Route::get('/materia',[materias::class,'materia']);







