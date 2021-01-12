<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    // use HasFactory;
    protected $table = 'ofertas';

    protected $fillable = [
         'titulo','descripcion','fecha_max','num_candidatos','ciclo_id',
    ];
}
