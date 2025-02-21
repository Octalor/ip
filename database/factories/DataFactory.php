<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class DataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'organisation' => 'CICM Poland',
            'rubric' => fake()->name,
            'description' => fake()->text,
            'role' => 'personell',
            'timedata' => '01-02-2024',
            'montant' => fake()->sentence,
            'account' => fake()->title,
            'tranche' => fake()->title,
            'notes' => fake()->text,
           
        ];
    }
}
