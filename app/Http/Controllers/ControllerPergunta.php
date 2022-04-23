<?php

namespace App\Http\Controllers;

use App\Models\Nivel;
use App\Models\Pergunta;
use App\Models\Pergunta_Utilizador;
use App\Models\Pontuacao;
use App\Models\Resposta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerPergunta extends Controller
{
    function layout(){
        return view('layout');
    }

    function index(){
        $nivels = Nivel::get();
        return view ('admin.perguntas.index',['nivels'=>$nivels]);
    }

    function Salvar_Pergunta(Request $request){
        $save_resposta = Resposta::create([
            'certa'=>$request->certa,
            'errada1'=>$request->errada1,
            'errada2'=>$request->errada2,
            'errada3'=>$request->errada3,
        ]);
        $ultimo = Resposta::get()->last();
        $save_pergunta = Pergunta::create([
            'pergunta'=>$request->pergunta,
            'nivel_id'=>$request->nivel_id,
            'resposta_id'=>$ultimo->id
        ]);
        return redirect()->route('pergunta.index');

    }

    function jogo(){

       while(true){
        $pontos = Pontuacao::where('user_id','=',Auth::user()->id)->first();
        if($pontos->pontuacao >= 400){
            dd("pergunta do nivel 2");
        }
        $perguntas = Pergunta::join('respostas','resposta_id','respostas.id')
            ->join('nivels','nivel_id','nivels.id')
            ->where('nivel_id','=',$pontos->nivel)
            ->inRandomOrder()->first();

            $verifica_pergunta = Pergunta_Utilizador::where('pergunta_id','=',$perguntas->id)
            ->where('user_id','=',Auth::user()->id)
            ->first();
            // dd($verifica_pergunta);

            if($verifica_pergunta === null){
                // dd("aqui");
                return view('jogo.pergunta',['perguntas'=>$perguntas,'pontos'=>$pontos]);
                break;
                die();
            }
       }
    }

    function responder(Request $request){
        // dd($request->all());

        $pergunta = Pergunta::join('nivels','nivel_id','nivels.id')
        ->join('respostas','resposta_id','respostas.id')
        ->where('pergunta','=',$request->pergunta)
        ->first();

        $pontos = Pontuacao::where('user_id','=',Auth::user()->id)->first();

        if($request->resposta == $pergunta->certa){
            $pergunta_user = Pergunta_Utilizador::create([
                'pergunta_id'=>$pergunta->id,
                'user_id'=>Auth::user()->id,
             ]);
            $soma_ponto = ($pontos->pontuacao + $pergunta->pontuacao);
            $update_ponto = Pontuacao::where('id','=',$pontos->id)->update([
               'pontuacao'=>$soma_ponto,
               'acertada'=>$pontos->acertada+1
            ]);

            return "sucesso";
        }else{
            $update_ponto = Pontuacao::where('id','=',$pontos->id)->update([
                'errada'=>$pontos->errada+1
             ]);
            return "errado";
        }
    }
}
