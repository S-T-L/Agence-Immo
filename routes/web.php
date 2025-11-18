<?php

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PropertyController;


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

// groupe de route concernant l'admin
Route::prefix('admin')->name('admin.')->group(function () {
    //Suppression de la methode show dans le controleur / ajout except
    Route::resource('property', PropertyController::class)->except(['show']);
});
