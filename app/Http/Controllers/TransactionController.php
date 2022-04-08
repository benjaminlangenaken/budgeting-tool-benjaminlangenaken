<?php

namespace App\Http\Controllers;

use App\Charts\OverviewBudgetChart;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $transactions = Transaction::orderBy('date', 'desc')->with('user', 'category', 'account')->get();

        return view('transactions.index', [
            'transactions' => $transactions
        ]);
    }
}
