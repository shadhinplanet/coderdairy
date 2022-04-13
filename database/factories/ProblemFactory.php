<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Problem>
 */
class ProblemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->sentence(rand(5,10));
        $visibility = ['public','private'];
        return [
            'name'  => $name,
            'slug'  => Str::slug($name),
            'visibility'    => $visibility[rand(0,1)],
            'user_id'   => '1',
            'category_id'   => Category::all()->random()->id,
        ];
    }
}
