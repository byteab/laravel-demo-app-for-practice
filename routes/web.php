<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Car;

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
    return redirect('/addCar');
});

Route::get('/addCar', function() {
    return view('add_car');
})->name('get.car.add');

Route::post('/addCar', [Car::class, 'addCar']) -> name('post.car.add');

Route::get('/cars', [Car::class, 'listCars']) -> name('get.cars');