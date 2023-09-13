<?php

use App\Http\Controllers\Admin\IndexAdminController;
use App\Http\Controllers\Admin\DeliveryAdminController;

Route::group(
    [
        'middleware' => ['auth', 'is_admin'],
        'prefix' => 'adminex',
        'as' => 'admin.'
    ],
    function () {
        Route::get('/', [IndexAdminController::class, 'main'])->name('main');
        Route::resource('/deliveries', DeliveryAdminController::class);
    }
);
