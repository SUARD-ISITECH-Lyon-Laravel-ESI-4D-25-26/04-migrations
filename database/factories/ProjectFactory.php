<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Définir l'état par défaut du modèle (factory).
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(20),
        ];
    }
}
