<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TarefaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'tarefa' => $this->faker->text(50),
            'data_limite_conclusao' => $this->faker->date('Y-m-d', 'now')
        ];
    }
}
