<?php

//All Controller Path...
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;

use App\Http\Controllers\BkashController;
use App\Http\Controllers\BkashRefundController;

//Users & Roles Route Controller Path...
use App\Http\Controllers\userRoles\RoleController;
use App\Http\Controllers\userRoles\UserController;
use App\Http\Controllers\ProfileController;

//frontend controller all


//backend controller all
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\SubCategoryController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\ProductController;


// All routes list here....
Auth::routes();
Route::get('/', [WelcomeController::class, 'index']);

Route::get('/locale/{locale}', [HomeController::class, 'switchLanguage'])->name('/locale');

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');


// Payment Routes for bKash
Route::post('bkash/get-token', [BkashController::class, 'getToken'])->name('bkash-get-token');
Route::post('bkash/create-payment', [BkashController::class, 'createPayment'])->name('bkash-create-payment');
Route::post('bkash/execute-payment', [BkashController::class, 'executePayment'])->name('bkash-execute-payment');
Route::get('bkash/query-payment', [BkashController::class, 'queryPayment'])->name('bkash-query-payment');
Route::post('bkash/success', [BkashController::class, 'bkashSuccess'])->name('bkash-success');


// Refund Routes for bKash
Route::get('bkash/refund', [BkashRefundController::class, 'index'])->name('bkash-refund');
Route::post('bkash/refund', [BkashRefundController::class, 'refund'])->name('bkash-refund');






//Role Permission Routes Here....
Route::middleware('auth')->prefix('dashboard')->group(function () {

    //Users & Roles Controller...
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);

    /*profile*/
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('chnage-password', [ProfileController::class, 'chnagePssword'])->name('chnage-password');
    Route::post('chnage-logo', [ProfileController::class, 'chnageLogo'])->name('chnage-logo');
    Route::post('update-profile', [ProfileController::class, 'updateProfile'])->name('update-profile');

    //Category Controller
    Route::resource('category', CategoryController::class);
    Route::post('category-sub-dropdown', [CategoryController::class, 'categorySubDropdown'])->name('category-sub-dropdown');

    //Brand Controller
    Route::resource('brand', BrandController::class);

    //ProductController
    Route::resource('product-admin', ProductController::class);

});



