<?php

use App\Http\Controllers\enregistrerController;
use App\Http\Controllers\listeController;
use App\Http\Controllers\listereservationController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\passagerController;
use App\Http\Controllers\reserverController;
use App\Models\passager;
use Illuminate\Contracts\Cache\Store;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/liste', [listeController::class, "liste"])->name('liste');
Route::get('/reserver', [reserverController::class, "reserver"])->name('reserver');
Route::get('/login', [loginController::class, "login"])->name('login');
Route::get('/enregistrer', [enregistrerController::class, "enregistrer"])->name('enregistrer');
Route::post('enregistrer', [enregistrerController::class, 'enregistre']);
Route::get('passager', [passagerController::class, 'passager'])->name('passager');
Route::post('reserver', [reserverController::class, 'reserve']);
