<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PlantsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController as ControllerLoginController;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Models\Order;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'utype:customer', 'prefix' => 'customer', 'as' => 'customer.'], function() {
        Route::resource('orders', OrderController::class);
    });

    Route::group(['middleware' => 'utype:seller', 'prefix' => 'seller', 'as' => 'seller.'], function() {
        Route::resource('plants', PlantsController::class);
    });
});


Route::get('plants', [PlantsController::class,'index'])->name('plants.index');

Route::get('plants/create', [PlantsController::class,'create'])->name('plants.create');

Route::post('plants/store', [PlantsController::class,'store']);

Route::get('plants/{plant}', [PlantsController::class, 'show'])->name('plants.show');

Route::get('plants/{id}/edit', [PlantsController::class, 'edit'])->name('plants.edit');

Route::get('plants/{id}', [PlantsController::class, 'destroy'])->name('plants.destroy');

Route::resource('plants', PlantsController::class);

Route::get('/shop', [App\Http\Controllers\Customers\ShopController::class, 'index'])->name('shop');

Route::get('/shop/{id}', [App\Http\Controllers\Customers\ShopController::class, 'show'])->name('shop.show');

Route::get('/cart', [App\Http\Controllers\Customers\CartController::class, 'index'])->name('cart');

Route::get('/checkout', [App\Http\Controllers\Customers\CheckoutController::class, 'index'])->name('checkout');

Route::get('/transaction', [App\Http\Controllers\Customers\TransactionController::class, 'index'])->name('transaction');
