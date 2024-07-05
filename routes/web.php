<?php

use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\RedirectController;
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

Route::get('/', HomeController::class);
Route::get('/shorten/{slug}', RedirectController::class)->where('slug', '[A-Za-z0-9]{6}');

// Fallback route for 404 not found
Route::fallback(function () {
    return response()->view('404', [], 404);
});
