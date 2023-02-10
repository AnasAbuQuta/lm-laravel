<?php

use App\Http\Controllers\HospitalController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('admin')->group(function(){
    // Route::get('/hospital/index', [HospitalController::class, 'index'])->name('hospital.index');
    // Route::post('/hospital/create', [HospitalController::class, 'create'])->name('hospital.create');
    // Route::get('/hospital/store', [HospitalController::class, 'store'])->name('hospital.store');
    // Route::get('/hospital/show/{id}', [HospitalController::class, 'show'])->name('hospital.show');
    // Route::get('/hospital/edit/{id}', [HospitalController::class, 'edit'])->name('hospital.edit');
    // Route::post('/hospital/update/{id}', [HospitalController::class, 'update'])->name('hospital.update');
    // Route::delete('/hospital/destroy/{id}', [HospitalController::class, 'destroy'])->name('hospital.destroy');

    Route::resource('hospitals', HospitalController::class);
});
