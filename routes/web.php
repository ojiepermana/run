<?php

use App\Http\Controllers\InfoController;
use Illuminate\Support\Facades\Route;
Route::get('/', InfoController::class)->name('info');
