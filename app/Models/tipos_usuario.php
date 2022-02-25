<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipos_usuario extends Model
{
    use HasFactory;
    protected $table = 'tipos_usuario';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre'
    ];
}
