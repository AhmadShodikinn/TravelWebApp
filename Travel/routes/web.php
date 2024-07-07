<?php

use App\Http\Controllers\LocalizationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('locale/{Lang}', [LocalizationController::class, 'setLocale']);
 