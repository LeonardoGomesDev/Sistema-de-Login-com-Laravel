<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Comercial Laravel</title>

        <!-- Favicon -->
        <link href="{{URL::asset('img/favicon.ico')}}" rel="shortcut icon">

        <!-- Fonts -->        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" />       

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{URL::asset('js/ajax.js')}}"></script>        
    </head>
    <style>
    #center{
        text-align: center;
    }
    body {
            background-image: url('../img/computadorengenhariaunicv.jpg');
            background-attachment: fixed;
            background-size: cover;   
    }

    #fundo{
        background-color:#fff;
    }
    </style>
    <body>
     
        <div id="line-one">
            <div class="container" id="fundo">
                <div class="row">
                    <div class="col-md-12" id="center">              
                        <h1>Alunos</h1>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="">Painel</a></li>                  
                            <li><a href="{{route('aluno.index')}}">Alunos</a></li>                  
                            <li class="active">Cadastro</li>
                        </ol>              
                    </div>          
                </div>
                <div class="row">  
                    <br>
                    <h4 id="center"><b>CADASTRO DOS ALUNOS</b></h4>
                    <br> 
                     
                    <div class="card"  style="width: 50rem; margin-left: 360px;;">
                    <div class="card-body">
                    <form method="post"
                          action="{{route('aluno.store')}}" 
                          enctype="multipart/form-data">
                        {{ csrf_field() }}
                                    
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" 
                                       class="form-control" 
                                       required>
                            </div>
                        
                        
                            <div class="form-group">
                                <label for="curso"> Curso </label>
                                <input type="text" name="curso"
                                       class="form-control">     
                            </div>
                        
                            <div class="form-group">
                                <label for="matricula">Matricula</label>
                                <input type="number" name="matricula" 
                                       class="form-control" 
                                       >
                            </div>
                       
                       
                            <div class="form-group">
                                <label for="semestre">Semestre</label>
                                <input type="number" name="semestre" 
                                       class="form-control" 
                                       required>
                            </div>    
                                        
                        
                            <div class="form-group">
                                <label for="status"> Status </label>
                                <input type="text" name="status"                               
                                       class="form-control">
                            </div>
                                              
                        <div class="col-md-12">                   
                            <button type="reset" class="btn btn-default">
                                Limpar
                            </button>
                            <button type="submit" 
                                    class="btn btn-primary" id="black">
                                Cadastrar
                            </button><p>
                        </div>
                    </form>  
                    </div>
                    </div>          
                </div>
            </div>
        </div>
    </body>
</html>
