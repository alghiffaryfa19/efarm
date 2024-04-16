<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardOwnerController;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\DashboardFarmerController;
use App\Http\Controllers\ScreeningController;
use App\Http\Controllers\SubScreeningController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect()->route('login');
});

Route::group(['prefix' => 'owner', 'middleware' => ['auth', 'owner']], function () {
    Route::get('dashboard', [DashboardOwnerController::class, 'index'])->name('owner');
    Route::resource('farmer', FarmerController::class);
});

Route::group(['prefix' => 'farmer', 'middleware' => ['auth', 'farmer']], function () {
    Route::get('dashboard', [DashboardFarmerController::class, 'index'])->name('farmer');
    Route::resource('screening', ScreeningController::class);

    Route::get('screening/{id}/start', [SubScreeningController::class, 'index'])->name('sub_screening');
    Route::get('screening/{id}/start/create', [SubScreeningController::class, 'create'])->name('start_screening');
    Route::post('screening/{id}/start/save', [SubScreeningController::class, 'save'])->name('save_screening');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
