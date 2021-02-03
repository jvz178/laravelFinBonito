<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplica extends Model
{
    // use HasFactory;
    protected $table = 'aplicas';

    protected $fillable = [
         'id', 'oferta_id','usuario_id',
    ];

    public function usuario(){
        return $this->belongsTo(User::class, 'usuario_id');
    }

    public function oferta(){
        return $this-> belongsTo(Oferta::class, 'oferta_id');
    }
}
