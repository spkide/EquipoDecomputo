<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipoDeComputo extends Model
{
    use HasFactory;

    protected $table = 'equipodecomputo'; // Tu tabla real

    protected $fillable = [
        'marca', 'modelo', 'procesador', 'ram', 
        'disco_duro', 'almacenamiento', 'sistema_operativo',
        'estado', 'numero_serie'
    ];
}
