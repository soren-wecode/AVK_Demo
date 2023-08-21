<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

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

Route::get('/', function () {
    return redirect()->route('chat.index');
})->name('home');


Route::get('chat', [ChatController::class, 'index'])->name('chat.index');
Route::get('chat/init', [ChatController::class, 'init'])->name('chat.init');
Route::post('chat/chat', [ChatController::class, 'chat'])->name('chat.chat');
Route::get('chat/get-source', [ChatController::class, 'getSource'])->name('chat.get-source');
