<?php
use Illuminate\Support\Facades\Route;

// controller của footer
use App\Http\Controllers\footer\StoreController;

// route gọi ra giao diện chính
Route::get('/', function () {
    return view('main');
});

// phần này route của footer nhé
Route::get('/store-locator', [StoreController::class, 'index'])
->name('store.locator');

