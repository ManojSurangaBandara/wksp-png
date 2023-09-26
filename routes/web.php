<?php

use App\Http\Controllers\ajaxController;
use App\Http\Controllers\JobTypeController;
use App\Http\Controllers\NatureOfRepairController;
use App\Http\Controllers\RegimentController;
use App\Http\Controllers\RepairTypeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SlemeBattalionController;
use App\Http\Controllers\SupplierDetailController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\WorkshopTypeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'changePassword'])->name('profile');
    Route::post('/profile', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('update-password');
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('workshop', WorkshopController::class);
    Route::prefix('settings')->group(function () {
        Route::resource('regiment', RegimentController::class);
        Route::resource('unit', UnitController::class);
        Route::resource('workshopType', WorkshopTypeController::class);
        Route::resource('jobType', JobTypeController::class);
        Route::resource('repairType', RepairTypeController::class);
        Route::resource('slemeBattalion', SlemeBattalionController::class);
        Route::resource('natureOfRepair', NatureOfRepairController::class);
        Route::resource('supplierDetail', SupplierDetailController::class);
    });

    Route::get('/ajax/getUnit', [ajaxController::class, 'getUnit'])->name('ajax.getUnit');

});
