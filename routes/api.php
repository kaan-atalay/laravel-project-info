<?php

use Illuminate\Support\Facades\Route;
use KaanAtalay\LaravelProjectInfo\Http\Controllers\InfoController;


Route::middleware('api')
    ->prefix("api")
    ->group(function (): void {
        Route::get("/info", [InfoController::class, "index"]);
    });
