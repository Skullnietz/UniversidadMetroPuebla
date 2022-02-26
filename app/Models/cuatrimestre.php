<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuatrimestres extends Model
{
    use HasFactory;
    protected $table = 'cuatrimestres';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre'
    ];
}
