<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplica extends Model
{
    // use HasFactory;
    // protected $table = 'aplicas';

    protected $fillable = [
         'oferta_id','usuario_id',
    ];
}
