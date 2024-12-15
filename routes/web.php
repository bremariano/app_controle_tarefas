<?php

use Illuminate\Support\Facades\Route;
use  \Illuminate\Support\Facades\Mail;
use \App\Mail\MensagemTesteMaill;

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
    return view('bem-vindo');
});

Auth::routes(['verify' => true]);

/*
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home')
    ->middleware('verified');
*/
Route::get('tarefa/exportacao/{extensao}', 'App\Http\Controllers\TarefaController@exportacao')
    ->name('tarefa.exportacao');

Route::get('tarefa/exportar', 'App\Http\Controllers\TarefaController@exportar')
    ->name('tarefa.exportar');

Route::resource('tarefa', 'App\Http\Controllers\TarefaController')
    ->middleware('verified');


Route::get('/mensagem-teste', function () {
//    Mail::to('bre.mariano0@gmail.com')->send( new \App\Mail\MensagemTesteMail());
//    return 'Mensagem enviada com sucesso!';
    return new \App\Mail\MensagemTesteMail();
});
