<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Country;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $country = collect(Country::all()->modelKeys());

        return [
            'name'        => fake()->words(rand(2, 4), true),
            'description' => fake()->text(),
            'country_id'  => $country->random(),
            'price'       => fake()->randomNumber(rand(3, 5)),
        ];
    }

    public function configure(): self
    {
        $categories = collect(Category::where('is_active', true)->get()->modelKeys());

        return $this->afterCreating(function (Product $product) use ($categories) {
            $product->categories()->sync($categories->random(rand(1, 3)));
        });
    }
}
