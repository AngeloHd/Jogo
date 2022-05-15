@extends('bill.layout')
@section('corpo')

<div id="hud">
	<div class="top">
		<p id="progressText" class="hud-prefix">
			Apelido: {{Auth::user()->name}}
		</p>
		<form method="POST" action="{{ route('logout') }}">
			@csrf
			<button type="submit" class="btn btn-danger"> <i class="bx-log-out-circle"></i>Logout</button>
		</form>
		<br>

		<div id="hud-item">
		<p class="hud-prefix">
			Pontuação: {{$pontos->pontuacao}}
		</p>
	</div>

	</div>

</div>
<h2><strong>Pergunta: </strong></h2><h2 id="pergunta">{{$perguntas->pergunta}}</h2>
<div class="x_panel">
	<div class="x_content">
		<ul id="minhaLista">

			<li>
				<button class="form-control btn btn-info" value="{{ $perguntas->certa }}">{{ $perguntas->certa }}</button>
			</li>
			<li>
				<button class="form-control btn btn-info" value="{{ $perguntas->errada1 }}">{{ $perguntas->errada1 }}</button>
			</li>
			<li>
				<button class="form-control btn btn-info" value="{{ $perguntas->errada2 }}">{{ $perguntas->errada2 }}</button>
			</li>
			<li>
				<button class="form-control btn btn-info" value="{{ $perguntas->errada3 }}">{{ $perguntas->errada3 }}</button>
			</li>

		</ul>
		
	</div>
	
</div>


<script src="{{ url('admin/js/jquery.min.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
	// alert("bom dia")
	var ul = $("#minhaLista");
	// var ul = document.getElementById('minhaLista')
    var lis = $.makeArray(ul.children().detach()); // Remove todos os lis e converte num array
    for ( var i = 0 ; i < lis.length ; i++ ) {
        var proxima = Math.floor(Math.random()*(lis.length - i) + i); // Sorteia um
        ul.append(lis[proxima]); // Coloca de volta na lista
        lis[proxima] = lis[i];  // Retira ele dos "ainda não sorteados"
    }

    $('button').click(function(){
    	var resposta = $(this).val();
    	var pergunta = $('#pergunta').html()
    // alert(pergunta+':'+valor)
    //Responder
    $.post("{{route('responder')}}",{'_token': '{{ csrf_token() }}',pergunta:pergunta,resposta:resposta},function(datas){
    	console.log(datas)
    	if(datas == 'sucesso'){
    		// alert("resposta certa")

            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Resposta Certa',
                showConfirmButton: false,
                timer: 3000
            })
        }else{
        	// alert("resposta errada")
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Resposta errada!',
                showConfirmButton: false,
                timer: 2000
            })
        }
        location.reload(true)

    })
});
</script>

@endsection