<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Failed_Job extends Model
{
    protected $table = 'failed_jobs';

    protected $fillable = [
        'uuid','connection','queue','payload','exception'
    ];
}
