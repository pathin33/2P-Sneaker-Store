<?php
use Illuminate\Support\Facades\Route;

// controller của footer
use App\Http\Controllers\footer\StoreController;

// route gọi ra giao diện chính
Route::get('/', function () {
    return view('/pages.home');
});
Route::get('/login', function () {
    return view('/auth.login');
});
Route::get('/register', function () {
    return view('/auth.register');
});


// phần này route của footer nhé
Route::get('/store-locator', [StoreController::class, 'index'])
->name('store.locator');

