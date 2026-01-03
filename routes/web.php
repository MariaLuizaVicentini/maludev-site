<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProjetosController;
use App\Http\Controllers\HabilidadesController;

use App\Http\Controllers\SobreMimController;
use App\Http\Controllers\EntreEmContatoController;

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

Route::get('/', [InicioController::class, 'index'])
->name('pagina-inicial');

Route::get('/projetos', [ProjetosController::class, 'index'])
->name('meus-projetos');

Route::get('/habilidades', [HabilidadesController::class, 'index'])
->name('minhas-habilidades');

Route::get('/sobre', [SobreMimController::class, 'index'])
->name('sobre-mim');

Route::get('/contato', [EntreEmContatoController::class, 'index'])
->name('meu-contato');

Route::post('/contato/enviar', [EntreEmContatoController::class, 'enviar'])
->name('enviar-mensagem');
