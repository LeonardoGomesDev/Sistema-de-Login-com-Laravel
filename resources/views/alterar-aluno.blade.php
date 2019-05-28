<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Leonardo Gomes</title>

        <!-- Fonts -->        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">      

        <!-- JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
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
    </style>
    <body>    
        <div id="line-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="center">              
                        <h1><b>Aluno</b></h1>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="">Painel</a></li>                  
                            <li><a href="{{route('aluno.index')}}">Alunos</a></li>                  
                            <li class="active">Alteração</li>
                        </ol>              
                    </div>          
                </div>
                <div class="row">  
                    <br>
                    <h4 id="center"><b>ALTERAÇÃO NO ALUNO</b></h4>
                    <br> 
                       
                    <div class="card" style="width: 50rem; margin-left: 360px;">
                        
                        <div class="card-body">
                        <form method="post" 
                          action="{{route('aluno.update', $alunos->id)}}" 
                          enctype="multipart/form-data">
                        {!! method_field('put') !!}
                        {{ csrf_field() }}
                                   
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" 
                                       class="form-control" 
                                       value="{{$alunos->nome}}"
                                       required>
                            </div>
                   
                        
                            <div class="form-group">
                                <label for="curso">Curso</label>
                                <input type="text" class="form-control" name="curso" value="{{$alunos->curso}}">
                            </div>   
                     
                      
                            <div class="form-group">
                                <label for="matricula">Matrícula</label>
                                <input type="number" name="matricula" 
                                       class="form-control" 
                                       value="{{$alunos->matricula}}"
                                       required>
                            </div>
                       
                        
                            <div class="form-group">
                                <label for="semestre">Semestre</label>
                                <input type="number" name="semestre" 
                                       class="form-control" 
                                       value="{{$alunos->semestre}}"
                                       required>
                            </div>    
                                        
                       
                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="text" name="status"                               
                                       class="form-control"
                                       value="{{$alunos->status}}"
                                       required>
                            
                        </div>                       
                        <div class="col-md-12">                   
                            <button type="reset" class="btn btn-default">
                                Limpar
                            </button>
                            <button type="submit" 
                                    class="btn btn-primary" id="black">
                                Alterar
                            </button>
                        </div>
                    </form>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
    </body>
</html>
