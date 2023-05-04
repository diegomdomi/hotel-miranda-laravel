<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\ContactController;

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
    return view('welcome');
});
Route::get('about-us', [AboutUsController::class, 'showAbout']);

Route::get('rooms', [RoomsController::class, 'index']);

Route::get('rooms/{id}', [RoomsController::class, 'showDetails']);

Route::get("offers", [OffersController::class, "showOffers"]);

Route::get('contact',[ContactController::class, 'showContact']);
