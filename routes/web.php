<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LabController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


//user management
Route::get('/userlist' , [UserController::class, 'index'])->name('userlist');



//role management
Route::get('/rolelist' , [RoleController::class , 'index'])->name('role-list');


//lab management
Route::get('/lablist' , [LabController::class , 'index'])->name('lab-list');
Route::post('/create_lab' , [LabController::class , 'create']);
