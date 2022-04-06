<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Category;
use App\Models\Transaction;
use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = 2;
        User::factory($users)->create();

        $categories = 6;
        Category::factory($categories)->create();

        $accounts = 2;
        $accountsLoop = $accounts;
        while (--$accountsLoop >= 0)
        {
            Account::factory()->create([
                'user_id' => ($accountsLoop+1),
                'currency' => 'EUR'
            ]);
        }

        $transactions = 20;
        while (--$transactions >= 0)
        {
            Transaction::factory()->create([
                'user_id' => random_int(1, $users),
                'category_id' => random_int(1, $categories),
                'account_id' => random_int(1, $accounts),
                'currency' => 'EUR'
            ]);
        }
    }
}
