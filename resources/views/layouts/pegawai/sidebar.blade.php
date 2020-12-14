<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        
             <li class="nav-header">Dashboard</li>
             <li class="nav-item">
               <a href=" {{ route('pegawai')}}" class="nav-link">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                 <p>
                   Dashboard
                 </p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('pegawai.periode')}}" class="nav-link">
                 <i class="far fa-calendar"></i>
                 <p>
                   Priode Penilaian
                 </p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('pegawai.dataMasuk')}}" class="nav-link">
                 <i class="fas fa-chart-bar"></i>
                 <p>
                   Data Masuk
                 </p>
               </a>
             </li>
             <li class="nav-header">Profil</li>
             <li class="nav-item">
               <a href="iframe.html" class="nav-link">
                 <i class="nav-icon fas fa-ellipsis-h"></i>
                 <p>Profil</p>
               </a>
             </li>
        <li class="nav-header">Keluar</li>
        <li class="nav-item">
          <a  href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
            <i class="nav-icon far fa-circle text-danger"></i>
            <p>Keluar</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>