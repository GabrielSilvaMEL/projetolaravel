<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('site.home');
// })->name('site.home');
// Route::get('/cursos', function () {
//     return view('site.cursos');
// })->name('site.curso');
// Route::get('/contatos', function () {
//     return view('site.contatos');
// })->name('site.contatos');

Route::get('/',[HomeController::class,'index'])->name('site.home');

Route::get('/cursos', [CursosController::class, 'index'])->name('site.cursos');

Route::get('/contatos', [ContatosController::class, 'index'])->name('site.contatos');
Route::post('/contatos', [ContatosController::class, 'index'])->name('site.contatos');
