<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TransactionController::class, 'index'])->name('home');
//Route::get('/transactions/{transaction:slug}', [TransactionController::class, 'show']);
