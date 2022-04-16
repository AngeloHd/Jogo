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
                        <th>Invoice </th>
                        <th>Invoice Date </th>
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
                    <tr class="odd pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000039</td>
                        <td class=" ">May 23, 2014 11:30:12 PM</td>
                        <td class=" ">121000208 <i class="success fa fa-long-arrow-up"></i>
                        </td>
                        <td class=" ">John Blank L</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$741.20</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="even pointer selected">
                        <td class="a-center ">
                            <input type="checkbox" checked class="tableflat">
                        </td>
                        <td class=" ">121000038</td>
                        <td class=" ">May 24, 2014 10:55:33 PM</td>
                        <td class=" ">121000203 <i class="success fa fa-long-arrow-up"></i>
                        </td>
                        <td class=" ">Mike Smith</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$432.26</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="odd pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000037</td>
                        <td class=" ">May 24, 2014 10:52:44 PM</td>
                        <td class=" ">121000204</td>
                        <td class=" ">Mike Smith</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$333.21</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="even pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000040</td>
                        <td class=" ">May 24, 2014 11:47:56 PM </td>
                        <td class=" ">121000210</td>
                        <td class=" ">John Blank L</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$7.45</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="odd pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000039</td>
                        <td class=" ">May 26, 2014 11:30:12 PM</td>
                        <td class=" ">121000208 <i class="error fa fa-long-arrow-down"></i>
                        </td>
                        <td class=" ">John Blank L</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$741.20</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="even pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000038</td>
                        <td class=" ">May 26, 2014 10:55:33 PM</td>
                        <td class=" ">121000203</td>
                        <td class=" ">Mike Smith</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$432.26</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="odd pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000037</td>
                        <td class=" ">May 26, 2014 10:52:44 PM</td>
                        <td class=" ">121000204</td>
                        <td class=" ">Mike Smith</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$333.21</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>

                    <tr class="even pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000040</td>
                        <td class=" ">May 27, 2014 11:47:56 PM </td>
                        <td class=" ">121000210</td>
                        <td class=" ">John Blank L</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$7.45</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="odd pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000039</td>
                        <td class=" ">May 28, 2014 11:30:12 PM</td>
                        <td class=" ">121000208</td>
                        <td class=" ">John Blank L</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$741.20</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
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
                    <tr class="odd pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000039</td>
                        <td class=" ">May 23, 2014 11:30:12 PM</td>
                        <td class=" ">121000208 <i class="success fa fa-long-arrow-up"></i>
                        </td>
                        <td class=" ">John Blank L</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$741.20</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="even pointer selected">
                        <td class="a-center ">
                            <input type="checkbox" checked class="tableflat">
                        </td>
                        <td class=" ">121000038</td>
                        <td class=" ">May 24, 2014 10:55:33 PM</td>
                        <td class=" ">121000203 <i class="success fa fa-long-arrow-up"></i>
                        </td>
                        <td class=" ">Mike Smith</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$432.26</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="odd pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000037</td>
                        <td class=" ">May 24, 2014 10:52:44 PM</td>
                        <td class=" ">121000204</td>
                        <td class=" ">Mike Smith</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$333.21</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="even pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000040</td>
                        <td class=" ">May 24, 2014 11:47:56 PM </td>
                        <td class=" ">121000210</td>
                        <td class=" ">John Blank L</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$7.45</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="odd pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000039</td>
                        <td class=" ">May 26, 2014 11:30:12 PM</td>
                        <td class=" ">121000208 <i class="error fa fa-long-arrow-down"></i>
                        </td>
                        <td class=" ">John Blank L</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$741.20</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="even pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000038</td>
                        <td class=" ">May 26, 2014 10:55:33 PM</td>
                        <td class=" ">121000203</td>
                        <td class=" ">Mike Smith</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$432.26</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="odd pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000037</td>
                        <td class=" ">May 26, 2014 10:52:44 PM</td>
                        <td class=" ">121000204</td>
                        <td class=" ">Mike Smith</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$333.21</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>

                    <tr class="even pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000040</td>
                        <td class=" ">May 27, 2014 11:47:56 PM </td>
                        <td class=" ">121000210</td>
                        <td class=" ">John Blank L</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$7.45</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="odd pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000039</td>
                        <td class=" ">May 28, 2014 11:30:12 PM</td>
                        <td class=" ">121000208</td>
                        <td class=" ">John Blank L</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$741.20</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
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
                    <tr class="odd pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000039</td>
                        <td class=" ">May 23, 2014 11:30:12 PM</td>
                        <td class=" ">121000208 <i class="success fa fa-long-arrow-up"></i>
                        </td>
                        <td class=" ">John Blank L</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$741.20</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="even pointer selected">
                        <td class="a-center ">
                            <input type="checkbox" checked class="tableflat">
                        </td>
                        <td class=" ">121000038</td>
                        <td class=" ">May 24, 2014 10:55:33 PM</td>
                        <td class=" ">121000203 <i class="success fa fa-long-arrow-up"></i>
                        </td>
                        <td class=" ">Mike Smith</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$432.26</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="odd pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000037</td>
                        <td class=" ">May 24, 2014 10:52:44 PM</td>
                        <td class=" ">121000204</td>
                        <td class=" ">Mike Smith</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$333.21</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="even pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000040</td>
                        <td class=" ">May 24, 2014 11:47:56 PM </td>
                        <td class=" ">121000210</td>
                        <td class=" ">John Blank L</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$7.45</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="odd pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000039</td>
                        <td class=" ">May 26, 2014 11:30:12 PM</td>
                        <td class=" ">121000208 <i class="error fa fa-long-arrow-down"></i>
                        </td>
                        <td class=" ">John Blank L</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$741.20</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="even pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000038</td>
                        <td class=" ">May 26, 2014 10:55:33 PM</td>
                        <td class=" ">121000203</td>
                        <td class=" ">Mike Smith</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$432.26</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="odd pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000037</td>
                        <td class=" ">May 26, 2014 10:52:44 PM</td>
                        <td class=" ">121000204</td>
                        <td class=" ">Mike Smith</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$333.21</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>

                    <tr class="even pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000040</td>
                        <td class=" ">May 27, 2014 11:47:56 PM </td>
                        <td class=" ">121000210</td>
                        <td class=" ">John Blank L</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$7.45</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="odd pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000039</td>
                        <td class=" ">May 28, 2014 11:30:12 PM</td>
                        <td class=" ">121000208</td>
                        <td class=" ">John Blank L</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$741.20</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
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
                    <tr class="odd pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000039</td>
                        <td class=" ">May 23, 2014 11:30:12 PM</td>
                        <td class=" ">121000208 <i class="success fa fa-long-arrow-up"></i>
                        </td>
                        <td class=" ">John Blank L</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$741.20</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="even pointer selected">
                        <td class="a-center ">
                            <input type="checkbox" checked class="tableflat">
                        </td>
                        <td class=" ">121000038</td>
                        <td class=" ">May 24, 2014 10:55:33 PM</td>
                        <td class=" ">121000203 <i class="success fa fa-long-arrow-up"></i>
                        </td>
                        <td class=" ">Mike Smith</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$432.26</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="odd pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000037</td>
                        <td class=" ">May 24, 2014 10:52:44 PM</td>
                        <td class=" ">121000204</td>
                        <td class=" ">Mike Smith</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$333.21</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="even pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000040</td>
                        <td class=" ">May 24, 2014 11:47:56 PM </td>
                        <td class=" ">121000210</td>
                        <td class=" ">John Blank L</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$7.45</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="odd pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000039</td>
                        <td class=" ">May 26, 2014 11:30:12 PM</td>
                        <td class=" ">121000208 <i class="error fa fa-long-arrow-down"></i>
                        </td>
                        <td class=" ">John Blank L</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$741.20</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="even pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000038</td>
                        <td class=" ">May 26, 2014 10:55:33 PM</td>
                        <td class=" ">121000203</td>
                        <td class=" ">Mike Smith</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$432.26</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="odd pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000037</td>
                        <td class=" ">May 26, 2014 10:52:44 PM</td>
                        <td class=" ">121000204</td>
                        <td class=" ">Mike Smith</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$333.21</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>

                    <tr class="even pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000040</td>
                        <td class=" ">May 27, 2014 11:47:56 PM </td>
                        <td class=" ">121000210</td>
                        <td class=" ">John Blank L</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$7.45</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                    <tr class="odd pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="tableflat">
                        </td>
                        <td class=" ">121000039</td>
                        <td class=" ">May 28, 2014 11:30:12 PM</td>
                        <td class=" ">121000208</td>
                        <td class=" ">John Blank L</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$741.20</td>
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
