<?php

use App\Http\Controllers\MoveInfoController;
use Illuminate\Support\Facades\Route;



Route::get('/',[MoveInfoController::class,'index']);

Route::post('/items',[MoveInfoController::class,'items'])->name('items');

Route::post('/send',[MoveInfoController::class,'sendMail'])->name('sendMail');




