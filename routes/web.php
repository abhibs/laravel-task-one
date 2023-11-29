<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('', [UserController::class, 'index'])->name('home');

Route::get('user/register', [UserController::class, 'register'])->name('user-register');
Route::post('user/register/post', [UserController::class, 'registerPost'])->name('user-register-post');

Route::get('user/login', [UserController::class, 'login'])->name('user-login');
Route::post('user/login/post', [UserController::class, 'loginPost'])->name('user-login-post');


Route::group(['middleware' => 'auth:web'], function () {
    Route::get('user/profile', [UserController::class, 'profile'])->name('user-profile');
    Route::get('user/detail/{id}', [UserController::class, 'userDetail'])->name('user-detail');
    Route::get('user/logout', [UserController::class, 'userLogout'])->name('user-logout');
    Route::get('user/create', [UserController::class, 'addUser'])->name('user-add');
    Route::get('user/index', [UserController::class, 'allUser'])->name('user-index');
    Route::get('user/delete/index', [UserController::class, 'deletedUser'])->name('user-deleted-list');
    Route::post('user/store', [UserController::class, 'addUserPost'])->name('user-add-post');
    Route::get('user/profile/edit', [UserController::class, 'editProfile'])->name('user-profile-edit');
    Route::post('user/profile/update', [UserController::class, 'userProfileUpdate'])->name('user-profile-update');
    Route::get('user/edit/{id}', [UserController::class, 'editUser'])->name('user-edit');
    Route::post('user/update', [UserController::class, 'userUpdate'])->name('user-update');
    Route::get('user/delete/{id}', [UserController::class, 'deleteUser'])->name('user-delete');
    Route::get('user/restore/{id}', [UserController::class, 'restoreUser'])->name('user-restore');
    Route::get('user/permanent/delete/{id}', [UserController::class, 'forceDeleteUser'])->name('user-force-delete');

});
