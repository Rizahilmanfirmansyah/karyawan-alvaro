<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
//wire
use App\Http\Livewire\Employe\EmployeComponent;
use App\Http\Livewire\Employe\EmployeAddComponent;
use App\Http\Livewire\Employe\EmployeEditComponent;
use App\Http\Livewire\Employe\EmployeDetailComponent;
use App\Http\Livewire\Position\PositionComponent;
use App\Http\Livewire\Position\PositionEditComponent;
use App\Http\Livewire\Position\PositionAddComponent;
use App\Http\Livewire\Department\DepartmentComponent;
use App\Http\Livewire\Department\DepartmentAddComponent;
use App\Http\Livewire\Department\DepartmentEditComponent;


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

//route livewire controller
Route::get('all-employe', EmployeComponent::class)->name('employe.all');
Route::get('add-employe', EmployeAddComponent::class)->name('employe.add');
Route::get('edit-employe/{employe_id}', EmployeEditComponent::class)->name('employe.edit');
Route::get('detail-employe/{employe_id}', EmployeDetailComponent::class)->name('employe.detail');

Route::get('all-department', DepartmentComponent::class)->name('department.all');
Route::get('add-department', DepartmentAddComponent::class)->name('department.add');
Route::get('edit-department/{department_id}', DepartmentEditComponent::class)->name('department.edit');

Route::get('all-position', PositionComponent::class)->name('position.all');
Route::get('add-position', PositionAddComponent::class)->name('position.add');
Route::get('edit-position/{position_id}', PositionEditComponent::class)->name('position.edit');

//routing admin
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });

// //routing user
// Route::get('/home', function () {
//     return view('user.home');
// });

// Route::get('/profile', function () {
//     return view('user.profile');
// });
