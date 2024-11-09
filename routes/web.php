<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\STWLController;
Route::get('/', function () {
    return view('Login');
});
Route::get('/Home', function () {
    return view('Home');
});
Route::get('/RL', function () {
    return view('RecordList');
});
Route::get('/edit', function () {
    return view('edit');
});
Route::get('/stwl-form', [STWLController::class, 'showForm'])->name('stwl.form');
Route::post('/stwl',[STWLController::class,'store'])->name('stwl.store');
Route::get('/stwlRecord', [STWLController::class, 'index'])->name('STWL.index');


Route::delete('/delete-record/{id}', [STWLController::class, 'destroy'])->name('delete-record');



Route::get('/stwl/edit/{id}', [STWLController::class, 'edit'])->name('stwl.edit');
Route::put('/stwl/update/{id}', [STWLController::class, 'update'])->name('stwl.update');

