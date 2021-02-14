<?php

namespace Database\Factories;

use App\Models\Plants;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlantsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Plants::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'plants_name' => $this->faker->text(50),
            'plants_price' => $this->faker->randomFloat(2, 5, 400),
            'plants_desc' => $this->faker->text(50),
            'plants_photo_path' => $this->faker->text(50),
        ];
    }
}
