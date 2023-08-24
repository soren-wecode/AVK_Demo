<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\OrderDetailsController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Auth/Login', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('chat', [ChatController::class, 'index'])->name('chat.index');
    Route::get('chat/init', [ChatController::class, 'init'])->name('chat.init');
    Route::post('chat/chat', [ChatController::class, 'chat'])->name('chat.chat');
    Route::get('chat/get-source', [ChatController::class, 'getSource'])->name('chat.get-source');

    Route::get('cart/get', [CartController::class, 'get'])->name('cart.get');
    Route::post('cart/add-product', [CartController::class, 'addProduct'])->name('cart.add-product');
    Route::post('cart/remove-product', [CartController::class, 'removeProduct'])->name('cart.remove-product');
    Route::post('cart/destroy', [CartController::class, 'destroy'])->name('cart.destroy');

    Route::get('order-details', [OrderDetailsController::class, 'index'])->name('order-details.index');
});
