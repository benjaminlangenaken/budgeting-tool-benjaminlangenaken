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

//    public function show(Transaction $transaction)
//    {
//        return view('transactions.show', [
//            'transaction' => $transaction
//        ]);
//    }

//    public function chart(Request $request)
//    {
////        return $categories = Category::latest()->get('name')->values();
//
//        $chart = new OverviewBudgetChart();
//
//        return view('index', [
//            'chart' => $chart
//        ]);
//    }
}
