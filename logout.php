<?php 

	session_start();

	session_destroy();

	header('Location: http://localhost/aula_banco/login.php');

?>