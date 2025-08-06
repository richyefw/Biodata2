<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warteg extends Model
{
    protected $table = 'wartegs';

    protected $fillable = ['nis', 'nama', 'rombel', 'rayon', 'ket'];
}
