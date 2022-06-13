<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('transaction', 'TransactionController');

Route::resource('obat', 'MedicineController');
Route::resource('kategori_obat', 'CategoryController');

Route::get('/report/listmedicine/{id}', 'CategoryController@showlist')->name('reportShowMedicine');

// Route::get('obatModal/{id}', '');

Route::post('/obat/showInfo','MedicineController@showInfo')->name('obat.showInfo');
Route::post('/transactions/showDataAjax/','TransactionController@showAjax')->name('transaction.showAjax');

Route::post('/supplier/getEditForm','SupplierController@getEditForm')->name('supplier.getEditForm');
Route::get('/','MedicineController@front_index');
Route::get('cart','MedicineController@cart');
Route::get('add-to-cart/{id}','MedicineController@addToCart');

// Route:get('/checkout','TransactionController@form_submit_front')->middleware(['auth']);
// Route:get('/submit_checkout','TransactionController@submit_front')->name('submitcheckout')->middleware(['auth']);