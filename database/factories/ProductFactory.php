<?php

namespace Database\Factories;

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
        $titles = [
            'Syltherine',
            'Leviosa',
            'Lolito',
            'Respira',
            'Grifo',
            'Muggo',
            'Potty',
            'Pingky'
        ]; 

        $description = [
            'Stylish cafe chair',
            'Luxury big sofa',
            'Outdoor bar table and stool',
        ];

        return [
            'title' => $this->faker->randomElement($titles), // gets random name from my array
            'description' => $this->faker->randomElement( $description), // gets random discription
            'price' => $this->faker->randomFloat(2, 5, 5000), 
            'image' => 'product' . $this->faker->numberBetween(1, 8) . '.svg'
        ];
    }
}
