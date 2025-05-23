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
Route::get('/forgotpassword', function () {
    return view('/auth.forgot-password');
});



// phần này route của footer nhé
Route::get('/storelocator', [StoreController::class, 'index'])
->name('store.locator');

