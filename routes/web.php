<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', Controllers\DashboardController::class)->middleware('auth')->name('administrator.dashboard.index');

Route::prefix('administrator')->name('administrator.')->group(function () {

    Route::middleware('guest')->group(function () {
        Route::get('login', [Controllers\Administrator\LoginController::class, 'loginForm'])->name('login');
        Route::post('login', [Controllers\Administrator\LoginController::class, 'authenticate']);
    });

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::group(['prefix' => 'employees'], function () {
            Route::get('/', [Controllers\Administrator\EmployeeController::class, 'index'])->name('employees.index');
            Route::post('/store', [Controllers\Administrator\EmployeeController::class, 'store'])->name('employees.store');
            Route::post('/import', [Controllers\Administrator\EmployeeController::class, 'import'])->name('employees.import');
            Route::put('/update/{id}', [Controllers\Administrator\EmployeeController::class, 'update'])->name('employees.update');
            Route::get('/destroy/{id}', [Controllers\Administrator\EmployeeController::class, 'destroy'])->name('employees.destroy');
            Route::get('/reset-password/{id}', [Controllers\Administrator\EmployeeController::class, 'reset_password'])->name('employees.reset_password');
        });

        Route::group(['prefix' => 'students'], function () {
            Route::get('/', [Controllers\Administrator\StudentController::class, 'index'])->name('students.index');
            Route::put('/update/{id}', [Controllers\Administrator\StudentController::class, 'update'])->name('students.update');
            Route::get('/destroy/{id}', [Controllers\Administrator\StudentController::class, 'destroy'])->name('students.destroy');
        });

        Route::group(['prefix' => 'lost-item'], function () {
            Route::get('/', [Controllers\Administrator\LostItemController::class, 'index'])->name('lostItems.index');
            Route::get('/destroy/{id}', [Controllers\Administrator\LostItemController::class, 'destroy'])->name('lostItems.destroy');
        });

        Route::group(['prefix' => 'item-found'], function () {
            Route::get('/', [Controllers\Administrator\ItemFoundController::class, 'index'])->name('itemFound.index');
            Route::get('/destroy/{id}', [Controllers\Administrator\ItemFoundController::class, 'destroy'])->name('itemFound.destroy');
        });

        Route::group(['prefix' => 'category'], function () {
            Route::get('/', [Controllers\Administrator\CategoryController::class, 'index'])->name('category.index');
            Route::get('create', [Controllers\Administrator\CategoryController::class, 'create'])->name('category.create');
            Route::post('/', [Controllers\Administrator\CategoryController::class, 'store'])->name('category.store');
            Route::get('{category}/edit', [Controllers\Administrator\CategoryController::class, 'edit'])->name('category.edit');
            Route::put('{category}', [Controllers\Administrator\CategoryController::class, 'update'])->name('category.update');
            Route::delete('{category}', [Controllers\Administrator\CategoryController::class, 'destroy'])->name('category.destroy');
        });

        Route::group(['prefix' => 'announcement'], function () {
            Route::get('/', [Controllers\Administrator\AnnouncementController::class, 'index'])->name('announcement.index');
            Route::post('/store', [Controllers\Administrator\AnnouncementController::class, 'store'])->name('announcement.store');
            Route::post('/update/{id}', [Controllers\Administrator\AnnouncementController::class, 'update'])->name('announcement.update');
            Route::get('/destroy/{id}', [Controllers\Administrator\AnnouncementController::class, 'destroy'])->name('announcement.destroy');
        });

        Route::group(['prefix' => 'get-started'], function () {
            Route::get('/', [Controllers\Administrator\GetStartedController::class, 'index'])->name('getStarted.index');
            Route::post('/store', [Controllers\Administrator\GetStartedController::class, 'store'])->name('getStarted.store');
            Route::post('/update/{id}', [Controllers\Administrator\GetStartedController::class, 'update'])->name('getStarted.update');
            Route::get('/destroy/{id}', [Controllers\Administrator\GetStartedController::class, 'destroy'])->name('getStarted.destroy');
        });

        Route::group(['prefix' => 'profile'], function () {
            Route::get('/', [Controllers\Administrator\ProfileController::class, 'index'])->name('profile.index');
            Route::put('/update', [Controllers\Administrator\ProfileController::class, 'update'])->name('profile.update');
            Route::put('/change-password', [Controllers\Administrator\ProfileController::class, 'change_password'])->name('profile.changePassword');
        });

        Route::get('/download-template', [Controllers\Administrator\FileController::class, 'downloadTemplate'])->name('download.template');
        Route::get('logout', Controllers\Administrator\LogoutController::class)->name('logout');
    });
});
