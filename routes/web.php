<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/',Controllers\DashboardController::class)->name('administrator.dashboard');
Route::get('/administrator/employees',[Controllers\Administrator\EmployeeController::class,'index'])->name('administrator.employees');
Route::get('/administrator/students',[Controllers\Administrator\StudentController::class,'index'])->name('administrator.students');
Route::get('/administrator/lost-items',[Controllers\Administrator\LostItemController::class,'index'])->name('administrator.lostItems');
Route::get('/administrator/item-found',[Controllers\Administrator\ItemFoundController::class,'index'])->name('administrator.itemFound');
Route::get('/administrator/announcement',[Controllers\Administrator\AnnouncementController::class,'index'])->name('administrator.announcement');
Route::get('/administrator/get-started',[Controllers\Administrator\GetStartedController::class,'index'])->name('administrator.getStarted');