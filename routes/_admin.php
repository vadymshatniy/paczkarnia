<?php

use App\Http\Controllers\Admin\CategoryAdminController;
use App\Http\Controllers\Admin\IndexAdminController;
use App\Http\Controllers\Admin\DeliveryAdminController;
use App\Http\Controllers\Admin\ProductAdminController;

Route::group(
    [
        'middleware' => ['auth', 'is_admin'],
        'prefix' => 'adminex',
        'as' => 'admin.'
    ],
    function () {
        Route::get('/', [IndexAdminController::class, 'main'])->name('main');
        Route::resource('/deliveries', DeliveryAdminController::class);
        Route::resource('/products', ProductAdminController::class);
    }
);
