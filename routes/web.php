<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\RoleController as AdminRoleController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['as' => 'admin.', 'prefix' => 'admin'], function() {
    Route::group(['as' => 'users.', 'prefix' => 'users'], function() {
        Route::get('/', [AdminUserController::class, 'index'])->name('index');
    });
    Route::group(['as' => 'roles.', 'prefix' => 'roles'], function() {
        Route::get('/', [AdminRoleController::class, 'index'])->name('index');
    });
});
