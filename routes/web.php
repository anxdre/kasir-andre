<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/products', 'Products\ProductController@index')->name('products');
Route::get('/formAddProduct', 'Products\ProductController@formProduct')->name('formProduct');
Route::post('/addProduct', 'Products\ProductController@addProduct')->name('addProduct');
Route::get('/formEditProduct/{id}','Products\ProductController@formEditProduct')->name('formEditProduct');
Route::post('/editProduct/{id}','Products\ProductController@editProduct')->name('editProduct');
Route::get('/deleteProduct/{id}','Products\ProductController@deleteProduct')->name('deleteProduct');


Route::get('/transaction','Transaction\TransactionController@index')->name('transaction');
Route::get('/transaksi/{id}', 'Transaction\TransactionController@transaksi')->name('transaksi');
Route::post('/buy/{id}', 'Transaction\TransactionController@buy')->name('buy');


Route::get('/profile','profile\ProfileController@index')->name('profile');

