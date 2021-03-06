<?php

use Curder\LaravelPackageDemo\Http\Controllers\MyLaravelPackageDemoController;
use Illuminate\Support\Facades\Route;

Route::macro('laravelPackageDemo', function (string $prefix) {
    Route::prefix($prefix)->group(function () {
        Route::get('/', [MyLaravelPackageDemoController::class, 'index']);
    });
});

/** in routes of application */
// Route::laravelPackageDemo('laravel-package-demo/prefix');
