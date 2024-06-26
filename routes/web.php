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

Route::get('/', Controllers\DashboardController::class)->name('administrator.dashboard');
Route::prefix('administrator')->name('administrator.')->group(function () {
<<<<<<< HEAD
    Route::middleware('guest')->group(function () {
    Route::get('login',[Controllers\Administrator\LoginController::class,'loginForm'])->name('login');
    Route::post('login',[Controllers\Administrator\LoginController::class,'authenticate']);
    });
    Route::middleware(['auth', 'admin'])->group(function () {
    // Employees
    Route::get('employees',[Controllers\Administrator\EmployeeController::class,'index'])->name('employees');
    Route::get('employees/store',[Controllers\Administrator\EmployeeController::class,'store'])->name('employees.store');

    Route::get('students',[Controllers\Administrator\StudentController::class,'index'])->name('students');
    Route::get('lost-items',[Controllers\Administrator\LostItemController::class,'index'])->name('lostItems');
    Route::get('item-found',[Controllers\Administrator\ItemFoundController::class,'index'])->name('itemFound');
    Route::get('announcement',[Controllers\Administrator\AnnouncementController::class,'index'])->name('announcement');
    Route::get('get-started',[Controllers\Administrator\GetStartedController::class,'index'])->name('getStarted');
    Route::get('profile',[Controllers\Administrator\ProfileController::class,'index'])->name('profile');
    Route::get('logout',Controllers\Administrator\LogoutController::class)->name('logout');
    });
});
=======
    Route::get('login', [Controllers\Administrator\LoginController::class, 'index'])->name('login');
    Route::get('employees', [Controllers\Administrator\EmployeeController::class, 'index'])->name('employees');
    Route::get('students', [Controllers\Administrator\StudentController::class, 'index'])->name('students');
    Route::get('lost-items', [Controllers\Administrator\LostItemController::class, 'index'])->name('lostItems');
    Route::get('item-found', [Controllers\Administrator\ItemFoundController::class, 'index'])->name('itemFound');
    Route::get('announcement', [Controllers\Administrator\AnnouncementController::class, 'index'])->name('announcement');
>>>>>>> refs/remotes/origin/backend

    Route::post('add', [Controllers\Administrator\AnnouncementController::class, 'store'])->name('store');

    Route::get('get-started', [Controllers\Administrator\GetStartedController::class, 'index'])->name('getStarted');
    Route::get('profile', [Controllers\Administrator\ProfileController::class, 'index'])->name('profile');
});
