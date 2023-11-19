<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::group(['middleware' => ['auth', 'role:admin']], function () {

    Route::get('getCustomers', [App\Http\Controllers\UserController::class, 'getCustomers'])->name('getCustomers');
    Route::get('transactions/getData', [App\Http\Controllers\TransactionsController::class, 'getData'])->name('transactions.getData');
    Route::post('transactions/export', [App\Http\Controllers\TransactionsController::class, 'exportTransactions'])->name('transactions.export');

    Route::resource('transactions', App\Http\Controllers\TransactionsController::class);

    Route::resource('payments-transactions', App\Http\Controllers\PaymentsTransactionsController::class);
    Route::get('paymentsTransactions/getData', [App\Http\Controllers\PaymentsTransactionsController::class, 'getData'])->name('paymentsTransactions.getData');
});
