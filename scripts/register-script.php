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