<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Receita extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'nome',
        'ingredientes',
        'categoria',
        'modo_de_preparo',
        'slug',
        'img_card',
        'img_receita'
    ];
}
