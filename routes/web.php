<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CustomerController;

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

Auth::routes();

Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();
    return redirect('/home');    
})->name('logout');

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/crm', [App\Http\Controllers\HomeController::class, 'CRMDashboard'])->name('crm.index');
Route::get('/sales', [App\Http\Controllers\HomeController::class, 'SalesDashboard'])->middleware('can:isAdmin')->name('sales.index');

Route::get('/contacts', [App\Http\Controllers\HomeController::class, 'GetContacts'])->name('contacts');
Route::get('/customer/show/{custNo}', [App\Http\Controllers\CustomerController::class, 'getBasicInfo'])->name('customer.show');

//Route::resource('customer', CustomerRController::class);




//check for valid id
//abort_if(!isset($post[$id]), 404);

/*
Route::get('/', function () {
    return view('home.index', []);
})->name('home.index');
*/


