<?php
include_once('scripts/dashboard-control-session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Morada Imóveis - Listagem de Imóveis</title>
  <meta name="description" content="Hi5Dash - HTML5 Admin Template By Jewel Theme">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" href="apple-touch-icon.png">

  <!-- Import Template Icons CSS Files -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/simple-line-icons.css">
  <link rel="stylesheet" href="assets/css/linea-basic.css">
  <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css">

  <!-- Import Custom Country Select CSS Files -->
  <link rel="stylesheet" href="assets/css/countrySelect.min.css">

  <!-- Import Perfect ScrollBar CSS Files -->
  <link rel="stylesheet" href="assets/css/perfect-scrollbar.css">  

  <!-- Import Bootstrap CSS File -->

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- Import Owl Carousel CSS File -->

  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">  

  <!-- Import Template's CSS Files -->
  <link rel="stylesheet" href="assets/css/presets.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/index-01.css">
  <link rel="stylesheet" href="assets/css/responsive.css">


</head>


<body class="index-01">


  <header class="top-header media">
    <div class="top-left mr-3">
      <a class="navbar-brand" href="./index.html"><img src="images/logo.png" alt="Site Logo"></a><!-- /.navbar-brand -->
    </div><!-- /.top-left -->

    <div class="top-right media-body">
      <div class="left-content float-left">
        <a href="#" class="sidenav-toggle mr-2" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <i class="fa fa-bars"></i>
        </a><!-- /.sidenav-toggle -->

        <form class="search-form" action="#">
          <input type="text" class="form-control" id="search1" placeholder="Search ...">
          <input type="submit" class="form-control" id="submit1">
        </form><!-- /.search-form -->
      </div><!-- /.left-content -->

      <div class="right-content float-right">
        <div class="country dropdown">
          <div id="country_selector"></div>
        </div><!-- /.country -->

        <div class="dropdown messages-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            <i class="fa fa-envelope-o"></i>
            <span class="count">5</span>
          </a>

          <ul class="dropdown-menu">
            <li class="header">You have 5 messages</li>
            <li>
              <div class="slimScrollDiv">
                <ul class="dropdown-content">
                  <li>
                    <a href="#" class="media">
                      <img src="images/avatar/1.jpg" class="rounded-circle mr-3" alt="User Image">
                      <div class="message-contnet media-body">
                        <h4 class="name">Jacob Stewart</h4>
                        <span class="time"><i class="fa fa-clock-o"></i> 15 mins</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#" class="media">
                      <img src="images/avatar/2.jpg" class="rounded-circle mr-3" alt="User Image">
                      <div class="message-contnet media-body">
                        <h4 class="name">Lawrence Wright</h4>
                        <span class="time"><i class="fa fa-clock-o"></i> 4 hours</span>
                        <p>Curabitur facilisis erat quis metus congue viverra.</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="media">
                      <img src="images/avatar/3.jpg" class="rounded-circle mr-3" alt="User Image">
                      <div class="message-contnet media-body">
                        <h4 class="name">Alan Perez</h4>
                        <span class="time"><i class="fa fa-clock-o"></i> Today</span>
                        <p>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="media">
                      <img src="images/avatar/4.jpg" class="rounded-circle mr-3" alt="User Image">
                      <div class="message-contnet media-body">
                        <h4 class="name">Jason Johnson</h4>
                        <span class="time"><i class="fa fa-clock-o"></i> Yesterday</span>
                        <p>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="media">
                      <img src="images/avatar/5.jpg" class="rounded-circle mr-3" alt="User Image">
                      <div class="message-contnet media-body">
                        <h4 class="name">David Morrison</h4>
                        <span class="time"><i class="fa fa-clock-o"></i> 2 days</span>
                        <p>Praesent vitae tellus eget nibh lacinia pretium.</p>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="footer"><a href="#">See all Messages</a></li>
          </ul><!-- /.dropdown-menu -->
        </div><!-- /.dropdown -->

        <div class="dropdown notifications-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            <span class="count">4</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have 4 notifications</li>
            <li>
              <ul class="dropdown-content">
                <li>
                  <a href="#">
                    <i class="fa fa-users alert-primary"></i> Curabitur id eros quis nunc suscipit blandit.
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-warning alert-secondary"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-shopping-cart alert-success"></i> In gravida mauris et nisi
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-user alert-danger"></i> Praesent eu lacus in libero dictum fermentum.
                  </a>
                </li>
              </ul>
            </li>
            <li class="footer"><a href="#">View all</a></li>
          </ul><!-- /.dropdown-menu -->
        </div><!-- /.dropdown -->

        <div class="dropdown user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="images/avatar/1.jpg" class="rounded-circle float-left mr-2" alt="User Image">
            <span class="status"></span>
            <h4 class="name">Jonathon Doe</h4>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class="fa fa-user"></i> My Profile</a></li>
            <li><a href="#"><i class="fa fa-envelope"></i> Inbox</a></li>
            <li><a href="#"><i class="fa fa-gears"></i> Account Setting</a></li>
            <li><a href="scripts/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
          </ul>
        </div>

      </div><!-- /.right-content -->
    </div><!-- /.top-right -->
  </header><!-- /.top-header -->


  <div class="content-wrapper container-fluid">
    <aside class="left-panel">
      <div class="user-card background-bg" data-image-src="images/bg5.jpg">
        <a href="#">
          <div class="avatar mr-3 float-left"><img class="rounded-circle" src="images/avatar/4.jpg" alt="Avatar"></div><!-- /.avatar -->
          <div class="details">
            <h4 class="name">Bobby Payne</h4><!-- /.name -->
            <span class="designation">Designer</span><!-- /.designation -->
          </div><!-- /.details -->
        </a>
      </div>
      <nav class="navbar">
        <ul class="navbar-nav">

          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-dashboard"></i> <span class="menu-title">Dashboard</span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="index.html">Dashboard 01</a>
              <a class="dropdown-item" href="index-02.html">Dashboard 02</a>
            </div>
          </li>

          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-dashboard"></i> <span class="menu-title">Dashboard 2</span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="index.html">Dashboard 01</a>
              <a class="dropdown-item" href="index-02.html">Dashboard 02</a>
            </div>
          </li>

        </ul>
      </nav>
    </aside><!-- /.left-panel -->

    <div class="dashboard-contents">
     <div class="contents-inner">
     <h2>Listagem de Imóveis</h2>

    <div class="row">
    <div class="col-12">
            <div class="section-content">
              <div class="content-head">
                <h4 class="content-title">Lista de Imóveis</h4><!-- /.content-title --><br />
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Dormitórios</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Atualizar</th>
                        <th scope="col">Excluir</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                            //Faz a conexão com o banco de dados

                            require 'banco.php';
                            $pdo = Banco::conectar();
                            //Fim da conexão

                            $sqlImovel = " SELECT * FROM `imoveis` ";

                            //Laço de repetição
                            foreach($pdo->query($sqlImovel) as $linhaImovel){
                            
            
                        ?>
                            <tr>
                                    <th scope="row"><?php echo  $linhaImovel['id']; ?></th>
                                    <td> <?php echo  $linhaImovel['nome']; ?></td>
                                    <td><?php echo  $linhaImovel['endereco']; ?></td>
                                    <td><?php echo  ucfirst($linhaImovel['tipo']); ?></td>
                                    <td><?php echo  $linhaImovel['dormitorio']; ?></td>
                                    <td>R$<?php echo  $linhaImovel['preco']; ?>,00</td>
                                    
                                    <td><a href="atualizar-imovel.php?id=<?php echo $linhaImovel['id']; ?>"><i class="fa fa-pencil"></i></a></td>
                                    <td><a href="excluir-imovel.php"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                        
                        <?php } 
                        $pdo = Banco::desconectar();
                        ?>
                        
                    </tbody>
                    </table>
              </div><!-- /.content-head -->
             
            </div>
          </div>
    </div>
    <div class="row">
    
    </div>
     </div><!-- /.contents-inner -->

      <footer class="site-footer">
        <div class="copyright">
          <div class="float-left">
            Copyright © 2018 <a href="https://demos.jeweltheme.com/hi5dash" target="_blank">hi5dash</a>
          </div>

          <div class="float-right">
            Developed with Love by <a href="https://jeweltheme.com" rel="nofollow">Jewel Theme</a>
          </div>
        </div><!-- /.copyright -->
      </footer><!-- /.site-footer -->
    </div><!-- /.dashboard-contents -->
  </div><!-- /.content-wrapper -->



  <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="assets/js/plugins.js"></script>

  <!--Morris Chart-->
  <script src="assets/js/charts/morris/raphael-min.js"></script>
  <script src="assets/js/charts/morris/morris.js"></script>

  <!--Chartist Chart-->
  <script src="assets/js/charts/chartist/chartist.min.js"></script>
  <script src="assets/js/charts/chartist/chartist-plugin-legend.js"></script>

  <!--Sparkline Chart-->
  <script src="assets/js/charts/sparkline/jquery.sparkline.min.js"></script>

  <!--Flot Chart-->
  <script src="assets/js/charts/flot/jquery.flot.js"></script>
  <script src="assets/js/charts/flot/jquery.flot.pie.js"></script>
  <script src="assets/js/charts/flot/jquery.flot.resize.js"></script>
  <script src="assets/js/charts/flot/jquery.flot.spline.js"></script>
  <script src="assets/js/widgets/charts.init.js"></script>

  <!--For Weather-->
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/widgets/weather.js"></script>

  <!--For Calendar-->
  <script src="assets/js/calendar/moment.js"></script>
  <script src="assets/js/calendar/fullcalendar.min.js"></script>

  <script src="assets/js/index/index-01.js"></script>
  <script src="assets/js/main.js"></script>

  <script>
    $(function() {
      "use strict";

      $('#calendar').fullCalendar();

    });
  </script>

</body>
</html>
