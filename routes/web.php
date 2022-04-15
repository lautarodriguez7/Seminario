<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\ClienteController;


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
    return view('vendor.adminlte.auth.login');
});
// Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/home', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('user', UsersController::class)->only(['index', 'edit', 'update'])->names('admin.users');

Route::resource('articulos', ArticuloController::class);

Route::resource('roles', RoleController::class)->names('admin.roles');

Route::resource('users', UsersController::class)->names('admin.users');

Route::resource('clientes', ClienteController::class)->names('clientes');



// Route::resource('clientes', 'App\Http\Controllers\ClienteController')->names('admin.clientes');
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard.index');
// })->name('dashboard');
