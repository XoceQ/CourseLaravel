<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->sentence();
        return [
            'name' => $name,
            'slug' => str::slug($name, '-'),
            'descripcion' => $this->faker->paragraph(),
            'categoria' => $this->faker->randomelement(['Desarrollo web', 'Diseño web'])
            //
        ];
    }
}
