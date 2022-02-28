<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios_operativos extends Model
{
    use HasFactory;
    protected $table = "usuarios_opetativos";
    protected $primaryKey = "id";
    protected $fillable = [
        "matricula",
        "nombre",
        "ap_paterno",
        "email",
        "password",
        "idTipoUsuario",
        "sexo",
        "activo",
        "foto",
    ];
}
