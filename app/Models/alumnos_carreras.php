<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumnos_carreras extends Model
{
    use HasFactory;
    protected $table = 'alumnos_carreras';
    protected $primaryKey = 'id';
    protected $fillable = [
        'idUOperativo',
        'idCarrera',
        'idGrupo',
        'idCicloEscolar'
    ];
}
