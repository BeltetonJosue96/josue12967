<?php

namespace Database\Seeders;

use App\Models\empleados;
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
        empleados::factory(1000)->create();
    }
}
