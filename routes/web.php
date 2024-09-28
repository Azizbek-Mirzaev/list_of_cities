<?php

use App\Http\Controllers\CityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [CityController::class, 'index'])->middleware('city.redirect')->name('index');

Route::get('/select-city/{cityName}', [CityController::class, 'selectCity'])->name('select.city');

Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/news', [MainController::class, 'news'])->name('news');

Route::get('/reset-city', [CityController::class, 'resetCity'])->name('reset.city');



