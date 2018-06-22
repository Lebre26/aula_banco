<?php
	
	//Faz a conexão com o banco de dados
    require 'banco.php';
 	$pdo = Banco::conectar();
 	//Fim da conexão

 	//Verifica a existência de uma sessão, caso haja, redireciona para o dashboard
 	
    session_start();
 	error_reporting(0);
 	$var = $_SESSION['nome'];
 	$var2 = $_SESSION['id'];

 	if($var != null && $var2 != null){

 		header('Location: http://localhost/aula_banco/');
       	exit;
 	}

 	//Fim da verificação

 	//Inicia o post do formulário de login
    if(!empty($_POST))
    {

    	//Captura os dados fornecidos ao post
    	$email = $_POST['email'];
    	$senha = hash('sha256', $_POST['senha']);
    	//Fim da captura

    	//Cria uma query para consultar o banco de dados com os dados fornecidos recuperados nas variáveis
       	$select = $pdo->query(" SELECT * FROM `usuarios` WHERE `email` LIKE '$email' AND `senha` LIKE '$senha' ");
       	
       	//Captura o resultado da query
       	$result = $select->fetch(PDO::FETCH_OBJ);
       	//Fim da query e fim da captura
	
       	//Testa se a query teve um resultado diferente de nulo
       if(!empty($result)){

       		//Caso o resultado for diferente de nulo, inicia uma sessão e redireciona para o dashboard
			
            session_start();
       		$_SESSION['nome'] = $result->nome;
       		$_SESSION['id'] = $result->id;
       		
            header('Location: http://localhost/aula_banco/');
       		
            exit;
			
       }else{

       		//Caso o resultado for igual a nulo, retorna um erro
       		echo '<html lang="en">
					<head>
					    <meta charset="utf-8">
					    <meta http-equiv="X-UA-Compatible" content="IE=edge">
					    <meta name="viewport" content="width=device-width, initial-scale=1">

					    <title>UNIF</title>
					    <style type="text/css">
					    	.error{color:#a94442 !important;}
					    </style>

					    <!-- Styles -->
					    <link href="css/app.css" rel="stylesheet">
					</head>';
       		echo '<div class="container">
       				<div class="row">
       					<div class="col-md-8 col-md-offset-2">
		       				<div class="alert alert-danger alert-dismissable">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								  <strong>Erro! </strong>E-mail ou senha fornecidos são incorretos ou inexistentes.
								</div>
		       				</div>
		       			</div>
       			 </div>';

       			 exit;

       }

       //Fim do teste do resultado da query


    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UNIF</title>
    <style type="text/css">
    	.error{color:#a94442 !important;}
    </style>

    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="/">
                        UNIF
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                                                    <li><a href="/">Login</a></li>
                            <li><a href="/">Cadastro</a></li>
                                            </ul>
                </div>
            </div>
        </nav>

        <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="login.php">
                     

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>

                                                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="senha" type="password" class="form-control" name="senha" required>

                                                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" > Lembrar-me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="#">
                                    Esqueceu sua senha?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>

    <!-- Scripts -->
    <script src="js/app.js"></script>
</body>
</html>

