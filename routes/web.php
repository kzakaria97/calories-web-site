<?php

use inertia\inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', function () {
    return view('pages.home.index');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/connexion',[LoginController::class,'Login'])->name('login');
Route::get('/inscription',[RegisterController::class,'Register'])->name('register');


Auth::routes();
// Affichage



Route::get('/db', function () {
    return inertia('Home');
 });

 Route::get('/db/stats', function () {
    return inertia('Stats');
 });
 Route::get('/db/profile', function () {
    return inertia('Profile');
 });
 Route::get('/db/compare', function () {
    return inertia('Compare');
 });
