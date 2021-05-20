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
Route::get('/alerts', function(){

    return view('alerts');
});
Route::get('/contact', function(){

    return view('contact');
});
Route::get('/about', function(){

    return view('about');
});

Route::get('/updated-activity', [TelegramBotController::class , 'updatedActivity']);

Route::get('/send-message', [TelegramBotController::class, 'storeMessage']);
Route::get('/send-sivsagar', [TelegramBotController::class, 'sendToSivsagar']);
Route::get('/send-dibrugarh', [TelegramBotController::class, 'sendToDibrugarh']);
Route::get('/send-jorhat', [TelegramBotController::class, 'sendToJorhat']);
Route::get('/send-dhemaji', [TelegramBotController::class, 'sendToDhemaji']);
Route::get('/send-kamrup-rural', [TelegramBotController::class, 'sendToKamrupR']);
Route::get('/send-sonitpur', [TelegramBotController::class, 'sendToSonitpur']);
Route::get('/send-lakhimpur', [TelegramBotController::class, 'sendToLakhimpur']);
Route::get('/send-tinsukia', [TelegramBotController::class, 'sendToTinsukia']);
Route::get('/send-golaghat', [TelegramBotController::class, 'sendToGolaghat']);
Route::get('/send-majuli', [TelegramBotController::class, 'sendToMajuli']);
Route::get('/send-baksa', [TelegramBotController::class, 'sendToBaksa']);
Route::get('/send-biswanath', [TelegramBotController::class, 'sendToBiswanath']);
Route::get('/send-chirang', [TelegramBotController::class, 'sendToChirang']);
Route::get('/send-cachar', [TelegramBotController::class, 'sendToCachar']);
Route::get('/send-udalguri', [TelegramBotController::class, 'sendToUdalguri']);
Route::get('/send-darrang', [TelegramBotController::class, 'sendToDarrang']);
Route::get('/send-nalbari', [TelegramBotController::class, 'sendToNalbari']);
Route::get('/send-nagaon', [TelegramBotController::class, 'sendToNagaon']);


Route::get('/send-westkarbi', [TelegramBotController::class, 'sendToWestKarbi']);









