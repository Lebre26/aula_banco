<?php
	
	//Verifica a existência de uma sessão, caso haja, redireciona para o dashboard
 	
    session_start();
 	error_reporting(0);
 	
 	$var = $_SESSION['nome'];
 	$var2 = $_SESSION['id'];

 	if($var == null && $var2 == null){

 		header('Location: http://localhost/aula_banco/login.php');
       	exit;
 	}
    
 	//Fim da verificação

?>