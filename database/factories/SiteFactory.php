<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SiteFactory extends Factory
{
    public function definition(): array
    {
        return [
            "user_id" => 1,
            "scheme" => fake()->randomElement(['http', 'https']),
            "domain" => fake()->domainName(),
            "default" => fake()->boolean()
        ];
    }
}
