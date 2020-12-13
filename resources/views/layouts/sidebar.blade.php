<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{route('user.dashboard')}}" class="brand-link">
    <span class="brand-text font-weight-light">SIP PAK guru</span>
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
          <a href="{{route('user.dashboard')}}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('user.dataPengajuan')}}" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Data Pengajuan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('user.tambahPengajuan')}}" class="nav-link">
            <i class="nav-icon far fa-plus-square"></i>
            <p>
              Tambah Pengajuan
            </p>
          </a>
        </li>
        <li class="nav-header">Profil</li>
        <li class="nav-item">
          <a href="{{route('profil')}}" class="nav-link">
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