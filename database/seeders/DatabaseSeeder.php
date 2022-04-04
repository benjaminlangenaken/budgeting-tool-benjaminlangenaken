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

        $accounts = [1, 2];
        foreach ($accounts as $iteration) {
            Account::factory()->create([
                'user_id' => random_int(1, $users),
                'currency' => 'EUR'
            ]);
        }

        $iterations = [1, 2, 3, 4];
        foreach ($iterations as $iteration) {
            Transaction::factory(5)->create([
                'user_id' => random_int(1, $users),
                'category_id' => random_int(1, $categories),
                'account_id' => random_int(1, count($accounts)),
                'currency' => 'EUR'
            ]);
        }
    }
}
