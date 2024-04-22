<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiController;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('rols', App\Http\Controllers\RolController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('photosDetails', App\Http\Controllers\Photos_detailsController::class);
Route::resource('photos', App\Http\Controllers\PhotoController::class);

Route::post('generateToken/{user}', [App\Http\Controllers\TokenController::class, 'generateToken'])->name('generate-token');

Route::middleware('auth:sanctum')->get('/user', function(Request $request){
    return $request->users();
   });

   