<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AuthController;


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

// Route::get('/home', function(){
//     return view('/pages/home');
// });


Route::get('/login',function(){
    return view('/pages/login');
});


Route::get('/reservation', function(){
    return view('/pages/reservation');
});

//Route::resource('clients', 'CustomerController');

//pages routing
Route::any('/',[ClientController::class,'index'])->name('clients.index');
Route::get('/login',[ClientController::class, 'create'])->name('clients.create');
Route::post('/clients', 'ClientController@store')->name('clients.store');
Route::get('/clients', 'ClientController@edit')->name('clients.edit');
Route::post('/clients', 'ClientController@destroy')->name('clients.destroy');
// Route::resource('clients', ClientController::class);

//Login/auth routing
Route::get('/login', [AuthController::class,'showLoginForm'])->name('auth.showLoginForm');
Route::get('/authentification', [AuthController::class, 'showAuthentificationForm'])->name('auth.showAuthentificationForm');
Route::post('/login', [ClientController::class, 'create'])->name('clients.create');
 //Route::post('/login_auth/login', [AuthController::class, 'login'])->name('auth.login');
 Route::post('/login/authentification', [AuthController::class, 'register'])->name('register');






