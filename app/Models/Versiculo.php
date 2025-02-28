<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Versiculo extends Model
{
    protected $fillable = ['capitulo', 'versiculo', 'texto', 'livro_id'];
}
