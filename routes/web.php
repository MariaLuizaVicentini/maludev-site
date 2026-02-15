<?php

use App\Http\Controllers\EntreEmContatoController;
use App\Http\Controllers\GroqController;

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

Route::get('/', function () {
    return view('home');
})->name('pagina-inicial');

Route::get('/php-info', function () {
    return view('phpinfo');
});

Route::post('/contato/enviar', [EntreEmContatoController::class, 'enviar'])
->name('enviar-mensagem');

Route::group(['prefix' => 'groq', 'as' => 'groq.'], function () {
    Route::post('/chat-malu', [GroqController::class, 'chat'])
        ->name('chat');
});
