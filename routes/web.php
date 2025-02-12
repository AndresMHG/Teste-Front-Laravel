<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoinMarketCapController;

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

/* Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); */

/* Route::get('/list', [CoinMarketCapController::class, 'index']); */


Route::middleware(['auth:sanctum', 'verified'])->prefix('dashboard')->group(function () {
    Route::get('/', [CoinMarketCapController::class, 'index'])->name('dashboard');;
    /* Route::post('calculator', 'CoinMarketCapController@calculate'); */
});
