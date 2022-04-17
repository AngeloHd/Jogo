<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pontuacao extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = "pontuacaos";
    protected $fillable = ['pontuacao','user_id','acertada','errada'];
}
