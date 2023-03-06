<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', [HomeController::class, 'index'])->name('inicio'); 

Route::resource('/categories', CategoryController::class)->names('categories');
Route::resource('/clients', ClientController::class)->names('clients');
Route::resource('/products', ProductController::class)->names('products');
Route::resource('/providers', ProviderController::class)->names('providers');
Route::resource('/purchases', PurchaseController::class)->names('purchases');
Route::resource('/sales', SaleController::class)->names('sales');

Route::get('/stock/{id}' , [SaleController::class, 'stock']);









Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/chartData',[HomeController::class, 'earnByMonth'])->name('chartData');

Route::get('/SalesDay',[HomeController::class, 'SalesByDay'])->name('SalesByDay');

Route::get('/ProductsDay',[HomeController::class, 'ProductsOfDay'])->name('ProductsOfDay');

Route::get('/test',[HomeController::class, 'test'])->name('test');