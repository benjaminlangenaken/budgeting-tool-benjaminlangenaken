<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'description' => $this->faker->unique()->sentence,
            'category' => $this->faker->randomElement(['Housing', 'Transportation', 'Groceries' ,'Leisure' ,'Loans', 'Income']),
            'amount' => $this->faker->unique()->randomFloat(2, 1, 5000),
            'currency' => $this->faker->currencyCode,
            'is_expense' => $this->faker->boolean,
            'date' => $this->faker->dateTimeThisYear
        ];
    }
}
