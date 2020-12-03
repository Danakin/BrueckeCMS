<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\RoleController as AdminRoleController;
use App\Http\Controllers\Admin\PermissionController as AdminPermissionController;
use App\Http\Controllers\Admin\PostTypeController as AdminPostTypeController;
use App\Http\Controllers\Admin\PostController as AdminPostController;

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
    Route::resource('/users', AdminUserController::class);
    Route::resource('/roles', AdminRoleController::class);
    Route::resource('/permissions', AdminPermissionController::class);
    Route::resource('/posttypes', AdminPostTypeController::class);
    Route::get('/posts/{posttype:name}', [AdminPostController::class, 'index'])->name('posts.index');
    Route::get('/posts/{posttype:name}/create', [AdminPostController::class, 'create'])->name('posts.create');
    Route::resource('/posts', AdminPostController::class)->except('index', 'create');
});
