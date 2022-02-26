<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ciclo_escolar extends Model
{
    use HasFactory;
    protected $table = 'ciclo_escolar';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre'
    ];
}
