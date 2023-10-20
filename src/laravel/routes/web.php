<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RestaurantController;

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
    return redirect()->route('ln.rs-index');
});
Route::group(['prefix' => 'london', 'as' => 'ln.'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('top');
    Route::group(['prefix' => 'restaurants', 'as' => 'rs-'], function (){
        Route::get('/', [RestaurantController::class, 'index'])->name('index');
    });
});
