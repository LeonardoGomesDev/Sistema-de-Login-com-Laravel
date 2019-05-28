<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Leonardo Gomes</title>

        <!-- Favicon -->
        <link href="{{URL::asset('img/favicon.ico')}}" rel="shortcut icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="{{URL::asset('estilo.css')}}" rel="stylesheet" type="text/css" /> 

        <!-- JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <style>
    html, body {
    background-color: #fff;
    color: #636b6f;
    font-family: 'Raleway', sans-serif;
    font-weight: 100;
    height: 100vh;
    margin: 0;
}

#fundo {
    background-image: url('../img/computadorengenhariaunicv.jpg');
    background-attachment: fixed;
    background-size: cover;   
}

.full-height {
    height: 100vh;
}

.flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}

.position-ref {
    position: relative;
}

.top-right {
    position: absolute;
    right: 10px;
    top: 18px;
}

.content {
    text-align: center;
}
.fa-bank {
    font-size: 42px;
    margin-bottom: 10px;
}
.title {
    color: #fff;
    font-size: 64px;
    line-height: 1;
}

a{
    color: #000;
    background-color: #fff;
    font-size: 20px;
    font-weight: 900;
    text-decoration: none;
    text-transform: uppercase;
}
a:hover{
    text-decoration:none;
}

.m-b-md {
    margin-bottom: 30px;
}

    </style>
    <body>
        <div class="flex-center position-ref full-height" id="fundo">
            @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
                @endif
            </div>
            @endif
            <div class="content">
                <i class="fa fa-bank"></i>
                <div class="title m-b-md">
                    SEJA BEM VINDO!
                </div>
                <div class="links">
                    <a href="{{route('aluno.index')}}">
                    <button><a href="{{route('aluno.index')}}" >Começe Agora</button>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>

