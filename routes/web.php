<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCouponsComponent;
use App\Http\Livewire\Admin\AdminAddHomeSliderComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminCouponsComponent;
use App\Http\Livewire\Admin\AdminDashboardComponents;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCouponsComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminHomeCategoryComponent;
use App\Http\Livewire\Admin\AdminHomeSliderComponent;
use App\Http\Livewire\Admin\AdminOrderComponent;
use App\Http\Livewire\Admin\AdminOrderDetailsComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminSaleComponent;
use App\Http\Livewire\Admin\EditHomeSliderComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\ThankyouComponent;
use App\Http\Livewire\User\UserChangePasswordComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\User\UserOrderDetailsComponent;
use App\Http\Livewire\User\UserOrdersComponent;
use App\Http\Livewire\User\UserProfileComponent;
use App\Http\Livewire\User\UserReviewComponent;
use App\Http\Livewire\WishlistComponent;
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
//page home
Route::get('/', HomeComponent::class);

//page Shop
Route::get('/shop', ShopComponent::class);

//page Cart
Route::get('/cart', CartComponent::class)->name('product.cart');

//page checkout
Route::get('/checkout', CheckoutComponent::class);

//page detail
Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');

//page choose category get all product category
Route::get('/product-category/{category_slug}', CategoryComponent::class)->name('product.category');

//page about
Route::get('/about', AboutComponent::class);

Route::get('/search', SearchComponent::class)->name('product.search');

Route::get('/wishlist', WishlistComponent::class)->name('product.wishlist');

//checkout
Route::get("/user/checkout", CheckoutComponent::class)->name('order.checkout');

//Thank You Checkout Success
Route::get("/user/thank", ThankyouComponent::class)->name('checkout.thankyou');



//for user
Route::middleware([
    'auth:sanctum',
    'verified'
])->group(function () {
    //dashboard
    Route::get("/user/dashboard", UserDashboardComponent::class)->name('user.dashboard');

    //profile
    Route::get("/user/profile", UserProfileComponent::class)->name('user.profile');

    //Order
    Route::get("/user/orders", UserOrdersComponent::class)->name('user.orders');
    Route::get("/user/orders/{order_id}", UserOrderDetailsComponent::class)->name('user.orderdetails');

    //User review 
    Route::get("/user/review/{order_item_id}", UserReviewComponent::class)->name('user.review');

    //Change Password
    Route::get("/user/change-password", UserChangePasswordComponent::class)->name('user.changepassword');
});
//for Admin
Route::middleware([
    'auth:sanctum',
    'verified',
    'authadmin'
])->group(function () {
    //dashboard
    Route::get("/admin/dashboard", AdminDashboardComponents::class)->name('admin.dashboard');

    //Category
    Route::get("/admin/categories", AdminCategoryComponent::class)->name('admin.categories');
    Route::get("/admin/category/add", AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get("/admin/category/edit/{category_slug}", AdminEditCategoryComponent::class)->name('admin.editcategory');
    Route::get("/admin/category/delete/{id}", [AdminCategoryComponent::class, 'deleteCategory'])->name('admin.deletecategory');

    //product

    Route::get("/admin/products", AdminProductComponent::class)->name('admin.products');
    Route::get("/admin/product/add", AdminAddProductComponent::class)->name('admin.addproduct');
    Route::get("/admin/product/edit/{product_slug}", AdminEditProductComponent::class)->name('admin.editproduct');
    Route::get("/admin/product/delete/{id}", [AdminProductComponent::class, 'deleteProduct'])->name('admin.deleteproduct');

    //Slider
    Route::get("/admin/slider", AdminHomeSliderComponent::class)->name('admin.homeslider');
    Route::get("/admin/slider/add", AdminAddHomeSliderComponent::class)->name('admin.addhomeslider');
    Route::get("/admin/slider/edit/{slide_id}", EditHomeSliderComponent::class)->name('admin.edithomeslider');


    //PRODUCT CATEGORIES
    Route::get("/admin/home-categories", AdminHomeCategoryComponent::class)->name('admin.homecategories');

    //sale
    Route::get("/admin/sale", AdminSaleComponent::class)->name('admin.sale');


    //coupons
    Route::get("/admin/coupons", AdminCouponsComponent::class)->name('admin.coupons');
    Route::get("/admin/coupons/add", AdminAddCouponsComponent::class)->name('admin.addcoupons');
    Route::get("/admin/coupons/edit/{coupon_id}", AdminEditCouponsComponent::class)->name('admin.editcoupons');

    //orders
    Route::get("/admin/orders", AdminOrderComponent::class)->name('admin.orders');
    Route::get("/admin/orders/{order_id}", AdminOrderDetailsComponent::class)->name('admin.orderdetals');
});
