<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carreras extends Model
{
    use HasFactory;
    protected $table = 'carreras';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre'
    ];
}
