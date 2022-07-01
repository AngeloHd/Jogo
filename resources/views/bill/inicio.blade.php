<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('Home/home.css') }}">
    <title>Home - Perguntas da Banda</title>
</head>
<body>
    <div class="container">
        <h2>Desafia-te com perguntas sobre tecnologia, entretenimento e cultura geral</h2>
        <h1>Perguntas da Banda</h1>
        <!-- <input href="" type="button" value="Iniciar Jogo"> -->
        <a href="{{ route('login2') }}"> Comece sua jornada e suba de nível! <strong> Iniciar Jogo </strong></a>
    </div>
    <div class="lemon"></div>
    <div class="triangle"></div>
    <div class="capsule"></div>
    <div class="square"></div>

    {{-- <div class="perguntas">
        <div class="container">
            <div id="game" class="justify-center flex-column" >
                <div id="hud">
                    <div id="hud-item">
                        <p id="progressText" class="hud-prefix">
                            Perguntas
                        </p>
                        <div id="progressBar">
                            <div id="progressBarFull"></div>
                        </div>
                    </div>
                    <div id="hud-item">
                        <p class="hud-prefix">
                            Pontuação
                        </p>
                        <div class="hud-main-text" id="score">
                            0
                        </div>
                    </div>
                </div>
                <h2 id="question">Qual é a resposta para esta questão?</h2>
                <div class="choice-container">
                    <P class="choice-prefix">A</P>
                    <p class="choice-text" data-number="1">Esolha 1</p>
                </div>
                <div class="choice-container">
                    <P class="choice-prefix">B</P>
                    <p class="choice-text" data-number="2">Esolha 2</p>
                </div>
                <div class="choice-container">
                    <P class="choice-prefix">C</P>
                    <p class="choice-text" data-number="3">Esolha 3</p>
                </div>
                <div class="choice-container">
                    <P class="choice-prefix">D</P>
                    <p class="choice-text" data-number="4">Esolha 4</p>
                </div>
            </div>
        </div>
        <script src="js/game.js"></script>
    </div> --}}
</body>
</html>
