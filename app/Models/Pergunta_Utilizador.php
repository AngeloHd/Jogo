<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Pergunta_Utilizador extends Model
{
    use HasFactory,SoftDeletes;

    protected $table="pergunta__utilizadors";
    protected $fillable = ['pergunta_id','user_id'];
}
