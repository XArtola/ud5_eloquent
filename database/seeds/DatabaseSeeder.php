<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('EmpleadosTableSeeder');
        $this->call('DepartamentosTableSeeder');
        $this->call('ProyectosTableSeeder');
        $this->call('ForeignKeysSeeder');
        $this->call('Empleado_ProyectoTableSeeder');
    }
}
