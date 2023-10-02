<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController; //add ProductController
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProducController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\MeatController;
use App\Http\Controllers\OrderController;
use App\Models\Product;
use App\Models\Voucher;
use App\Models\User;

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


Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::resource("/Product", ProductController::class);


Route::get('/dashboard', function () {

    return view('Product.dashboard',[
        'products'=> Product::orderBy('created_at')->limit(10)->get()
        ,'users'=> User::orderBy('created_at')->limit(10)->get()
    ]);

    });


Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('login');
});




Route::get('aboutus', function () {
    return view('aboutUs');
});
Route::get('contactus', function () {
    return view('contact_us');
});


Route::get('pro', function () {
    return view('product',[
        'meats'=> Product::all()
    ]);
});

Route::get('home', function () {
    return view('welcome');
})->name('home');




Route::get('/registerForm', [GuestController::class, 'registerForm'])->name('registerForm');
Route::post('/register', [GuestController::class, 'register'])->name('register');
Route::get('/loginForm', [GuestController::class, 'loginForm'])->name('loginForm');
Route::post('/login', [GuestController::class, 'login'])->name('login');
Route::get('aboutUs', function () {
    return view('aboutUs');
});
Route::get('contactUS', function () {
    return view('contact_us');
});


Route::get('/Meat', [MeatController::class, 'index']);


Route::get('/shopping-cart', [MeatController::class, 'meatCart'])->name('shopping.cart');
Route::get('/Meat/{id}', [MeatController::class, 'addMeattoCart'])->name('addmeat.to.cart');
Route::patch('/update-shopping-cart', [MeatController::class, 'updateCart'])->name('update.sopping.cart');
Route::delete('/delete-cart-product', [MeatController::class, 'deleteMeat'])->name('delete.cart.product');




// route User
Route::get('/user', function () {

    return view('Product.user', [
        'users'=> User::all()
    ]);

});



Route::get('/wallet', function () {
    return view('wallet');
});
