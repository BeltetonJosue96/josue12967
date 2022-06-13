<?php

namespace Database\Seeders;

use App\Models\empleado;
use Illuminate\Database\Seeder;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        empleado::factory(1000)->create();
    }
}
