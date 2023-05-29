<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HomeController;


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

//Route for the "web" and database routes
Route::get('/', [\App\Http\Controllers\HomeController::class, 'home']);

// Route::get('/' , [HomeController::class, 'index']);


 //Layouts main for application
Route::get('/promotion', function (){
    return view('promotion');
});
Route::get('/upcomming', function (){
    return view('upcomming');
});
Route::get('/newfashion', function (){
    return view('newfashion');
});
Route::get('/detailproduct', function (){
    return view('detailproduct');
});

Route::get('/index', function (){
    return view('home.index');
});
Route::get('/product', function (){
    return view('product');
});
