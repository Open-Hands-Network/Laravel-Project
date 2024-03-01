<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "image" => fake()->image(public_path("assets\images\Profilepictures"), 720, 720, null,false),
            'first_name' => fake()->name(),
            'last_name' => fake()->name(),
            "gender" => fake()->numberBetween(1, 2),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$XNcdCtFzGcMmXwRIQ1Kbh.G44iJb16o3Vxp/zo7amL/8hCL4Eb.Sy', #Password is 'Password#1'
            "bio" => fake()->paragraph(),
            "job" => fake()->sentence(2),
            "nationalID" => fake()->unique()->numberBetween(10000000000000, 99999999999999),
            "phone" => fake()->phoneNumber(),
            'remember_token' => Str::random(10)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}