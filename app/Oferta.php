<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    //use HasFactory;
    // protected $table = 'ofertas';

    protected $fillable = [
         'titulo','descripcion','fecha_max','num_candidatos','ciclo_id',
    ];

    
    public function ciclo(){
        return $this->belongsTo(Ciclo::class, 'ciclo_id');
    }
}
