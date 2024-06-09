<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\TeamController;
use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\GlobalSettingController;

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


Route::get('/dashboard', function () {
    return view('admin.home.index');
})->middleware(['auth', 'verified','admin'])->name('dashboard');

Route::middleware('auth','admin')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::resources([
        'sliders' => SliderController::class,
        'blogs' => BlogController::class,
        'services' => ServiceController::class,
        'abouts' => AboutController::class,
        'teams' => TeamController::class,
        'contacts' => ContactController::class,
        'globalsettings' => GlobalSettingController::class,
    ]);
});