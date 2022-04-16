<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pergunta extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = "perguntas";
    protected $fillable = ['pergunta','nivel_id','resposta_id',''];
}
