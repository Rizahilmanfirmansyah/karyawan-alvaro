<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
//wire
use App\Http\Livewire\Employe\EmployeComponent;
use App\Http\Livewire\Position\PositionComponent;

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

Route::get('/login', function () {
    return view('login');
});

//Autentication Login
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('aksilogin', [LoginController::class, 'aksilogin'])->name('aksilogin');
Route::post('logout', [LoginController::class, 'aksilogout'])->name('aksilogout');  

Route::get('reg', [RegisterController::class, 'index'])->name('register');
Route::post('aksireg', [RegisterController::class, 'aksireg'])->name('aksireg');

//route livewire
Route::get('index-employe', EmployeComponent::class);














//routing admin
Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

//routing user
Route::get('/home', function () {
    return view('user.home');
});

Route::get('/profile', function () {
    return view('user.profile');
});
