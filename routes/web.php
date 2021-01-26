<?php

use Illuminate\Support\Facades\Route;
use App\Exports\alumnisExport;
use App\Exports\lastyearExport;
use App\Exports\honoraryExport;


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

Route::get('/AlumniDownload', function () {
    return Excel::download(new alumnisExport, 'alumnis.xlsx');
});

Route::get('/LastyearDownload', function () {
    return Excel::download(new lastyearExport, 'lastyears.xlsx');
});


Route::get('/honoraryDownload', function () {
    return Excel::download(new honoraryExport, 'honoraries.xlsx');
});

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function(){


Route::get('alumnis/export/', 'AlumnisFormController@export');
Route::get('lastyears/export/', 'lastYearController@export');

Route::get('honoraries/export/', 'honoraryController@export');




Route::get('/paymentsRecords', [App\Http\Controllers\paymentsController::class, 'alumniPaymentRecords'])->name('paymentsRecords.alumniPaymentRecords');



Route::get('/admin', [App\Http\Controllers\adminsController::class, 'index'])->name('admin.index')->middleware('verified');


Route::get('admin/alumniForms/create',[App\Http\Controllers\AlumniFormController::class, 'create'])->name('alumniForm.create');
Route::get('admin/alumniForms/contact-us',[App\Http\Controllers\AlumniFormController::class, 'contactForm'])->name('alumniForm.contact-us');
Route::POST('admin/alumniForms/contact', [App\Http\Controllers\AlumniFormController::class, 'contact'])->name('alumniForm.contact');


Route::get('admin/lastyear/contact-us',[App\Http\Controllers\lastYearController::class, 'contactForm'])->name('lastyear.contact-us');
Route::POST('admin/lastyear/contact', [App\Http\Controllers\lastYearController::class, 'contact'])->name('lastyear.contact');

Route::get('admin/honoraryForm/contact-us',[App\Http\Controllers\honoraryController::class, 'contactForm'])->name('honoraryForm.contact-us');
Route::POST('admin/honoraryForm/contact', [App\Http\Controllers\honoraryController::class, 'contact'])->name('honoraryForm.contact');



Route::post('admin/alumniForms', [App\Http\Controllers\AlumniFormController::class, 'store'])->name('alumniForm.store');
Route::get('admin/alumniForms', [App\Http\Controllers\AlumniFormController::class, 'index'])->name('alumniForm.index');

Route::get('admin/payment_response',[App\Http\Controllers\AlumniFormController::class, 'payment_response']);




Route::get('admin/alumniForms/detalis/{alumnis}', [App\Http\Controllers\AlumniFormController::class, 'show'])->name('alumniForm.show');
Route::delete('admin/alumniForms/{alumnis}/destroy', [App\Http\Controllers\AlumniFormController::class, 'destroy'])->name('alumniForm.destroy');
Route::get('admin/alumniForms/{alumnis}/edit', [App\Http\Controllers\AlumniFormController::class, 'edit'])->name('alumniForm.edit');
Route::patch('admin/alumniForms/{alumnis}/update', [App\Http\Controllers\AlumniFormController::class, 'update'])->name('alumniForm.update');
Route::get('admin/alumniForms/{alumnis}/upgrade', [App\Http\Controllers\AlumniFormController::class, 'upgrade'])->name('alumniForm.upgrade');
Route::patch('admin/alumniForms/{alumnis}/upgradePlan', [App\Http\Controllers\AlumniFormController::class, 'upgradePlan'])->name('alumniForm.upgradePlan');


Route::get('admin/alumniForms/{alumnis}/upgradeRequestt', [App\Http\Controllers\AlumniFormController::class, 'upgradeRequestt'])->name('alumniForm.upgradeRequestt');
Route::patch('admin/alumniForms/{alumnis}/UpgradeRequest', [App\Http\Controllers\AlumniFormController::class, 'UpgradRequest'])->name('alumniForm.UpgradeRequest');


Route::get('admin/honoraryForm/{honoraries}/upgradeRequestt', [App\Http\Controllers\honoraryController::class, 'upgradeRequestt'])->name('honoraryForm.upgradeRequestt');
Route::patch('admin/honoraryForm/{honoraries}/UpgradeRequest', [App\Http\Controllers\honoraryController::class, 'UpgradRequest'])->name('honoraryForm.UpgradeRequest');



Route::get('admin/lastyear/create',[App\Http\Controllers\lastYearController::class, 'create'])->name('lastyear.create');
Route::post('admin/lastyear', [App\Http\Controllers\lastYearController::class, 'store'])->name('lastyear.store');
Route::get('admin/lastyear', [App\Http\Controllers\lastYearController::class, 'index'])->name('lastyear.index');
Route::delete('admin/lastyear/{lastyears}/destroy', [App\Http\Controllers\lastYearController::class,'destroy'])->name('lastyear.destroy');
Route::get('admin/lastyear/detalis/{lastyears}', [App\Http\Controllers\lastYearController::class, 'show'])->name('lastyear.show');
Route::get('admin/lastyear/{lastyears}/edit', [App\Http\Controllers\lastYearController::class, 'edit'])->name('lastyear.edit');
Route::patch('admin/lastyear/{lastyears}/update', [App\Http\Controllers\lastYearController::class, 'update'])->name('lastyear.update');
Route::get('admin/lastyear/{lastyears}/upgrade', [App\Http\Controllers\lastYearController::class, 'upgrade'])->name('lastyear.upgrade');
Route::patch('admin/lastyear/{lastyears}/upgradePlan', [App\Http\Controllers\lastYearController::class, 'upgradePlan'])->name('lastyear.upgradePlan');



Route::get('admin/honoraryForm/create',[App\Http\Controllers\honoraryController::class, 'create'])->name('honoraryForm.create');

Route::get('admin/honoraryForm', [App\Http\Controllers\honoraryController::class, 'index'])->name('honoraryForm.index');
Route::post('admin/honoraryForm', [App\Http\Controllers\honoraryController::class, 'store'])->name('honoraryForm.store');
Route::get('admin/honoraryForm/detalis/{honoraries}', [App\Http\Controllers\honoraryController::class, 'show'])->
name('honoraryForm.show');
Route::delete('admin/honoraryForm/{honoraries}/destroy', [App\Http\Controllers\honoraryController::class,'destroy'])->name('honoraryForm.destroy');
Route::get('admin/honoraryForm/{honoraries}/edit', [App\Http\Controllers\honoraryController::class, 'edit'])->name('honoraryForm.edit');

Route::patch('admin/honoraryForm/{honoraries}/update', [App\Http\Controllers\honoraryController::class, 'update'])->name('honoraryController.update');
Route::get('admin/honoraryForm/{honoraries}/upgrade', [App\Http\Controllers\honoraryController::class, 'upgrade'])->name('honoraryForm.upgrade');
Route::patch('admin/honoraryForm/{honoraries}/upgradePlan', [App\Http\Controllers\honoraryController::class, 'upgradePlan'])->name('honoraryForm.upgradePlan');


});


Route::delete('admin/users/userProfile/{users}/destroy',[App\Http\Controllers\userController::class,'destroy'])->name('users.destroy');

Route::get('admin/users/userProfile',[App\Http\Controllers\userController::class,'userPofile'])->name('users.userProfile');


Route::get('admin/alumniForms/alumniRecords',[App\Http\Controllers\RecordsController::class,'alumniRecords'])->name('alumniForm.alumniRecords');

Route::get('admin/lastyear/lastyearRecords',[App\Http\Controllers\RecordsController::class,'lastyearRecords'])->name('lastyear.lastyearRecords');

Route::get('admin/honoraryForm/honoraryFormRecords',[App\Http\Controllers\RecordsController::class,'honoraryFormRecords'])->name('honoraryForm/honoraryFormRecords');



