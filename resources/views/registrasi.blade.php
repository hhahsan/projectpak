<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Top Navigation</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
  <!-- Bootstrap DatePicker-->
  <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css')}}">
  
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
            <a href="/" class="btn btn-danger btn-sm" style="border-radius: 18px"> &nbsp;  Kembali &nbsp; <i class="fas fa-undo"></i></a>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="card card-primary">
          <form role="form">
            <div class="card-body">
              <div class="text-center">
                <h4 class="text-primary">Daftar Akun PAK</h4>
                <small class="text-success">Silahkan mengisi data sesuai form yang ada</small>
                <hr>
              </div>
              
              <div class="form-group">
                <label for="nip">NIP</label>
                <input type="text" class="form-control form-control-border border-width-2" id="nip" placeholder="NIP">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control form-control-border border-width-2" id="email" placeholder="Email">
              </div>
              <div class="form-group mb-5">
                <label for="password">Password</label>
                <input type="password" class="form-control form-control-border border-width-2" id="password" placeholder="Password">
              </div>
              
              <div class="text-center">
                <button type="submit" class="btn btn-primary" style="border-radius: 18px">&nbsp; Daftar &nbsp;<i class="fas fa-sign-in-alt"></i></button>
              </div>
              
            </div>
            <!-- /.card-body -->
        
           
          </form>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!--Ajax-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('adminlte/dist/js/demo.js') }}"></script>
<!-- Bootstrap DatePicker-->
<script src="{{ asset('js/bootstrap-datepicker.js') }}""></script>
<script>
  $('.date').datepicker({
    format: 'dd/mm/yyyy',
    autoclose: 'true'
  })
</script>
</body>
</html>
