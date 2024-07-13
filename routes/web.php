<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\PersonController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});
Route::get('carreer', function () {
    return view('carreer');
});

Route::post('people', [PersonController::class, 'store']);
Route::post('candidates', [CandidateController::class, 'save']);