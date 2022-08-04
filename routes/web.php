<?php

use App\Http\Livewire\Admin\AdminDashboardComponents;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeComponent::class);

Route::get('/shop', ShopComponent::class);

Route::get('/cart', CartComponent::class)->name('product.cart');

Route::get('/checkout', CheckoutComponent::class);

Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');



//for user
Route::middleware([
    'auth:sanctum',
    'verified'
])->group(function () {
    Route::get("/user/dashboard", UserDashboardComponent::class)->name('user.dashboard');
});
//for Admin
Route::middleware([
    'auth:sanctum',
    'verified',
    'authadmin'
])->group(function () {
    Route::get("/admin/dashboard", AdminDashboardComponents::class)->name('admin.dashboard');
});
