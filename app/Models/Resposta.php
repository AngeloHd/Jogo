<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Resposta extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = "respostas";
    protected $fillable = ['certa','errada1','errada2','errada3'];
}
