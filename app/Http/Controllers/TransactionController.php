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
        $income = Transaction::latest()->where('is_expense', '=', 0)->selectRaw('sum(amount) as sum')->get();
        $expenses = Transaction::latest()->where('is_expense', '=', 1)->selectRaw('sum(amount) as sum')->get();

        return view('transactions.index', [
            'transactions' => $transactions,
            'categories' => $categories,
            'income' => $income,
            'expenses' => $expenses,
        ]);
    }

    public function show(Request $request)
    {
        $transactions = Transaction::orderBy('date', 'desc')->get();

        return view('transactions.show', [
            'transactions' => $transactions
        ]);
    }

    public function create()
    {
        return view('transactions.create');
    }

    public function store()
    {
        request()->validate([
            'date' => 'required',
            'description' => 'required',
            'category' => 'required',
            'amount' => 'required',
            'currency' => 'required',
            'is_expense' => 'required',
        ]);

        Transaction::create([
            'date' => request('date'),
            'description' => request('description'),
            'category' => request('category'),
            'amount' => request('amount'),
            'currency' => request('currency'),
            'is_expense' => request('is_expense'),
        ]);

        return redirect('/transactions');
    }

    public function edit(Transaction $transaction)
    {
        return view('transactions.edit', [
            'transaction' => $transaction
        ]);
    }

    public function update(Transaction $transaction)
    {
        request()->validate([
            'date' => 'required',
            'description' => 'required',
            'category' => 'required',
            'amount' => 'required',
            'currency' => 'required'
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
