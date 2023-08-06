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
            'color_from'=>"#E50914",
            'color_main'=>"#1A1E29",
            'color_to'=>"#132D46",
            'link'=>fake()->url,
            'logo_name'=>"netflix-text-logo",
            'logo'=>"https://nimaheidari.storage.iran.liara.space/images/netflix-text-logo.png",
        ];
    }
}
