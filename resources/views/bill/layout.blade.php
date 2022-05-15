<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('bill/styles/responsive/appResponsive.css')}}">
    <link rel="stylesheet" href="{{url('bill/styles/app.css')}}">
    <link rel="stylesheet" href="{{url('bill/styles/game.css')}}">
    <link href="{{ url('admin/css/bootstrap.min.css')}}" rel="stylesheet">

    <title>Perguntas da Banda</title>
</head>
<body>
    <div class="container">
        <div id="home" class="flex-center flex-column">
         @yield('corpo')

     </div>
 </div>
</body>
</html>