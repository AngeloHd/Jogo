@extends('layout')
@section('corpo')
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

<div class="col-lg-6">
    <div class="x_panel">
        <div class="x_content">
            <label><strong>Conta</strong></label>
            <hr>
            <div>
                <strong>
                    <h2 class="text-info">{{ number_format($pontos->pontuacao,2) }} USD</h2>
                </strong>

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
        // console.log(datas)
        if(datas == 'sucesso'){
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Resposta Certa',
                showConfirmButton: false,
                timer: 1500
            })
        }else{
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Resposta errada!',
                showConfirmButton: false,
                timer: 1500
            })
        }
        location.reload(false)

		})


    });

    var ul = $("#minhaLista");
    var lis = $.makeArray(ul.children().detach()); // Remove todos os lis e converte num array
    for ( var i = 0 ; i < lis.length ; i++ ) {
        var proxima = Math.floor(Math.random()*(lis.length - i) + i); // Sorteia um
        ul.append(lis[proxima]); // Coloca de volta na lista
        lis[proxima] = lis[i];  // Retira ele dos "ainda não sorteados"
    }

</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
@endsection
