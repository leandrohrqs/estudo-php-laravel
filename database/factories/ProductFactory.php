<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;


class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->sentence();
        return [
            'name' => $name,
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomNumber(2, true),
            'slug' => Str::slug($name),
            'image' => $this->faker->imageUrl(400, 400),
            'id_user' => User::pluck('id')->random(),
            'id_categories' => Category::pluck('id')->random(),
        ];
    }
}
