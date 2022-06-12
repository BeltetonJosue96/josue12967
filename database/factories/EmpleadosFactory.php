<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'usuario'=>$this->faker->numberBetween(1,5),
            'nombre_empleado'=>$this->faker->name(),
            'numero_telefono'=>$this->faker->randomNumber(8,true),
            'correo'=>$this->faker->freeEmail(),
            'direccion'=>$this->faker->address(),
            'departamento'=>$this->faker->randomElement(['Zacapa', 'Izabal', 'Quiche', 'Petén', 'Escuintla', 'Huehuetenango']),
        ];
    }
}
