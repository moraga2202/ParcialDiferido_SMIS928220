<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'cod_libro' => $this->faker->text(15),
            'isbn' => $this->faker->text(20),
            'titulo' => $this->faker->text(15),
            'annio_publicacion' => $this->faker->text(20),
            'precio_venta' => $this->faker->text(20),
            'descripcion' => $this->faker->text(50),
        ];
    }
}
