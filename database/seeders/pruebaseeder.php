<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\prueba;
use File;

class pruebaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $json = File::get("database/data/apiaconsumir.json");
       $pruebas = json_decode($json, true);

       foreach ($pruebas as $prueba) {
        Prueba::query()->updateOrCreate([
        'id' => $prueba ['id'],
        'nombreIndicador' => $prueba['nombreIndicador'],
        'codigoIndicador' => $prueba['codigoIndicador'],
        'unidadMedidaIndicador' => $prueba ['unidadMedidaIndicador'],
        'valorIndicador' => $prueba ['valorIndicador'],
        'fechaIndicador' => $prueba ['fechaIndicador'],
        'tiempoIndicador' => $prueba ['tiempoIndicador'],
        'origenIndicador' => $prueba ['origenIndicador']
        ]);
       }
    } 
}
