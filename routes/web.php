<?php

use App\Http\Controllers\TelegramBotController;
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
    return view('welcome');
});

Route::get('/updated-activity', [TelegramBotController::class , 'updatedActivity']);
Route::get('/send-message', [TelegramBotController::class, 'storeMessage']);
Route::get('/send-sivsagar', [TelegramBotController::class, 'sendToSivsagar']);
Route::get('/send-westkarbi', [TelegramBotController::class, 'sendToWestKarbi']);
Route::get('/send-dibrugarh', [TelegramBotController::class, 'sendToDibrugarh']);
Route::get('/send-jorhat', [TelegramBotController::class, 'sendToJorhat']);
Route::get('/send-dhemaji', [TelegramBotController::class, 'sendToDhemaji']);
Route::get('/send-kamrup-rural', [TelegramBotController::class, 'sendToKamrupR']);
Route::get('/send-sonitpur', [TelegramBotController::class, 'sendToSonitpur']);
