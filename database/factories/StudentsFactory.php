<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sex = ['masculino', 'feminino', 'outro'];
        $sexId = rand(0,1);

        if ($sexId == 0) {
            $name = fake()->name('male');
        } else if ($sexId == 1) {
            $name = fake()->name('female');
        } else {
            $name = fake()->name();
        }

        return [
            'name'       => $name,
            'email'      => fake()->unique()->safeEmail(),
            'age'        => rand(18, 65),
            'sex'        => $sex[$sexId],
            'phone'      => fake()->phoneNumber(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
