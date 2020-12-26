<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-light-lightblue">
  <!-- Brand Logo -->
  <h3  class="brand-link navbar-dark navbar-lightblue">
    <span class="brand-text font-white">SIP PAK guru</span>
  </h3>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        
        <li class="nav-header">Dashboard</li>

        @if (Auth::user()->level_id == '1')
        <li class="nav-item">
          <a href="{{ route('admin')}}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.periode')}}" class="nav-link">
            <i class="far fa-calendar"></i>
            <p>
              Priode Penilaian
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.dataMasuk')}}" class="nav-link">
            <i class="fas fa-chart-bar"></i>
            <p>
              Data Masuk
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.dataUser')}}" class="nav-link">
            <i class="fas fa-user"></i>
            <p>
              Daftar Pengguna
            </p>
          </a>
        </li>
        @endif
        @if (Auth::user()->level_id == '3')
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
        @endif
        @if (Auth::user()->level_id == '2')
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
        @endif
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