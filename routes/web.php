<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TransactionController::class, 'index'])->name('home');

Route::get('/transactions', [TransactionController::class, 'show']);
Route::get('/transactions/{transaction}/edit', [TransactionController::class, 'edit']);
Route::put('/transactions/{transaction}', [TransactionController::class, 'update']);
