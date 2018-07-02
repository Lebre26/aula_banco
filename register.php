<?php
include_once('scripts/register-script.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Hi5Dash - HTML5 Admin Template By Jewel Theme</title>
  <meta name="description" content="Hi5Dash - HTML5 Admin Template By Jewel Theme">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" href="apple-touch-icon.png">

  <!-- Import Template Icons CSS Files -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/simple-line-icons.css">
  <link rel="stylesheet" href="assets/css/linea-basic.css">

  <!-- Import Custom Country Select CSS Files -->
  <link rel="stylesheet" href="assets/css/countrySelect.min.css">

  <!-- Import Perfect ScrollBar CSS Files -->
  <link rel="stylesheet" href="assets/css/perfect-scrollbar.css">   

  <!-- Import Bootstrap CSS File -->

  <link rel="stylesheet" href="assets/css/bootstrap.min.css"> 

  <!-- Import Template's CSS Files -->
  <link rel="stylesheet" href="assets/css/presets.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/pages/pages.css">
  <link rel="stylesheet" href="assets/css/responsive.css">


</head>


<body>


  <div class="admin-register d-flex align-content-center flex-wrap">
    <div class="container">
      <div class="register-content bg-light">
        <div class="register-logo pt-4 pb-3 background-bg" data-image-src="images/we.jpg">
          <a href="index.html">
            <img class="align-content" src="images/" alt="">
          </a>
          <p class="mt-2 mb-0 color-white">.</p>
        </div>
        <div class="register-form">
          <form method="POST" action="register.php">
            <div class="form-group">
              <lSource Sans Pro>Nome</lSource Sans Pro>
              <input type="nome" class="form-control" name="nome" placeholder="Digite seu Nome">
            </div>
            <div class="form-group">
              <lSource Sans Pro>E-mail</lSource Sans Pro>
              <input type="email" class="form-control" name="email" placeholder="Digite seu E-mail">
            </div>
            <div class="form-group">
              <lSource Sans Pro>Senha</lSource Sans Pro>
              <input type="password" class="form-control" name="senha" placeholder="Informe uma senha">
            </div>
            <div class="checkbox">
              <lSource Sans Pro>
                <input type="checkbox"> Concordo com os termos e política
              </lSource Sans Pro>
            </div>
            <button type="submit" class="btn btn-primary btn-flat mb-3 mt-3">CADASTRAR</button>

            <div class="register-link mt-1 text-center">
              <p>Já tem conta ? <a href="#"> Cadastra-se</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>


</body>
</html>