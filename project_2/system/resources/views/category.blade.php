<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ url ('public')}}/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{ url ('public')}}/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    onya odop shop
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{url('public')}}/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{url('public')}}/assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ url ('public')}}/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{url('public')}}/assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          onya odop shop
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="./Beranda">
              <i class="nc-icon nc-bank"></i>
              <p>Beranda</p>
            </a>
          </li>
          <li>
            <a href="./Produk">
              <i class="nc-icon nc-diamond"></i>
              <p>Produk</p>
            </a>
          </li>
          <li>
            <a href="./masterdata">
              <i class="nc-icon nc-diamond"></i>
              <p>Master data</p>
            </a>
          
          <li>
            <a href="./category">
              <i class="nc-icon nc-tile-56"></i>
              <p>Category</p>
            </a>
          </li>
          <li>
            <a href="./notifications">
              <i class="nc-icon nc-tile-56"></i>
              <p>notifications</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">daftar category</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="javascript:;">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="javascript:;">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Paper Table Heading</h5>
                <p class="category">Created using Montserrat Font Family</p>
              </div>
              <div class="card-body">
                <div class="typography-line">
                  <h1><span>Header 1</span>The Life of Paper Dashboard </h1>
                </div>
                <div class="typography-line">
                  <h2><span>Header 2</span>The Life of Paper Dashboard </h2>
                </div>
                <div class="typography-line">
                  <h3><span>Header 3</span>The Life of Paper Dashboard </h3>
                </div>
                <div class="typography-line">
                  <h4><span>Header 4</span>The Life of Paper Dashboard </h4>
                </div>
                <div class="typography-line">
                  <h5><span>Header 5</span>The Life of Paper Dashboard </h5>
                </div>
                <div class="typography-line">
                  <h6><span>Header 6</span>The Life of Paper Dashboard </h6>
                </div>
                <div class="typography-line">
                  <p><span>Paragraph</span>
                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.
                  </p>
                </div>
                <div class="typography-line">
                  <span>Quote</span>
                  <blockquote>
                    <p class="blockquote blockquote-primary">
                      "I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at."
                      <br>
                      <br>
                      <small>
                        - Noaa
                      </small>
                    </p>
                  </blockquote>
                </div>
                <div class="typography-line">
                  <span>Muted Text</span>
                  <p class="text-muted">
                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                  </p>
                </div>
                <div class="typography-line">
                  <span>Primary Text</span>
                  <p class="text-primary">
                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
                </div>
                <div class="typography-line">
                  <span>Info Text</span>
                  <p class="text-info">
                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                </div>
                <div class="typography-line">
                  <span>Success Text</span>
                  <p class="text-success">
                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                </div>
                <div class="typography-line">
                  <span>Warning Text</span>
                  <p class="text-warning">
                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                  </p>
                </div>
                <div class="typography-line">
                  <span>Danger Text</span>
                  <p class="text-danger">
                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                </div>
                <div class="typography-line">
                  <h2><span>Small Tag</span>
                    Header with small subtitle <br>
                    <small>Use "small" tag for the headers</small>
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://www.creative-tim.com" target="_blank">onya odop</a></li>
                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by onya odop
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{url ('public')}}/assets/js/core/jquery.min.js"></script>
  <script src="{{url ('public')}}/assets/js/core/popper.min.js"></script>
  <script src="{{url ('public')}}/assets/js/core/bootstrap.min.js"></script>
  <script src="{{url ('public')}}/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{url ('public')}}/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{url ('public')}}/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{url ('public')}}/assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{url ('public')}}/assets/demo/demo.js"></script>
</body>

</html>