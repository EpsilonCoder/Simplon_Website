<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\formation>
 */
class FormationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'libelle' => $this->facker->words(rand(6, 14), true),
            'description' => $this->facker->words(rand(20, 40), true),
            'liens' => $this->facker->domainName()->unique(),
            'image' => $this->facker->image()->unique()
        ];
    }
}
