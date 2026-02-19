<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Définir l'état par défaut du modèle (factory).
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => 1,
            'name' => $this->faker->text(20),
        ];
    }
}
