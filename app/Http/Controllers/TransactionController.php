<?php

namespace App\Http\Controllers;

use App\Charts\OverviewBudgetChart;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $transactions = Transaction::orderBy('date', 'desc')->with('user', 'account')->get();
        $categories = Transaction::groupBy('category', 'is_expense', 'currency')->selectRaw('sum(amount) as sum, category as name, is_expense, currency')->get();

        return view('transactions.index', [
            'transactions' => $transactions,
            'categories' => $categories
        ]);
    }

    public function show(Request $request)
    {
        $transactions = Transaction::orderBy('date', 'desc')->get();

        return view('transactions.show', [
            'transactions' => $transactions
        ]);
    }

    public function edit(Transaction $transaction)
    {
        return view('transactions.edit', [
            'transaction' => $transaction
        ]);
    }

    public function update(Transaction $transaction)
    {
//        dd(request()->all());
        request()->validate([
            'date' => 'required',
            'description' => 'required',
            'category' => 'required',
            'amount' => 'required',
            'currency' => 'required',
//            'is_expense' => 'required'
        ]);

        $transaction->update([
            'date' => request('date'),
            'description' => request('description'),
            'category' => request('category'),
            'amount' => request('amount'),
            'currency' => request('currency'),
            'is_expense' => request('is_expense'),
        ]);

        return redirect('/transactions');
    }

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
