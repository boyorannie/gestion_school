<?php

use App\Http\Controllers\EleveController;
use App\Http\Controllers\NoteController;
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

Route::get('/', function () {
    return view('gestion-eleve.ajoutEleve');
});


Route::get('voir_list_eleve',[EleveController::class,'Voir_List']); 

Route::get('ajout_note',[NoteController::class,'AjoutNote']);
Route::get('voir_note',[NoteController::class,'VoirNote']);
Route::post('ajout_eleve',[EleveController::class,'AjouterEleve']);
Route::get('modifier',[EleveController::class,'Modifier']);
Route::post('ajout_note',[NoteController::class,'AjouterNote']);