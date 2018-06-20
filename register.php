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

        header('Location: http://localhost/aula_banco');
       	exit;
 	}
 	
 	 if(!empty($_POST)){

        
        
		//Capturar os dados fornecidos nos inputs
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = hash('sha256',$_POST['senha']);
		
            
            //Compara os dados capturados nos imputs com o banco e se estiverem corretos encaminha o usuário para a página de login e desconecta o banco 
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO usuarios (nome, email, senha) VALUES(?,?,?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($nome,$email,$senha));
            Banco::desconectar();
            header("Location: login.php");
        }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UNIF</title>

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
                    <a class="navbar-brand" href="http://localhost:8000">
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
                                                    <li><a href="#">Login</a></li>
                            <li><a href="#">Cadastrar</a></li>
                                            </ul>
                </div>
            </div>
        </nav>

        <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastrar</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="register.php">
                       
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control" name="nome" value="" required autofocus>

                                                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required>

                                                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="senha" type="password" class="form-control" name="senha" required>

                                                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Senha</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Cadastrar
                                </button>
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
