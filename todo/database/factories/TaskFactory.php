<?php

namespace Database\Factories;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Mots pour les titres
        $motsTitres = [
            'cours', 'email', 'repas', 'maison', 'bureau',
            'nettoyer', 'préparer', 'organiser', 'acheter', 'livrer'];
        $title = ucfirst(implode(' ', $this->faker->randomElements
        ($motsTitres, rand(2,3))));
        return [
            'title' => $title,
            'completed' => fake()->boolean,
        ];
    }
}
