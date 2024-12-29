<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\FacutlyController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UnitController;
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

    Route::resource('/role', RoleController::class)->names([
        'index' => 'admin.role.index',
        'create' => 'admin.role.create',
        'store' => 'admin.role.store',
        'edit' => 'admin.role.edit',
        'update' => 'admin.role.update',
        'destroy' => 'admin.role.destroy',
    ]);

    Route::resource('/event', EventController::class)->names([
        'index' => 'admin.event.index',
        'create' => 'admin.event.create',
        'store' => 'admin.event.store',
        'edit' => 'admin.event.edit',
        'update' => 'admin.event.update',
        'destroy' => 'admin.event.destroy',
    ]);

    Route::resource('/category', CategoryController::class)->names([
        'index' => 'admin.category.index',
        'create' => 'admin.category.create',
        'store' => 'admin.category.store',
        'edit' => 'admin.category.edit',
        'update' => 'admin.category.update',
        'destroy' => 'admin.category.destroy',
    ]);

    Route::resource('/unit', UnitController::class)->names([
        'index' => 'admin.unit.index',
        'create' => 'admin.unit.create',
        'store' => 'admin.unit.store',
        'edit' => 'admin.unit.edit',
        'update' => 'admin.unit.update',
        'destroy' => 'admin.unit.destroy',
    ]);

    Route::resource('/facutly', FacutlyController::class)->names([
        'index' => 'admin.facutly.index',
        'create' => 'admin.facutly.create',
        'store' => 'admin.facutly.store',
        'edit' => 'admin.facutly.edit',
        'update' => 'admin.facutly.update',
        'destroy' => 'admin.facutly.destroy',
    ]);

    Route::resource('/class', ClassController::class)->names([
        'index' => 'admin.class.index',
        'create' => 'admin.class.create',
        'store' => 'admin.class.store',
        'edit' => 'admin.class.edit',
        'update' => 'admin.class.update',
        'destroy' => 'admin.class.destroy',
    ]);
});
