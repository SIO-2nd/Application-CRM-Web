<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commercial>
 */
class CommercialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'NomCommercials' => $this->faker->lastname(),
            'PreCommercials' => $this->faker->firstname(),
            'MailCommercials' => $this->faker->unique()->safeEmail(),
            'TelCommercials' => $this->faker->phoneNumber(),
        ];
    }
}
