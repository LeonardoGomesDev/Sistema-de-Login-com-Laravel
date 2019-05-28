<!DOCTYPE html>
<html lang="en">
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

        <!-- JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </head>
    <style>
      body {
            background-image: url('../img/computadorengenhariaunicv.jpg');
            background-attachment: fixed;
            background-size: cover;   
        }

       #fundo{
           background-color: #fff;
       }
    </style>
    <body>
              
        </nav> 
        @if (session('message'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" 
               data-dismiss="alert"
               aria-label="close">&times;</a>
            {{ session('message') }}
        </div>
        @endif
        <div id="line-one">   
            <div class="container" id="fundo" >
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Painel</a></li>                  
                            <li class="active">Alunos</li>
                        </ol>
                        <br>
                        <a href="{{route('aluno.create')}}" 
                           class="btn btn-default btn-sm pull-right">
                            <span class="glyphicon glyphicon-plus"></span> Adicionar</a>
                    </div>           
                </div>
                <div class="row">
                    <div class="col-md-12">   
                        <br />
                        <h4 id="center"><b>Alunos Cadastrados ({{$total}})</b></h4>
                        <br>
                        <div class="table-responsive">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nome</th>
                                        <th>Curso</th>
                                        <th>Matrícula</th>
                                        <th>Semestre</th>                
                                        <th>Status</th> 
                                        <th>Editar/Deletar</th>              
                    
                                    </tr>
                                    @foreach($alunos as $aluno)
                                    <tr>
                                        <td id="center">{{$aluno->id}}</td>
                                        <td title="nome">{{$aluno->nome}}</td>
                                        <td title="curso">{{$aluno->curso}}</td>
                                        <td title="matricula" >{{$aluno->matricula}}</td>
                                        <td title="semestre"> {{($aluno->semestre)}}</td>
                                        <td title="Status"> {{($aluno->status)}}</td>
                                           
                                        <td >
                                            <a href="{{route('aluno.edit', $aluno->id)}}" 
                                               data-toggle="tooltip" 
                                               data-placement="top"
                                               title="Alterar"><i class="fa fa-pencil"></i></a>
                                            &nbsp;<form style="display: inline-block;" method="POST" 
                                                        action="{{route('aluno.destroy', $aluno->id)}}"                                                        
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Excluir" 
                                                        onsubmit="return confirm('Confirma exclusão?')">
                                                {{method_field('DELETE')}}{{ csrf_field() }}                                                
                                                <button type="submit" style="background-color: #000">
                                                    <a><i class="fa fa-trash-o"></i></a>                                                    
                                                </button></form></td>               
                                    </tr>
                                    @endforeach
                                    </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </body>
            </html>

