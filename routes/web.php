<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShoppingCartController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [ProductController::class, 'index'])->name('homePage');

Route::controller(ProductController::class)->group(function(){
    Route::get('/products', 'index')->name('productListings');
});

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(ShoppingCartController::class)->group(function(){
        Route::group(['prefix' => 'cart'], function() {
            Route::get('/add/{id}', 'addToCart')->name('addToCart');
            Route::get('/remove/{id}', 'removeFromCart')->name('removeFromCart');
            Route::get('/delete/{id}', 'deleteCart')->name('deleteCart');
            Route::get('/view', 'viewCartList')->name('viewCartList');
        });
    });
    Route::controller(OrderController::class)->group(function(){
        Route::group(['prefix' => 'order'], function() {
            Route::get('/', 'index')->name('orders');
            Route::get('/checkout', 'checkout')->name('checkout');
            Route::get('/details/{orderNumber}', 'orderDetails')->name('orderDetails');
            Route::get('/download-invoice/{orderNumber}', 'downloadInvoice')->name('downloadInvoice');
            Route::post('/create', 'createOrder')->name('createOrder');
        });
    });
});

require __DIR__.'/auth.php';
