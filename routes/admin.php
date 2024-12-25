<?php

use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard'); // Trang dashboard của admin
    })->name('admin.dashboard');

    Route::get('/settings', function () {
        return 'Admin Settings Page'; // Một route khác trong admin
    })->name('admin.settings');
});
