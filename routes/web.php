<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('customerController');
// });
//          Customer
Route::get('customer/create','App\http\Controllers\customerController@create');
// Route::post('customer/store','App\http\Controllers\customerController@store')->name('customer.store');
Route::post('customer/save', 'App\Http\Controllers\customerController@save')->name('customer.save');
Route::get('customer/read', 'App\Http\Controllers\customerController@read')->name('customer.read');
Route::get('customer/update/{user_id}', 'App\Http\Controllers\customerController@update');
Route::post('customer/saveUpdatedData/{user_id}', 'App\Http\Controllers\customerController@saveUpdatedData')->name('saveUpdatedData');
Route::get('customer/delete/{user_id}', 'App\Http\Controllers\customerController@delete')->name('customer.delete');
// Route::get('customer/read', 'App\http\Controllers\customerController@read')->name('customer.read');

//          Product
Route::get('product/create','App\http\Controllers\productController@create');
Route::post('product/save', 'App\Http\Controllers\productController@save')->name('product.save');
Route::get('product/read', 'App\Http\Controllers\productController@read')->name('product.read');
Route::get('product/update/{user_id}', 'App\Http\Controllers\productController@update');
Route::post('product/saveUpdatedData/{user_id}', 'App\Http\Controllers\productController@saveUpdatedData')->name('saveUpdatedData');
Route::get('product/delete/{user_id}', 'App\Http\Controllers\productController@delete')->name('product.delete');

//          Flight
Route::get('flight/create','App\http\Controllers\flightController@create');
Route::post('flight/save', 'App\Http\Controllers\flightController@save')->name('flight.save');
Route::get('flight/read', 'App\Http\Controllers\flightController@read')->name('flight.read');
Route::get('flight/update/{id}', 'App\Http\Controllers\flightController@update');
Route::post('flight/saveUpdatedData/{id}', 'App\Http\Controllers\flightController@saveUpdatedData')->name('saveupdateddata');
Route::get('flight/delete/{id}', 'App\Http\Controllers\flightController@delete')->name('flight.delete');

//          Flight_attendant
Route::get('attendant/create','App\http\Controllers\attendantController@create');
Route::post('attendant/save', 'App\Http\Controllers\attendantController@save')->name('attendant.save');
Route::get('attendant/read', 'App\Http\Controllers\attendantController@read')->name('attendant.read');
Route::get('attendant/update/{user_id}', 'App\Http\Controllers\attendantController@update');
Route::post('attendant/saveUpdatedData/{user_id}', 'App\Http\Controllers\attendantController@saveUpdatedData')->name('saveUpdatedData');
Route::get('attendant/delete/{user_id}', 'App\Http\Controllers\attendantController@delete')->name('attendant.delete');

//          Airport
Route::get('airport/create','App\http\Controllers\airportController@create');
Route::post('airport/save', 'App\Http\Controllers\airportController@save')->name('airport.save');
Route::get('airport/read', 'App\Http\Controllers\airportController@read')->name('airport.read');
Route::get('airport/update/{id}', 'App\Http\Controllers\airportController@update');
Route::post('airport/saveUpdatedData/{id}', 'App\Http\Controllers\airportController@saveUpdatedData')->name('saveupdateddata');
Route::get('airport/delete/{id}', 'App\Http\Controllers\airportController@delete')->name('airport.delete');
