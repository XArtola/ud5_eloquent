<?php

use Illuminate\Database\Seeder;
use App\Models\Proyecto;
class ProyectosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Models\Proyecto::class,100)->create();
    /*
        $fecha = date('Y/m/d');
  
        for ($i=0;$i<5;$i++) {
            $fechainicio = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
            $fechainicio = date ( 'Y/m/d' , $fechainicio);
      
            $fechafin = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
            $fechafin = date ( 'Y/m/d' , $fechafin );
             Proyecto::insert([
                'nombre' => Str::random(10),
                'titulo' => Str::random(20),
                'fechainicio' => $fechainicio,
                'fechafin'  => $fechafin,
                'horasestimadas' => rand(500,3000)
            ]);
        }*/
    }

    public function down(){

    
    }

}
    
