<?php

use App\Http\Livewire\Aboutus;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Cart;
use App\Http\Livewire\Checkout;
use App\Http\Livewire\Contentus;
use App\Http\Livewire\Home;
use App\Http\Livewire\Shop;
use App\Http\Livewire\User\UserDashdoardComponent;
use Illuminate\Support\Facades\Route;



Route::get('/',Home::class);
Route::get('/aboutus',Aboutus::class);
Route::get('/cart',Cart::class);
Route::get('/checkout',Checkout::class);
Route::get('/contentus',Contentus::class);
Route::get('/shop',Shop::class);


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


// Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/dashboard', UserDashdoardComponent::class)->name('user.dashboard');
});


// admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
});
