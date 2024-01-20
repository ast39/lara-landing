<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\TestMessageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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

Route::get('/', [HomeController::class, 'index'])->name('main.index');
Route::post('/msg', MessageController::class)->name('msg.tg.send');

Route::get('/msg', TestMessageController::class)->name('msg.tg.test');

if (env('APP_ENV') === 'production') {
    URL::forceScheme('https');
}
