<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\TeamController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ServiceController;

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

Route::get('/', [HomeController::class,'index'])->name('frontend.homes');

Route::post('/',[ContactController::class,'store'] )->name('frontend.homes.store');

Route::get('/about-us', [AboutController::class,'index'])->name('frontend.abouts');

Route::get('/our-services',[ServiceController::class,'index'])->name('frontend.services');

Route::get('/our-team', [TeamController::class,'index'])->name('frontend.teams');


Route::get('/our-blogs', [BlogController::class,'index'])->name('frontend.blogs');

Route::get('/contact-us',[ContactController::class,'create'] )->name('frontend.contacts.create');
Route::post('/contact-us/store',[ContactController::class,'store'] )->name('frontend.contacts.store');



Route::get('/logout',function(){
    session()->flush();
    return redirect('/');
});


require __DIR__.'/auth.php';