<?php

use App\Http\Controller\UserController;

// Route::resource('index', BeritaController::class)->parameters([
    // 'index' => 'index'
// ]);

Route::resource('tampilan', UserController::class);
