<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\database\Eloquent\Model;

class Prueba extends Model
{
    use HasFactory;

    protected $table = 'pruebas';
    protected $filliable = [
        'id',
        'nombreIndicador',
        'codigoIndicador',
        'unidadMedidaIndicador',
        'valorIndicador',
        'fechaIndicador',
        'tiempoIndicador',
        'origenIndicador'
    ];
    public $timestamps = false;
}
