@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3>{{ $count}}</h3>

        <p>Data Masuk</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="{{ route('pegawai.dataMasuk')}}" class="small-box-footer">Lihat data masuk <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        @foreach ($periode as $tgl)
        <h3>{{ $tgl->periode }}</h3> 
        @endforeach
        

        <p>Periode Penilaian</p>
      </div>
      <div class="icon">
        <i class="ion ion-calendar"></i>
      </div>
      <a href="{{ route('pegawai.periode')}}" class="small-box-footer">Ubah Periode Penilaian <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>Profil User</h3>

        <p>Profil</p>
      </div>
      <div class="icon">
        <i class="nav-icon fas fa-ellipsis-h"></i>
      </div>
      <a href="{{route('profil')}}" class="small-box-footer">Profil<i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>  
</div>

@endsection
