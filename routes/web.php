<?php

use App\Http\Controllers\ConcertController;
use App\Http\Controllers\BandController;

Route::resource('concerts', ConcertController::class);
Route::resource('bands', BandController::class);

