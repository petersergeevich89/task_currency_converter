<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('cur');
    })->middleware(['auth'])->name('form-cur');


//Route::get('/work', function () {
//    return view('work');
//    })->middleware(['auth'])->name('form-work');

Route::get('/user-edit',  'App\Http\Controllers\UserController@edit')
    ->middleware(['auth'])->name('form-edit');


Route::get('/user-update',  'App\Http\Controllers\UserController@update')
    ->middleware(['auth'])->name('form-update');
Route::post('/user-update',  'App\Http\Controllers\UserController@addUpdate')
    ->middleware(['auth'])->name('form-update-add');



Route::get('/cur-delete',  'App\Http\Controllers\CurrencyController@curDelete')
    ->middleware(['auth'])->name('form-cur-delete');


Route::get('/cur', 'App\Http\Controllers\CurrencyController@curShow')
    ->middleware(['auth'])->name('form-cur');
Route::post('/cur', 'App\Http\Controllers\CurrencyController@addHistory')
    ->middleware(['auth'])->name('form-cur-add');


require __DIR__.'/auth.php';
