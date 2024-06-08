<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TimesheetController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');


Route::get('/user/create',[UserController::class, "create"])->name('user.create');
Route::post('/user',[UserController::class, "store"])->name('user.store');


Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home.index');
    
    Route::get('/user',[UserController::class, 'index'])->name('user.index');
    Route::get('/user/{user}/edit',[UserController::class, "edit"])->name('user.edit');
    Route::post('/user/{user}/update',[UserController::class, "update"])->name('user.update');
    Route::post('/user/{user}/delete',[UserController::class, "delete"])->name('user.delete');
    Route::get('/user/{user}/details',[UserController::class, 'details'])->name('user.details');

    Route::get('/project',[ProjectController::class, 'index'])->name('project.index');
    Route::get('/project/create',[ProjectController::class, 'create'])->name('project.create');
    Route::post('/project',[ProjectController::class, 'store'])->name('project.store');
    Route::get('/project/{project}/edit',[ProjectController::class, "edit"])->name('project.edit');
    Route::post('/project/{project}/update',[ProjectController::class, "update"])->name('project.update');
    Route::post('/project/{project}/delete',[ProjectController::class, "delete"])->name('project.delete');
    Route::get('/project/{project}/details',[ProjectController::class, 'details'])->name('project.details');
    Route::post('/projects/{project}/assign', [ProjectController::class, 'assign'])->name('project.assign');

    Route::get('/timesheet',[TimesheetController::class, 'index'])->name('timesheet.index');
    Route::get('/timesheet/create',[TimesheetController::class, 'create'])->name('timesheet.create');
    Route::post('/timesheet',[TimesheetController::class, 'store'])->name('timesheet.store');
    Route::get('/timesheet/{timesheet}/edit',[TimesheetController::class, "edit"])->name('timesheet.edit');
    Route::post('/timesheet/{timesheet}/update',[TimesheetController::class, "update"])->name('timesheet.update');
    Route::post('/timesheet/{timesheet}/delete',[TimesheetController::class, "delete"])->name('timesheet.delete');
    Route::get('/timesheet/{timesheet}/details',[TimesheetController::class, 'details'])->name('timesheet.details');

});