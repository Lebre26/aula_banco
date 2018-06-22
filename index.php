<?php
include_once('scripts/dashboard-control-session.php');
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
        <div class="row">

          <div class="col-12">
            <div class="section-content">
              <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="statistic-box m-0">
                    <h4 class="statistic-title float-left">New clients</h4><!-- /.statistic-title -->
                    <div class="action-menu dropdown float-right">
                      <button class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Remove</a>
                        <a class="dropdown-item" href="#">Modify</a>
                      </div>
                    </div><!-- /.action-menu -->
                    <div class="statistic-details">
                      <span class="count float-left">1345</span><!-- /.count -->
                      <span class="statistic-icon color-success float-right"><i class="pe-7s-users"></i></span><!-- /.statistic-icon -->
                    </div><!-- /.statistic-details -->
                  </div><!-- /.statistic-box -->
                </div>

                <div class="col-lg-3 col-md-6">
                  <div class="statistic-box m-0">
                    <h4 class="statistic-title float-left">Order received</h4><!-- /.statistic-title -->
                    <div class="action-menu dropdown float-right">
                      <button class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Remove</a>
                        <a class="dropdown-item" href="#">Modify</a>
                      </div>
                    </div><!-- /.action-menu -->
                    <div class="statistic-details">
                      <span class="count float-left">1300</span><!-- /.count -->
                      <span class="statistic-icon color-primary float-right"><i class="pe-7s-ticket"></i></span><!-- /.statistic-icon -->
                    </div><!-- /.statistic-details -->
                  </div><!-- /.statistic-box -->
                </div>

                <div class="col-lg-3 col-md-6">
                  <div class="statistic-box m-0">
                    <h4 class="statistic-title float-left">Copy sold</h4><!-- /.statistic-title -->
                    <div class="action-menu dropdown float-right">
                      <button class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Remove</a>
                        <a class="dropdown-item" href="#">Modify</a>
                      </div>
                    </div><!-- /.action-menu -->
                    <div class="statistic-details">
                      <span class="count float-left">1225</span><!-- /.count -->
                      <span class="statistic-icon color-purple float-right"><i class="pe-7s-albums"></i></span><!-- /.statistic-icon -->
                    </div><!-- /.statistic-details -->
                  </div><!-- /.statistic-box -->
                </div>

                <div class="col-lg-3 col-md-6">
                  <div class="statistic-box m-0">
                    <h4 class="statistic-title float-left">New Invoices</h4><!-- /.statistic-title -->
                    <div class="action-menu dropdown float-right">
                      <button class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Remove</a>
                        <a class="dropdown-item" href="#">Modify</a>
                      </div>
                    </div><!-- /.action-menu -->
                    <div class="statistic-details">
                      <span class="count float-left">1095</span><!-- /.count -->
                      <span class="statistic-icon color-danger float-right"><i class="pe-7s-credit"></i></span><!-- /.statistic-icon -->
                    </div><!-- /.statistic-details -->
                  </div><!-- /.statistic-box -->
                </div>

              </div>
            </div><!-- /.section-content -->
          </div>

          <div class="col-12">
            <div class="section-content">
              <div class="row">
                <div class="col-lg-5 equal-height">
                  <div class="left-charts">
                    <div class="row">
                      <div class="col-12 ">
                        <div class="section-contentpadding-0 mt-0 bg-primary show">
                          <div class="chart max-240">
                            <div class="chart-text">
                              <div class="left-text float-left">
                                <span class="chart-title">Month’s Sale</span>
                                <span class="text">17% higher than last week</span>
                              </div>
                              <div class="right-text float-right">
                                <span class="counter">$8,409</span>
                              </div>
                            </div><!-- /.chart-text -->

                            <div id="flotLine1" class="float-chart pb-2 max-140"></div>

                          </div><!-- /.chart -->
                        </div><!-- /.section-content -->
                      </div>

                      <div class="col-12">
                        <div class="section-content padding-0 bg-danger show">
                          <div class="chart max-240">
                            <div class="chart-text">
                              <div class="left-text float-left">
                                <span class="chart-title">Month’s Sale</span>
                                <span class="text">17% higher than last week</span>
                              </div>
                              <div class="right-text float-right">
                                <span class="counter">$8,409</span>
                              </div>
                            </div><!-- /.chart-text -->

                            <div id="sparkline5" class="sparkline-chart max-140">
                              3,4,5,7,5,9,10,6,4,5,7,5,9,10,3,4,5,7,5,9,10,6,4,5,7,5,9,3,4,5,7,5,9,10,6,4,5,7,5,9,3,4,5,7,5,9,10,6,4,5,7,5
                            </div>

                          </div><!-- /.chart -->
                        </div><!-- /.section-content -->
                      </div>
                    </div>
                  </div><!-- /.left-charts -->
                </div>

                <div class="col-lg-7 equal-height">
                  <div class="right-charts">
                    <div class="section-content m-0">
                      <div class="content-head">
                        <h4 class="content-title">Traffic views</h4><!-- /.content-title -->
                        <div class="corner-content float-right">
                          <button class="content-settings" data-toggle="tooltip" data-placement="top" title="Settings"><i class="fa fa-cog"></i></button>
                          <button class="content-refresh" data-toggle="tooltip" data-placement="top" title="Reload"><i class="fa fa-refresh"></i></button>
                          <button class="content-collapse" data-toggle="tooltip" data-placement="top" title="Collapse"><i class="fa fa-angle-down"></i></button>
                          <button class="content-close" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close"></i></button>
                        </div><!-- /.corner-content -->
                      </div><!-- /.content-head -->

                      <div class="content-details show">
                        <ul class="devices">
                          <li><span class="bg-danger"></span> Desktop</li>
                          <li><span class="bg-primary"></span>Mobile</li>
                          <li><span class="bg-purple"></span>Tab</li>
                        </ul>

                        <div id="traffic-chart" class="traffic-chart"></div>

                      </div><!-- /.content-details -->
                    </div>
                  </div><!-- /.right-charts -->
                </div>

              </div>
            </div><!-- /.section-content -->
          </div>

          <div class="col-12">
            <div class="section-content mt-0">
              <div class="weather">
                <div class="row">
                  <div class="col-lg-7 equal-height bg-white">
                    <div class="city-weather">
                      <div class="city-inner background-bg" data-image-src="images/we.jpg">
                        <div class="weather-search">
                          <form action="#" class="search-form">
                            <input type="text" placeholder="City Name">
                            <input type="submit">
                          </form>
                        </div><!-- /.weather-search -->

                        <div class="city-details text-center">
                          <h4 class="city-name">Paris</h4>
                          <span class="time">Wednesday 9:50 PM, November 22, 2018</span>
                          <i class="icon icon-weather-wind-halfmoon"></i>
                        </div><!-- /.city-details -->

                        <div class="weather-status">
                          <div class="float-left">
                            <h2>Partly cloudy</h2>
                          </div>
                          <div class="float-right">
                            <div class="temparature"><span class="count">15</span> °C</div><!-- /.temparature -->
                          </div>
                        </div><!-- /.weather-status -->
                      </div><!-- /.city-inner -->

                      <div class="hourly-forecast">
                        <div class="forecast-slider owl-carousel text-center">
                          <div class="item">
                            <span class="time">9:00 PM</span><!-- /.time -->
                            <div class="forecast-icon"><i class="icon icon-weather-rain-halfmoon"></i></div><!-- /.forecast-icon -->
                            <div class="temparature"><span class="count">15</span> °C</div><!-- /.temparature -->
                          </div><!-- /.item -->
                          <div class="item">
                            <span class="time">10:00 PM</span><!-- /.time -->
                            <div class="forecast-icon"><i class="icon icon-weather-mistyrain-halfmoon"></i></div><!-- /.forecast-icon -->
                            <div class="temparature"><span class="count">13</span> °C</div><!-- /.temparature -->
                          </div><!-- /.item -->
                          <div class="item">
                            <span class="time">11:00 PM</span><!-- /.time -->
                            <div class="forecast-icon"><i class="icon icon-weather-hail-halfmoon"></i></div><!-- /.forecast-icon -->
                            <div class="temparature"><span class="count">17</span> °C</div><!-- /.temparature -->
                          </div><!-- /.item -->
                          <div class="item">
                            <span class="time">12:00 PM</span><!-- /.time -->
                            <div class="forecast-icon"><i class="icon icon-weather-snow-halfmoon"></i></div><!-- /.forecast-icon -->
                            <div class="temparature"><span class="count">15</span> °C</div><!-- /.temparature -->
                          </div><!-- /.item -->
                          <div class="item">
                            <span class="time">1:00 AM</span><!-- /.time -->
                            <div class="forecast-icon"><i class="icon icon-weather-rain-halfmoon"></i></div><!-- /.forecast-icon -->
                            <div class="temparature"><span class="count">9</span> °C</div><!-- /.temparature -->
                          </div><!-- /.item -->
                          <div class="item">
                            <span class="time">2:00 AM</span><!-- /.time -->
                            <div class="forecast-icon"><i class="icon icon-weather-storm-halfmoon"></i></div><!-- /.forecast-icon -->
                            <div class="temparature"><span class="count">11</span> °C</div><!-- /.temparature -->
                          </div><!-- /.item -->
                        </div><!-- /.forecast-slider -->
                      </div><!-- /.hourly-forcast -->
                    </div><!-- /.city-weather -->
                  </div>

                  <div class="col-lg-5 equal-height bg-gray">
                    <div class="weekly-forecast">
                      <div class="item">
                        <div class="float-left"><span class="day-name">Sun</span></div>
                        <div class="float-left"><div class="forecast-icon text-center"><i class="icon icon-weather-storm-32"></i></div></div>
                        <div class="float-left">
                          <div class="temparature text-right">
                            <div class="current"><span class="count">15</span> °C</div><!-- /.current -->
                            -
                            <div class="previous"><span class="count">11</span> °C</div><!-- /.previous -->
                          </div><!-- /.temparature -->
                        </div>
                      </div><!-- /.item -->
                      <div class="item">
                        <div class="float-left"><span class="day-name">Mon</span></div>
                        <div class="float-left"><div class="forecast-icon text-center"><i class="icon icon-weather-cloud-lightning"></i></div></div>
                        <div class="float-left">
                          <div class="temparature text-right">
                            <div class="current"><span class="count">15</span> °C</div><!-- /.current -->
                            -
                            <div class="previous"><span class="count">11</span> °C</div><!-- /.previous -->
                          </div><!-- /.temparature -->
                        </div>
                      </div><!-- /.item -->
                      <div class="item">
                        <div class="float-left"><span class="day-name">Tue</span></div>
                        <div class="float-left"><div class="forecast-icon text-center"><i class="icon icon-weather-rain"></i></div></div>
                        <div class="float-left">
                          <div class="temparature text-right">
                            <div class="current"><span class="count">15</span> °C</div><!-- /.current -->
                            -
                            <div class="previous"><span class="count">11</span> °C</div><!-- /.previous -->
                          </div><!-- /.temparature -->
                        </div>
                      </div><!-- /.item -->
                      <div class="item">
                        <div class="float-left"><span class="day-name">Wed</span></div>
                        <div class="float-left"><div class="forecast-icon text-center"><i class="icon icon-weather-sun"></i></div></div>
                        <div class="float-left">
                          <div class="temparature text-right">
                            <div class="current"><span class="count">15</span> °C</div><!-- /.current -->
                            -
                            <div class="previous"><span class="count">11</span> °C</div><!-- /.previous -->
                          </div><!-- /.temparature -->
                        </div>
                      </div><!-- /.item -->
                      <div class="item">
                        <div class="float-left"><span class="day-name">Thu</span></div>
                        <div class="float-left"><div class="forecast-icon text-center"><i class="icon icon-weather-wind"></i></div></div>
                        <div class="float-left">
                          <div class="temparature text-right">
                            <div class="current"><span class="count">15</span> °C</div><!-- /.current -->
                            -
                            <div class="previous"><span class="count">11</span> °C</div><!-- /.previous -->
                          </div><!-- /.temparature -->
                        </div>
                      </div><!-- /.item -->
                      <div class="item">
                        <div class="float-left"><span class="day-name">Fri</span></div>
                        <div class="float-left"><div class="forecast-icon text-center"><i class="icon icon-weather-cloud-snowflake"></i></div></div>
                        <div class="float-left">
                          <div class="temparature text-right">
                            <div class="current"><span class="count">15</span> °C</div><!-- /.current -->
                            -
                            <div class="previous"><span class="count">11</span> °C</div><!-- /.previous -->
                          </div><!-- /.temparature -->
                        </div>
                      </div><!-- /.item -->
                      <div class="item">
                        <div class="float-left"><span class="day-name">Sat</span></div>
                        <div class="float-left"><div class="forecast-icon text-center"><i class="icon icon-weather-tempest"></i></div></div>
                        <div class="float-left">
                          <div class="temparature text-right">
                            <div class="current"><span class="count">15</span> °C</div><!-- /.current -->
                            -
                            <div class="previous"><span class="count">11</span> °C</div><!-- /.previous -->
                          </div><!-- /.temparature -->
                        </div>
                      </div><!-- /.item -->
                    </div><!-- /.weekly-forcast -->
                  </div>
                </div>
              </div><!-- /.weather -->
            </div><!-- /.section-content -->
          </div>

          <div class="col-12">
            <div class="row">
              <div class="col-lg-4">
                <div class="section-content pb-1 bg-white mb-0">
                  <div class="content-details">
                    <div id="calendar"></div>
                  </div><!-- /.content-details -->
                </div><!-- /.section-content -->
              </div>

              <div class="col-lg-4">
                <div class="section-content mt-o mb-0">
                  <div class="row">
                    <div class="col-6 pr-2 equal-height">
                      <div class="section-content mt-0">
                        <div class="widget-box bg-purple">
                          <a href="#">
                            <span class="widget-icon top-left"><i class="fa fa-upload"></i></span>
                            <div class="widget-text">
                              <h3>45</h3>
                              <span>Uploads</span>
                            </div>
                          </a>
                        </div><!-- /.widget-box -->
                      </div><!-- /.section-content -->
                    </div>

                    <div class="col-6 pl-2 equal-height">
                      <div class="section-content mt-0">
                        <div class="widget-box bg-danger">
                          <a href="#">
                            <span class="widget-icon bottom-right"><i class="fa fa-rss"></i></span>
                            <div class="widget-text">
                              <h3>385</h3>
                              <span>New Subs</span>
                            </div>
                          </a>
                        </div><!-- /.widget-box -->
                      </div><!-- /.section-content -->
                    </div>

                    <div class="col-12 equal-height">
                      <div class="section-content bg-white pt-3 pb-3 mt-0">
                        <div class="pie-sale-status pt-2 pb-2">
                          <div class="row">
                            <div class="col-3"><h3 class="sale-title text-right left"><span class="count">65%</span> Channel Sell</h3></div>
                            <div class="col-6"><div id="ct-chart-pie" class="ct-chart ct-perfect-fourth"></div></div>
                            <div class="col-3"><h3 class="sale-title text-left right"><span class="count">35%</span> Direct Sell</h3></div>
                          </div>
                        </div><!-- /.pie-sale-status -->
                      </div>
                    </div>
                  </div>
                </div><!-- /.section-content -->
              </div>

              <div class="col-lg-4">
                <div class="section-content advanced-card text-center mb-0">
                  <div class="social-box">
                    <div class="avatar bg-gradient"><img src="images/avatar/7.jpg" alt="Avatar" class="rounded-circle"></div><!-- /.avatar -->
                    <div class="details">
                      <h4 class="name"><a href="#">Olivia Perez</a></h4><!-- /.name -->
                      <span class="designation">Designer</span><!-- /.designation -->

                      <ul class="social-list pt-2 pb-2 flex-justified">
                        <li class="text-center"><a href="#"><i class="icon-social-twitter icons"></i> <span class="count">15,000</span></a></li>
                        <li class="text-center"><a href="#"><i class="icon-social-facebook icons"></i> <span class="count">9,050</span></a></li>
                        <li class="text-center"><a href="#"><i class="icon-social-dribbble icons"></i> <span class="count">11,450</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div><!-- /.section-content -->
              </div>
            </div>
          </div>
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
