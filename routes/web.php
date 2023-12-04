<?php
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\LocaliteController;
use App\Http\Controllers\LignemoduleController;
use App\Http\Controllers\ProfesseurController;


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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::get('/localite', function () {
    return view('localite');
});

Route::get('/module', [ModuleController::class, 'index'])->name('get');
Route::post('/module', [ModuleController::class, 'store'])->name('post');
Route::get('/tabmodule', [ModuleController::class, 'tab'])->name('enregistrerr.module');
Route::get('/editmodule/{id}', [ModuleController::class, 'edit']);
Route::post('/updatem', [ModuleController::class, 'update']);
Route::get('/deletemodule/{id}', [ModuleController::class, 'destroy']);


Route::get('/localite', [LocaliteController::class, 'index'])->name('getlocalite');
Route::post('/localite', [LocaliteController::class, 'store'])->name('postlocalite');
Route::get('/tablocalite', [LocaliteController::class, 'tab'])->name('enregistrerr.localite');
Route::get('/editlocal/{id}', [LocaliteController::class, 'edit']);
Route::post('/update', [LocaliteController::class, 'update']);
Route::get('/deletelocal/{id}', [LocaliteController::class, 'destroy']);



Route::get('/lignemodule', [LignemoduleController::class, 'index'])->name('getligne');
Route::get('/tablignemodule', [LignemoduleController::class, 'tab'])->name('enregitrerr.ligne');
Route::post('/lignemodule', [LignemoduleController::class, 'store'])->name('postligne');
Route::get('/editligne/{id}', [LignemoduleController::class, 'edit']);
Route::post('/updatel', [LignemoduleController::class, 'update']);
Route::get('/deleteligne/{id}', [LignemoduleController::class, 'destroy']);


Route::get('/professeur', [ProfesseurController::class, 'index'])->name('getprof');
Route::get('/tabprofesseur', [ProfesseurController::class, 'tab'])->name('enregistrerr.prof');
Route::post('/professeur', [ProfesseurController::class, 'store'])->name('postprof');
Route::get('/editprof/{id}', [ProfesseurController::class, 'edit']);
Route::post('/updatep', [ProfesseurController::class, 'update']);
Route::get('/deleteprof/{id}', [ProfesseurController::class, 'destroy']);



require __DIR__.'/auth.php';
