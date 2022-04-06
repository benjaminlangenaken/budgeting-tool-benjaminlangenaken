<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
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
            'amount' => $this->faker->unique()->randomFloat(2, 1, 2000),
            'currency' => $this->faker->currencyCode,
            'is_expense' => $this->faker->boolean,
            'date' => $this->faker->dateTimeThisYear
        ];
    }
}
