<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('judul_halaman')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  
  <!-- Template CSS -->
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/components.css">
</head>
<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          
        <li class="dropdown"><a href="#" class="nav-link nav-link-lg nav-link-user">
            
            <div class="d-sm-none d-lg-inline-block">Welcome Admin</div></a>
          </li>
          </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/">@yield('judul_halaman')</a>
          </div>
          <ul class="sidebar-menu">
             
              <li>
                <a class="nav-link" href="/"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
              </li>

              <li>
                <a class="nav-link" href="/type"><i class="fas fa-grip-horizontal"></i> <span>Data Type</span></a>
              </li>

              <li>
                <a class="nav-link" href="/mobil"><i class="fas fa-car"></i> <span>Data Mobil</span></a>
              </li>

              <li>
                <a class="nav-link" href="/customer"><i class="fas fa-user"></i> <span>Data Customer</span></a>
              </li>

              <li>
                <a class="nav-link" href="/transaksi"><i class="fas fa-random"></i> <span>Transaksi</span></a>
              </li>

              <li>
                <a class="nav-link" href="#"><i class="fas fa-clipboard-list"></i> <span>Laporan</span></a>
              </li>

              <li>
                <a class="nav-link" href="#"><i class="fas fa-clipboard-list"></i> <span>Logout</span></a>
              </li>
              
            </ul>

            
        </aside>
      </div>
      @yield('konten')
      <footer class="main-footer">
        <div class="footer-left">
          <!-- Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a> -->
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="js/stisla.js"></script>

  

  <!-- Template JS File -->
  <script src="js/scripts.js"></script>
  <script src="js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="js/page/index-0.js"></script>
</body>
</html>