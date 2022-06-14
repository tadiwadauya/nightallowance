<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ExcelController;
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
    return view('auth.login');
});

// Route for view/blade file.
Route::get('importExportView', [ExcelController::class, 'importExportView'])->name('importExportView');
// Route for export/download tabledata to .csv, .xls or .xlsx
Route::get('exportExcel/{type}', [ExcelController::class, 'exportExcel'])->name('exportExcel');
// Route for import excel data to database.
Route::post('importExcel', [ExcelController::class, 'importExcel'])->name('importExcel');

Auth::routes();

Route::get('admin-home', [HomeController::class, 'admin'])->name('admin-home')->middleware('is_admin');
Route::get('home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Driver routes
Route::get('driver/driverslist',"App\Http\Controllers\DriverController@index");
Route::get('driver/edit/{id}',"App\Http\Controllers\DriverController@edit");
Route::get('/show/{id}',"App\Http\Controllers\DriverController@show");
Route::get('driver/create',"App\Http\Controllers\DriverController@create");
Route::post('driver/store',"App\Http\Controllers\DriverController@store");
Route::put('driver/{id}',"App\Http\Controllers\DriverController@update")->name('driver.update');


//Transactions routes
Route::get('transactions/',"App\Http\Controllers\TransactionController@index");
Route::get('transactions/closedtrans',"App\Http\Controllers\TransactionController@closed");
Route::get('transactions/edit/{id}',"App\Http\Controllers\TransactionController@edit");
Route::get('transactions/show/{id}',"App\Http\Controllers\TransactionController@show");
Route::get('transactions/create',"App\Http\Controllers\TransactionController@create");
Route::post('transaction/store',"App\Http\Controllers\TransactionController@store");
Route::put('/update/{id}',"App\Http\Controllers\TransactionController@update");
Route::get('transactions/report',"App\Http\Controllers\TransactionController@report");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 // users
Route::get('users/', "App\Http\Controllers\UsersManagementController@index");
Route::get('user/create',"App\Http\Controllers\UsersManagementController@create");
Route::post('/store',"App\Http\Controllers\UsersManagementController@store");
Route::get('users/show/{id}',"App\Http\Controllers\UsersManagementController@show");
Route::get('user/edit/{id}',"App\Http\Controllers\UsersManagementController@edit");
Route::put('user/{id}',"App\Http\Controllers\UsersManagementController@update")->name('user.update');



