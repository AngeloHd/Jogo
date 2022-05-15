@extends('layout')
@section('corpo')
@include('admin.externas.datatable')
@include('admin.externas.form_validation')
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Editar Pergunta......</h2>
            <ul class="nav navbar-right panel_toolbox">
                <a href="{{route('pergunta.index')}}" class="btn btn-success">Perguntas</a>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <form class="form-horizontal form-label-left" action="{{route('salvar_edit',$pergunta->id)}}" method="POST">
                <!-- @method("PUT") -->
                @include('admin.perguntas.form')
            </form>

        </div>
    </div>
</div>
@endsection
