<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrendaController;

Route::get('/', function () {
    return redirect()->route('prendas.index');
});

Route::resource('prendas', PrendaController::class);
