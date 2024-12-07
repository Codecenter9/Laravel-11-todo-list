<?php

use App\Http\Controllers\taskcontroller;
use Illuminate\Console\View\Components\Task;
use Illuminate\Support\Facades\Route;

// Route::model('task','task');
Route::get('/',[taskcontroller::class,'home']);
Route::get('/create',[taskcontroller::class,'create']);
Route::get('/edit/{task}',[taskcontroller::class,'edit']);
Route::get('/delete/{task}',[taskcontroller::class,'delete']);
Route::get('/contact',[taskcontroller::class,'contact']);
Route::post('/create',[taskcontroller::class,'savecreate']);
Route::put('/edit/{task}',[taskcontroller::class, 'doedit'])->name('task.edit');
Route::delete('/delete/{task}',[taskcontroller::class, 'dodelete'])->name('task.delete');

