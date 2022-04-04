<?php

use App\Models\Transaction;
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
    $transactions = Transaction::latest()->with('user', 'type', 'category', 'account')->get();

    return view('transactions', [
        'transactions' => $transactions
    ]);;
});
