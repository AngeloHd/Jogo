<?php

namespace App\Http\Controllers;

use App\Models\Nivel;
use App\Models\Pergunta;
use App\Models\Resposta;
use Illuminate\Http\Request;

class ControllerPergunta extends Controller
{
    function layout(){
        return view('admin.layout');
    }

    function index(){
        $nivels = Nivel::get();
        $perguntas = Pergunta::get();
        return view ('admin.perguntas.index',['nivels'=>$nivels]);
    }

    function Salvar_Pergunta(Request $request){
        $save_resposta = Resposta::create($request->all());
        $ultimo = Resposta::get()->last();
        dd($ultimo);

    }
}
