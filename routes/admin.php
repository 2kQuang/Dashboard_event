<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');


    Route::resource('/account', UserController::class)->names([
        'index' => 'admin.account.index',
        'create' => 'admin.account.create',
        'store' => 'admin.account.store',
        'edit' => 'admin.account.edit',
        'update' => 'admin.account.update',
        'destroy' => 'admin.account.destroy',
    ]);
});
