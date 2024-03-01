<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => null,
            "title" => fake()->sentence(12),
            "image" => fake()->image(public_path("assets\images\Posts"),640,480,null,false),
            "created_at" => fake()->dateTimeBetween('-2 years'),
            "updated_at" => function($attributes){
                return fake()->dateTimeBetween($attributes["created_at"]);
            }
        ];
    }
}
