<?php

use App\Http\Controllers\JobListingController;
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

Auth::routes();

Route::get('/home', [JobListingController::class, 'index'])->name('home');

// Routes Resources
$routes = Route::resource('jobListing', JobListingController::class);


// dd($routes);