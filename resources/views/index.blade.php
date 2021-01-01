<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIP PAK Guru</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      
      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <h1 class="nav-title">SIP PAK Guru</h1>
            <p class="nav-title">Sistem Informasi Pengajuan Penilaian Angka Kredit Guru</p>
          </li>
        </ul>

        
      </div>

    
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">

            <div class="card mt-3">
              <div class="card-body bg-maroon">
              
                <h4 class="card-text">  Sudah punya akun?</h4>
                <hr color="white">
                <p class="card-text">
                    Jika anda sudah mendaftar (memiliki akun), silahkan login dengan akun yang sudah anda daftarkan.
                </p>
              </div>
            <a href="{{ route('login') }}" class="card-footer text-navy">Klik untuk Login  <i class="fas fa-arrow-circle-right"></i></a> 
            </div>

            <div class="card mt-5">
              <div class="card-body bg-lightblue">
                <h4 class="card-text"> Belum punya akun?</h4>
                <hr color="white">
                <p class="card-text">
                  Jika anda belum pernah mendaftar di aplikasi ini, silahkan mengikuti proses pembuatan akun untuk dapat mengajukan PAK.
                </p>
              </div>
              <a href="{{ route('register') }}" class="card-footer text-navy">Klik untuk membuat akun  <i class="fas fa-arrow-circle-right"></i></a> 
            </div><!-- /.card -->
          </div>
          
          <!-- /.col-md-6 -->
          <div class="col-md-6 ">
            <div class="card" style="width: 900px">
                <!-- /.card-header -->
                <div class="card-body">
                    <img
                    src="{{ asset('img/logo_dinas.png')}}"
                    alt="Dinas Pendidikan Ponorogo"
                    style="padding-top: 5%; padding-left: 37%;"
                  />
                  <h2 style="text-align: center;">
                    Dinas Pendidikan <br />
                    Kabupaten Ponorogo
                  </h2>
                </div>
                <!-- /.card-body -->
              </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer" style="height: 310px">
    
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('adminlte/dist/js/demo.js') }}"></script>
</body>
</html>
