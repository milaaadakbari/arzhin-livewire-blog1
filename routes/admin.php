<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\categoryController;
use App\Http\Controllers\Admin\PanelController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', PanelController::class);
Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);
Route::resource('categories', categoryController::class);
Route::resource('articles', ArticleController::class);
Route::get('/create_user_roles/{id}', [UserController::class, 'createUserRole'],)->name('create.user.roles');
Route::post('/store_user_roles/{id}', [UserController::class, 'storeUserRole'])->name('store.user.roles');
Route::fallback(function (){
    return view('admin.layouts.partials.errors');
});
