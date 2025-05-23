<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    /** @use HasFactory<\Database\Factories\DocenteFactory> */
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'correo',
        'codigo',
    ];

    public function secciones()
    {
        return $this->hasMany(Seccion::class);
    }
}
