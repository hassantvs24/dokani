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

Route::get('/', 'Dashboard\DashboardController@index')->name('dashboard');


Route::get('sales/new', 'Sales\SalesController@index')->name('sales');
Route::get('sales/invoice', 'Sales\InvoiceController@index')->name('sales_invoice');
Route::get('sales/ledger', 'Sales\LedgerController@index')->name('sales_ledger');
Route::get('sales/due', 'Sales\DueController@index')->name('sales_due');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
