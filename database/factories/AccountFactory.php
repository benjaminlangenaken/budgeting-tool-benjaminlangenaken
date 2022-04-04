<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'IBAN'      => $this->faker->unique()->iban('BE'),
            'balance'   => $this->faker->randomFloat(2,50000, 999999),
            'currency'  => $this->faker->currencyCode,
        ];
    }
}
