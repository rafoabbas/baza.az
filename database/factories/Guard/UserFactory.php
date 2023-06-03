<?php

namespace Database\Factories\Guard;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'phone' => 994 . $this->faker->randomElement(['50','70','77','99']) . $this->faker->randomNumber(7),
            'phones' => [
                994 . $this->faker->randomElement(['50','70','77','99']) . $this->faker->randomNumber(7),
                994 . $this->faker->randomElement(['50','70','77','99']) . $this->faker->randomNumber(7),
                994 . $this->faker->randomElement(['50','70','77','99']) . $this->faker->randomNumber(7)
            ],
            'is_business' => fake()->boolean(),
            'tin' => fake()->unique()->numberBetween(100000000, 999999999),
            'company_name' => fake()->company(),
            'balance' => 0,
            'advertisement_credit' => 0,
            'connection_ip' => fake()->ipv4(),
            'last_login_at' => now(),
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    public function business($business): static
    {
        return $this->state(fn (array $attributes) => [
            'is_business' => $business
        ]);
    }

    public function email($email): static
    {
        return $this->state(fn (array $attributes) => [
            'email' => $email
        ]);
    }

    public function phone($phone): static
    {
        return $this->state(fn (array $attributes) => [
            'phone' => $phone,
        ]);
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
