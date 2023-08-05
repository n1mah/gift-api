<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner>
 */
class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->title,
            'description'=>fake()->sentence,
            'color-from'=>"#E50914",
            'color-main'=>"#1A1E29",
            'color-to'=>"#132D46",
            'link'=>fake()->url,
            'logo-name'=>"netflix",
            'logo'=>"netflix.jpg",
        ];
    }
}
