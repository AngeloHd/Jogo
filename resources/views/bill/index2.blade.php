<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Perguntas da banda </title>

    <!-- Bootstrap core CSS -->

    <link href="{{ url('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        .card {
            /* Add shadows to create the "card" effect */
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        /* On mouse-over, add a deeper shadow */
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        /* Add some padding inside the card container */
        .container {
            padding: 2px 16px;
        }

        .btn {
            border: 2px solid;
            border-radius: 10px;
        }

        .info {
            border: 2px solid black;
            border-radius: 10px;
            padding: 5px;
        }

        .ponto {
            border: 2px solid black;
            border-radius: 10px;
            padding: 10px;
            background: yellow;
        }

    </style>
    {{-- <link rel="stylesheet" href="{{ url('Home/home.css') }}"> --}}
    {{-- <link href="{{ url('admin/css/custom.css') }}" rel="stylesheet"> --}}
</head>

<body class="nav-md">

    <div class="container body card">
        <div class="main_container">
            <div class="right_col" role="main">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel tile">
                        <div class="x_title text-center">
                            <h2>Bem vindo</h2>
                            <ul class="nav navbar-right panel_toolbox ponto">
                                <h2>{{ $pontos->pontuacao }} pts</h2>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <hr>
                        <div class="x_content">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center x_title">
                                        <h4> <strong>Nivel: {{ $pontos->nivel }}</strong></h4>
                                    </div>
                                </div>
                                @if ($pontos->pontuacao >= 285)
                                    <div class="col-lg-9">
                                        <div class="x_panel tile">
                                            <h1>parabens voce venceu o jogo!!</h1>
                                        </div>
                                    </div>

                                @else
                                <div class="col-lg-9">
                                    <div class="x_panel tile info">
                                        <h2 id="pergunta">{{ $perguntas->pergunta }}</h2>
                                    </div>
                                    <hr>
                                    <div class="x_panel tile">
                                        <ul id="minhaLista" style="list-style: none;" class="info">

                                            <li>
                                                <button id="certa" class="form-control btn btn-info"
                                                    value="{{ $perguntas->certa }}">{{ $perguntas->certa }}</button>
                                            </li>
                                            <li>
                                                <button class="form-control btn btn-info"
                                                    value="{{ $perguntas->errada1 }}">{{ $perguntas->errada1 }}</button>
                                            </li>
                                            <li>
                                                <button class="form-control btn btn-info"
                                                    value="{{ $perguntas->errada2 }}">{{ $perguntas->errada2 }}</button>
                                            </li>
                                            <li>
                                                <button class="form-control btn btn-info"
                                                    value="{{ $perguntas->errada3 }}">{{ $perguntas->errada3 }}</button>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                @endif
                                <div class="col-lg-3 info">
                                    <div class="x_panel tile">
                                        <h2 class="text-success">Acertada: {{ $pontos->acertada }} </h2>
                                        <h2 class="text-danger">Errada:{{ $pontos->errada }} </h2>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="btn btn-danger"> <i
                                                    class="bx-log-out-circle"></i>Sair</button>
                                        </form>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="{{ url('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('admin/js/jquery.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        var ul = $("#minhaLista");
        // var ul = document.getElementById('minhaLista')
        var lis = $.makeArray(ul.children().detach()); // Remove todos os lis e converte num array
        for (var i = 0; i < lis.length; i++) {
            var proxima = Math.floor(Math.random() * (lis.length - i) + i); // Sorteia um
            ul.append(lis[proxima]); // Coloca de volta na lista
            lis[proxima] = lis[i]; // Retira ele dos "ainda não sorteados"
        }

        $('button').click(function() {

            this.style.backgroundColor = 'red';
            document.getElementById('certa').style.backgroundColor = 'green';

            var resposta = $(this).val();
            var pergunta = $('#pergunta').html()
            // alert(pergunta+':'+valor)
            //Responder
            $.post("{{ route('responder') }}", {
                '_token': '{{ csrf_token() }}',
                pergunta: pergunta,
                resposta: resposta
            }, function(datas) {
                // console.log(datas)
                // if (datas == 'sucesso') {
                //     // alert("resposta certa")

                //     Swal.fire({
                //         position: 'top-end',
                //         icon: 'success',
                //         title: 'Resposta Certa',
                //         showConfirmButton: false,
                //         timer: 2000
                //     })
                // } else {
                //     // alert("resposta errada")
                //     Swal.fire({
                //         position: 'top-end',
                //         icon: 'error',
                //         title: 'Resposta errada!',
                //         showConfirmButton: false,
                //         timer: 2000
                //     })
                // }
                location.reload(true)

            })
        });
    </script>
</body>

</html>
