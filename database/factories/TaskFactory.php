<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // php artisan make:factory TaskFactory untuk membuat file Factory
        return [
            'user' => $this -> faker->name(),
            'task' => $this -> faker->word()
        ];
    }
}
