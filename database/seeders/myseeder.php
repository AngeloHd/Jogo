<?php

namespace Database\Seeders;

use App\Models\Nivel;
use App\Models\Pergunta;
use App\Models\Pontuacao;
use App\Models\Resposta;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class myseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=>'@admin',
            'email'=>'admin@admin.com',
            'password'=>Hash::make('@123456')
        ]);

        $nivel = Nivel::create([
            'nivel'=>'1',
            'pontuacao'=>'10'

        ]);

        $resposta = Resposta::create([
            'certa'=>'2',
            'errada1'=>'11',
            'errada2'=>'1',
            'errada3'=>'22'
        ]);

        $pergunta =Pergunta::create([
            'pergunta'=>'1+1',
            'nivel_id'=>'1',
            'resposta_id'=>'1'
        ]);

        $pontuacao = Pontuacao::create([
            'pontuacao'=>0,
            'user_id'=>'1',
            'nivel'=>'1'
        ]);
    }
}
