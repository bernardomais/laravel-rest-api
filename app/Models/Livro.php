<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = ['nome', 'posicao', 'abreviacao', 'testamento_id'];
}
