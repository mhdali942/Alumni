<?php

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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function(){

Route::get('/admin', [App\Http\Controllers\adminsController::class, 'index'])->name('admin.index');

Route::get('admin/alumniForms/create',[App\Http\Controllers\AlumniFormController::class, 'create'])->name('alumniForm.create');
Route::post('admin/alumniForms', [App\Http\Controllers\AlumniFormController::class, 'store'])->name('alumniForm.store');
Route::get('admin/alumniForms', [App\Http\Controllers\AlumniFormController::class, 'index'])->name('alumniForm.index');
Route::get('admin/alumniForms/detalis/{alumnis}', [App\Http\Controllers\AlumniFormController::class, 'show'])->name('alumniForm.show');
Route::delete('admin/alumniForms/{alumnis}/destroy', [App\Http\Controllers\AlumniFormController::class, 'destroy'])->name('alumniForm.destroy');
Route::get('admin/alumniForms/{alumnis}/edit', [App\Http\Controllers\AlumniFormController::class, 'edit'])->name('alumniForm.edit');
Route::patch('admin/alumniForms/{alumnis}/update', [App\Http\Controllers\AlumniFormController::class, 'update'])->name('alumniForm.update');


Route::get('admin/lastyear/create',[App\Http\Controllers\lastYearController::class, 'create'])->name('lastyear.create');
Route::post('admin/lastyear', [App\Http\Controllers\lastYearController::class, 'store'])->name('lastyear.store');
Route::get('admin/lastyear', [App\Http\Controllers\lastYearController::class, 'index'])->name('lastyear.index');
Route::delete('admin/lastyear/{lastyears}/destroy', [App\Http\Controllers\lastYearController::class,'destroy'])->name('lastyear.destroy');
Route::get('admin/lastyear/detalis/{lastyears}', [App\Http\Controllers\lastYearController::class, 'show'])->name('lastyear.show');
Route::get('admin/lastyear/{lastyears}/edit', [App\Http\Controllers\lastYearController::class, 'edit'])->name('lastyear.edit');
Route::patch('admin/lastyear/{lastyears}/update', [App\Http\Controllers\lastYearController::class, 'update'])->name('lastyear.update');


Route::get('admin/honoraryForm/create',[App\Http\Controllers\honoraryController::class, 'create'])->name('honoraryForm.create');

Route::get('admin/honoraryForm', [App\Http\Controllers\honoraryController::class, 'index'])->name('honoraryForm.index');
Route::post('admin/honoraryForm', [App\Http\Controllers\honoraryController::class, 'store'])->name('honoraryForm.store');
Route::get('admin/honoraryForm/detalis/{honoraries}', [App\Http\Controllers\honoraryController::class, 'show'])->
name('honoraryForm.show');
Route::delete('admin/honoraryForm/{honoraries}/destroy', [App\Http\Controllers\honoraryController::class,'destroy'])->name('honoraryForm.destroy');
Route::get('admin/honoraryForm/{honoraries}/edit', [App\Http\Controllers\honoraryController::class, 'edit'])->name('honoraryForm.edit');

Route::patch('admin/honoraryForm/{honoraries}/update', [App\Http\Controllers\honoraryController::class, 'update'])->name('honoraryController.update');


});




Route::get('admin/alumniForms/alumniRecords',[App\Http\Controllers\RecordsController::class,'alumniRecords'])->name('alumniForm.alumniRecords');

Route::get('admin/lastyear/lastyearRecords',[App\Http\Controllers\RecordsController::class,'lastyearRecords'])->name('lastyear.lastyearRecords');

Route::get('admin/honoraryForm/honoraryFormRecords',[App\Http\Controllers\RecordsController::class,'honoraryFormRecords'])->name('honoraryForm/honoraryFormRecords');
