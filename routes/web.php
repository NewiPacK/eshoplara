<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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



Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    Route::get("/", [IndexController::class, "index"])->name("index");
    Route::match(['GET', 'POST'], "/prod_details/{id}", [IndexController::class, "prod_details"])->name("detail");
    Route::match(['GET', 'POST'], "/cart", [IndexController::class, "cart"])->name("cart");
    Route::match(['GET', 'POST'], "/addcart/{id}", [IndexController::class, "addcart"])->name("addcart");
    Route::match(['GET', 'POST'], "/cart_remove/{id}", [IndexController::class, "cart_remove"])->name("cart_remove");
    Route::match(['GET', 'POST'], "/cart_destroy", [IndexController::class, "cart_destroy"])->name("cart_destroy");
    Route::match(['GET', 'POST'], "/cart_plus/{id}/{qty}", [IndexController::class, "cart_plus"])->name("cart_plus");
    Route::match(['GET', 'POST'], "/cart_minus/{id}/{qty}", [IndexController::class, "cart_minus"])->name("cart_minus");
    Route::match(['GET', 'POST'], "/addzakaz/{id}", [IndexController::class, "addzakaz"])->name("addzakaz");
    Route::match(['GET', 'POST'], "/cab", [IndexController::class, "cab"])->name('cab');
    Route::match(['GET', 'POST'], "/cabedit", [IndexController::class, "cabedit"])->name('cabedit');
    Route::match(['GET', 'POST'], "/logout", [IndexController::class, "logout"])->name("logout");
    Route::match(['GET', 'POST'], "/add_shop", [IndexController::class, "add_shop"])->name('add_shop');
    Route::match(['GET', 'POST'], "/addcartajax", [IndexController::class, "addcartajax"])->name('addcartajax');
    Route::match(['GET', 'POST'], "/plus", [IndexController::class, "plus"])->name("plus");
    Route::match(['GET', 'POST'], "/minus", [IndexController::class, "minus"])->name("minus");
    Route::match(['GET', 'POST'], "/remove", [IndexController::class, "remove"])->name("remove");
    Route::match(['GET', 'POST'], "/destroy", [IndexController::class, "destroy"])->name("destroy");
    Route::get("/search", [IndexController::class, "search"])->name("search");

});





//Route::get('/', function () {
//    return view('index');
//});
//
//
//
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
