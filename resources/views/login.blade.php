<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }} | Pergunatas da banda</title>

    <link href="{{url('admin/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{url('admin/fonts/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{url('admin/css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{url('admin/css/custom.css')}}" rel="stylesheet">
    <link href="{{url('admin/css/icheck/flat/green.css')}}" rel="stylesheet">


    <script src="{{url('admin/js/jquery.min.js')}}"></script>

</head>

<body style="background:#F7F7F7;">

    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                    <form method="post" action="{{ route('entrar') }}">
                         @csrf
                        <h1>Bem vindo</h1>
                        <div>
                            <input type="email" class="form-control" placeholder="Username" required="" name="email" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required="" name="password" />
                        </div>
                        <div>
                            <button class="btn btn-default" type="submit">Entrar</button>
                            <a class="reset_pass" href="#">Esqueceu sua Password</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">Novo no site?
                                <a href="#toregister" class="to_register"> Criar Uma Nova Conta </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />

                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
            <div id="register" class="animate form">
                <section class="login_content">
                    <form method="post" action="{{route('adduser')}}">
                         @csrf
                        <h1>Criar conta</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Apelido" required="" name="name" />
                        </div>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" required="" name="email" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Palavra passe" required="" name="password" />
                        </div>
                        <div>
                            <button class="btn btn-default" type="submit">Registrar</button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">Already a member ?
                                <a href="#tologin" class="to_register"> Log in </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
        </div>
    </div>

</body>

</html>
