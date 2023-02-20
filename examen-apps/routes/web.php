<?php

use App\Http\Controllers\CandidatController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ReferentielController;
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
    return view('layout\app');
});


Route::get('candidat/create', [CandidatController::class, 'create'])->name('homepage');
Route::post('/store', [CandidatController::class, 'store']);

Route::get('/candidat/list', [CandidatController::class, 'index'])->name('liste');

Route::get('/candidat/sexe/list', [CandidatController::class, 'Candidat'])->name('liste/sexe');


Route::get('/update/candidats', [CandidatController::class, 'destroy'])->name('delect');


Route::get('candidat/update', [CandidatController::class, 'update'])->name('updatepage');
Route::post('/update', [CandidatController::class, 'store_update']);


//les referentiel ainsi que le nombre de formation

Route::get('/referentiel/formation', [ReferentielController::class, 'index'])->name('referentiel');


Route::get('/formation/candidats', [FormationController::class, 'index'])->name('formation');




Route::get('candidat/age/chart', [CandidatController::class, 'ChartbyAge'])->name('TrancheChart');


