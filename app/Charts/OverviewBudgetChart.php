<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Category;
use App\Models\Transaction;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class OverviewBudgetChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
//        $income = Transaction::latest()->with('category')->where('is_expense', '=', 0)->get()->pluck('amount', 'category.name');

        $categories = Category::latest()->pluck('name')->values();
        return Chartisan::build()
            ->labels([$categories])
            ->dataset('Income', [1, 2, 3]);
    }
}
