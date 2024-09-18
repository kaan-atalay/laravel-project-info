<?php

use Illuminate\Support\Facades\Route;
use KaanAtalay\Authentication\Http\Controllers\InfoController;


Route::middleware('api')
    ->prefix("api")
    ->group(function (): void {
        Route::get("/info", [InfoController::class, "index"]);
    });
