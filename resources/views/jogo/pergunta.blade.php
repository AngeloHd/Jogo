@extends('layout')
@section('corpo')
<div class="col-lg-12">
    <div class="x_panel">
        <div class="x_content">
            <h1>
                <div class="text-center tile_count count" id="timer"></div>
            </h1>
        </div>
    </div>
</div>
<div class="col-lg-6">
    <div class="x_panel">
        <div class="x_content">
            {{-- <label>Pergunta:</label> --}}
           <strong><h3 class="text-info" id="pergunta"> {{ $perguntas->pergunta }}</h3></strong>
            <hr>
            <div>
                {{-- <label>Resostas</label> --}}
               <ul id="minhaLista">
                   <li>
                       <button class="form-control btn btn-primary" value="{{ $perguntas->certa }}">{{ $perguntas->certa }}</button>
                   </li>
                   <li>
                       <button class="form-control btn btn-primary" value="{{ $perguntas->errada1 }}">{{ $perguntas->errada1 }}</button>
                   </li>
                   <li>
                       <button class="form-control btn btn-primary" value="{{ $perguntas->errada2 }}">{{ $perguntas->errada2 }}</button>
                   </li>
                   <li>
                       <button class="form-control btn btn-primary" value="{{ $perguntas->errada3 }}">{{ $perguntas->errada3 }}</button>
                   </li>
               </ul>
            </div>
        </div>

    </div>

</div>

<div class="col-lg-2">
    <div class="x_panel">
        <div class="x_content">
            <label><strong>Bonus</strong></label>
            <hr>
            <div>
                <strong>
                    <h2 class="text-info">{{ number_format($pontos->pontuacao,2) }} USD</h2>
                </strong>

            </div>
        </div>
    </div>
</div>

<div class="col-lg-4">
    <div class="x_panel">
        <div class="x_content">
            <label><strong>Estatistica das perguntas</strong></label>
            <hr>
            <div class="row tile_count">
                <div class="animated flipInY col-md-6 col-sm-4 col-xs-4 tile_stats_count">
                    <div class="left"></div>
                    <div class="right">
                        <span class="count_top">Acertadas</span>
                        <div class="count green">{{ number_format($pontos->acertada) }}</div>
                    </div>
                </div>
                <div class="animated flipInY col-md-6 col-sm-4 col-xs-4 tile_stats_count">
                    <div class="left"></div>
                    <div class="right">
                        <span class="count_top">Erradas</span>
                        <div class="count red">{{ number_format($pontos->errada) }}</div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

    $('button').click(function(){
    var resposta = $(this).val();
    var pergunta = $('#pergunta').html()
    // alert(pergunta+':'+valor)
    //Responder
    $.post("{{route('responder')}}",{'_token': '{{ csrf_token() }}',pergunta:pergunta,resposta:resposta},function(datas){
        console.log(datas)
        if(datas == 'sucesso'){
            alert("resposta certa")

            // Swal.fire({
            //     position: 'top-end',
            //     icon: 'success',
            //     title: 'Resposta Certa',
            //     showConfirmButton: false,
            //     timer: 1500
            // })
        }else{
            alert("resposta errada")
            // Swal.fire({
            //     position: 'top-end',
            //     icon: 'error',
            //     title: 'Resposta errada!',
            //     showConfirmButton: false,
            //     timer: 1500
            // })
        }
        location.reload(true)

		})


    });

    var ul = $("#minhaLista");
    var lis = $.makeArray(ul.children().detach()); // Remove todos os lis e converte num array
    for ( var i = 0 ; i < lis.length ; i++ ) {
        var proxima = Math.floor(Math.random()*(lis.length - i) + i); // Sorteia um
        ul.append(lis[proxima]); // Coloca de volta na lista
        lis[proxima] = lis[i];  // Retira ele dos "ainda não sorteados"
    }

    //contador
    function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
        setInterval(function () {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);
            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;
            display.textContent = minutes + ":" + seconds;
            if (--timer < 0) {
                timer = duration;
                // location.reload(false);
            }
        }, 1000);
    }
    window.onload = function () {
        var duration = 60 * 0.16; // Converter para segundos
            display = document.querySelector('#timer'); // selecionando o timer
        startTimer(duration, display); // iniciando o timer
        // console.log(display.textContent);
        // if(display == "00:00"){
        //     location.reload(true)
        // }
    };
    // location.reload(false)

</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
@endsection
