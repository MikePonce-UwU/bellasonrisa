<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => [
        // 'role:administrador',
        'auth',
    ],
    'prefix' => 'admin'
], function () {
    // Route::get('/home', \App\Http\Livewire\Admin\HomeController::class)->name('admin.home');

    Route::get('/grados', \App\Http\Livewire\Admin\GradesController::class)->name('admin.grades.index');
});
