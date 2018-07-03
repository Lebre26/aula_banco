<?php
include_once('scripts/dashboard-control-session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Morada Imóveis - Cadastro de Imóveis</title>
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
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="icon icon-basic-webpage-multiple"></i> <span class="menu-title">Layout</span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="layout/boxed.html">Boxed</a>
              <a class="dropdown-item" href="layout/fixed.html">Fixed</a>
              <a class="dropdown-item" href="layout/sidebar.html">Sidebar Collapsed</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-envelope"></i> <span class="menu-title">Mailbox</span>
              <span class="badge notifications">4</span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="mail/inbox.html">Inbox</a>
              <a class="dropdown-item" href="mail/compose.html">Compose</a>
              <a class="dropdown-item" href="mail/read.html">Read</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="calendar.html">
              <i class="fa fa-calendar-o"></i> <span class="menu-title">Calendar</span>
            </a>
          </li>
          <li class="nav-item header"><span class="menu-title">Elements</span></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-sliders"></i> <span class="menu-title">UI Elements</span>
              <span class="badge hot">hot</span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="ui/alerts.html">Alerts</a>
              <a class="dropdown-item" href="ui/badges.html">Badges</a>
              <a class="dropdown-item" href="ui/buttons.html">Buttons</a>
              <a class="dropdown-item" href="ui/cards.html">User Card</a>
              <a class="dropdown-item" href="ui/dropdown.html">Dropdown</a>
              <a class="dropdown-item" href="ui/list.html">List</a>
              <a class="dropdown-item" href="ui/modals.html">Modals</a>
              <a class="dropdown-item" href="ui/progress-bars.html">Pregress Bars</a>
              <a class="dropdown-item" href="ui/ribbons.html">Ribbons</a>
              <a class="dropdown-item" href="ui/sliders.html">Sliders</a>
              <a class="dropdown-item" href="ui/tab.html">Tabs</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-laptop"></i> <span class="menu-title">Widgets</span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="widgets/chart.html">Chart</a>
              <a class="dropdown-item" href="widgets/social.html">Social</a>
              <a class="dropdown-item" href="widgets/statistic.html">Statistic</a>
              <a class="dropdown-item" href="widgets/weather.html">Weather</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-pie-chart"></i> <span class="menu-title">Charts</span>
              <span class="badge danger">11</span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="charts/chartjs.html">ChartJs</a>
              <a class="dropdown-item" href="charts/morris.html">Morris</a>
              <a class="dropdown-item" href="charts/flot-chart.html">Float</a>
              <a class="dropdown-item" href="charts/google-charts.html">Google charts</a>
              <a class="dropdown-item" href="charts/sparkline.html">Sparkline js</a>
              <a class="dropdown-item" href="charts/c3.html">C3 charts</a>
              <a class="dropdown-item" href="charts/chartist.html">Chartists</a>
              <a class="dropdown-item" href="charts/rickshaw.html">Rickshaw</a>
              <a class="dropdown-item" href="charts/justGage.html">JustGage</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-table"></i> <span class="menu-title">Tables</span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="tables/simple.html">Simple tables</a>
              <a class="dropdown-item" href="tables/data.html">Data tables</a>
              <a class="dropdown-item" href="tables/editable-tables.html">Editable Tables</a>
              <a class="dropdown-item" href="tables/table-color.html">Table Color</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-wpforms"></i> <span class="menu-title">Forms</span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="forms/basic.html">Basic Elements</a>
              <a class="dropdown-item" href="forms/advanced.html">Advanced Elements</a>
              <a class="dropdown-item" href="forms/wizard.html">Wizard Forms</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-flask"></i> <span class="menu-title">Icons</span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="icons/fontawesome.html">FontAwesome</a>
              <a class="dropdown-item" href="icons/simple.html">Simple Line Icons</a>
              <a class="dropdown-item" href="icons/linea.html">Linea Basic</a>
              <a class="dropdown-item" href="icons/stroke.html">Pe 7 stroke</a>
              <a class="dropdown-item" href="icons/weather.html">Icon Weather</a>
            </div>
          </li>

          <li class="nav-item header"><span class="menu-title">Extras</span></li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-clone"></i> <span class="menu-title">Pages</span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="pages/blog.html">Blog</a>
              <a class="dropdown-item" href="pages/log-in.html">Login</a>
              <a class="dropdown-item" href="pages/register.html">Register</a>
              <a class="dropdown-item" href="pages/404.html">Error 404</a>
              <a class="dropdown-item" href="pages/500.html">Error 500</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-credit-card"></i> <span class="menu-title">E-Commerce</span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="e-commerce/pricing.html">Pricing</a>
              <a class="dropdown-item" href="e-commerce/order.html">Order</a>
              <a class="dropdown-item" href="e-commerce/invoice.html">Invoice</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="change-log.html">
              <i class="fa fa-stop-circle"></i> <span class="menu-title">Changelogs</span>
            </a>
          </li>
        </ul>
      </nav>
    </aside><!-- /.left-panel -->

    <div class="dashboard-contents">
     <div class="contents-inner">
     <h2>Cadastro de Imóveis</h2>

    <div class="row">
    <div class="col-12">
            <div class="section-content">
              <div class="content-head">
                <h4 class="content-title">Informações do Imóvel</h4><!-- /.content-title -->
                <div class="corner-content float-right">
                  <button class="content-settings" data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings"><i class="fa fa-cog"></i></button>
                  <button class="content-refresh" data-toggle="tooltip" data-placement="top" title="" data-original-title="Reload"><i class="fa fa-refresh"></i></button>
                  <button class="content-collapse" data-toggle="tooltip" data-placement="top" title="" data-original-title="Collapse"><i class="fa fa-angle-down"></i></button>
                  <button class="content-close" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close"><i class="fa fa-close"></i></button>
                </div><!-- /.corner-content -->
              </div><!-- /.content-head -->
             
             
              <form method="post" action="scripts/inserir-imovel-script.php" enctype="multipart/form-data">
                <div class="content-details show">
                  <div class="row">
                    
                    <div class="col-sm-6">
                          <div class="form-group">
                            <label for="company" class=" form-control-label">Nome</label>
                            <input type="text" id="nome" name="nome" class="form-control">
                          </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                              <label for="company" class=" form-control-label">Endereço</label>
                              <input type="text" id="endereco" name="endereco" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Tipo</label>
                        <select name="tipo" class="form-control select2">
                          <option value="casa" selected="selected">Casa</option>
                          <option value="apartamento">Apartamento</option>
                          <option value="ponto_c">Ponto Comercial</option>
                          <option value="terreno">Terreno</option>
                          <option value="sitio">Sítio</option>
                          <option value="chacara">Chácara</option>
                          
                        </select>
                      </div><!-- /.form-group -->
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                              <label for="company" class=" form-control-label">Área</label>
                              <input type="text" id="area" name="area" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                              <label for="company" class=" form-control-label">Preço</label>
                              <input type="text" id="preco" name="preco" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Dormitório</label>
                        <select name="dormitorio" class="form-control select2">
                          <option value="0" selected="selected">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          
                        </select>
                      </div><!-- /.form-group -->
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Sala</label>
                        <select name="sala" class="form-control select2">
                          <option value="0" selected="selected">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                        </select>
                      </div><!-- /.form-group -->
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Cozinha</label>
                        <select name="cozinha" class="form-control select2">
                          <option value="0" selected="selected">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                        </select>
                      </div><!-- /.form-group -->
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Banheiro</label>
                        <select name="banheiro" class="form-control select2">
                          <option value="socail" selected="selected">Social</option>
                          <option value="lavabo">Lavabo</option>
                        </select>
                      </div><!-- /.form-group -->
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Lavanderia</label>
                        <select name="lavanderia" class="form-control select2">
                          <option value="0" selected="selected">0</option>
                          <option value="1">1</option>
                        </select>
                      </div><!-- /.form-group -->
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Garagem</label>
                        <select name="garagem" class="form-control select2">
                          <option value="0" selected="selected">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                        </select>
                      </div><!-- /.form-group -->
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Quiantal</label>
                        <select name="quintal" class="form-control select2">
                          <option value="0" selected="selected">0</option>
                          <option value="1">1</option>
                        </select>
                      </div><!-- /.form-group -->
                    </div>
                    <div class="col-sm-8">
                      <div class="form-group">
                        <label>Observações</label>
                        <textarea name="observacao" id="observacao" rows="4" class="form-control"></textarea>
                      </div><!-- /.form-group -->
                    </div>

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                      </button>
                      
                    </div>
                  
                  </div>
                </div><!-- /.content-details -->
              </form>
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
