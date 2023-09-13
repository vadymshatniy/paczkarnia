<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\DeliveryController;


require('_admin.php');

Route::get('/', [IndexController::class, 'main'])->name('main');

Route::get('/admin_login', [IndexController::class, 'admin_login'])->name('admin_login');
Route::post('/admin_login', [IndexController::class, 'admin_index'])->name('admin_index');

Route::get('/inplace', [IndexController::class, 'inplace'])->name('inplace');


Route::resource('delivery', DeliveryController::class)->only('index', 'store', 'update');

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
