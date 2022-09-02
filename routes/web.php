<?php

use inertia\inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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
