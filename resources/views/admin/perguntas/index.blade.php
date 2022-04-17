@extends('layout')
@section('corpo')
@include('admin.externas.datatable')
@include('admin.externas.form_validation')
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Minhas Perguntas......</h2>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Adicioanr Pergunta</button>
            <ul class="nav navbar-right panel_toolbox">
                <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table id="example" class="table table-striped responsive-utilities jambo_table">
                <thead>
                    <tr class="headings">
                        <th>
                            <input type="checkbox" class="tableflat">
                        </th>
                        <th>Pergunta </th>
                        <th>NIvel </th>
                        <th>Order </th>
                        <th>Bill to Name </th>
                        <th>Status </th>
                        <th>Amount </th>
                        <th class=" no-link last"><span class="nobr">Action</span>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="even pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000040</td>
                        <td class=" ">May 23, 2014 11:47:56 PM </td>
                        <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i>
                        </td>
                        <td class=" ">John Blank L</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$7.45</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
    <!-- Modal para add pergunta -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Nova Pergunta</h4>
                </div>
                <div class="modal-body">
                        <form class="form-horizontal form-label-left" action="{{ route('Salvar_Pergunta') }}" method="POST">
                            @include('admin.perguntas.form')
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
