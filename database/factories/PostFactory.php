<?php

namespace Modules\Posts\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Posts\Models\Post::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}

