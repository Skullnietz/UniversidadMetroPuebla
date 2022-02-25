<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios_admin extends Model
{
    use HasFactory;
    protected $table = 'usuarios_admin';
    protected $primaryKey = 'id';
    protected $fillable = [
        'titulo',
        'nombre',
        'ap_paterno',
        'email',
        'password',
        'idTU',
        'idA',
        'activo',
    ];
}
