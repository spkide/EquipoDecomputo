<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipoDeComputo extends Model
{
    use HasFactory;

    // Indicar explícitamente la tabla
    protected $table = 'equipodecomputos';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'marca',
        'modelo',
        'procesador',
        'ram',
        'disco_duro',
        'sistema_operativo',
        'estado',
        'numero_serie',
    ];
}
