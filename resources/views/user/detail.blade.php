@extends('layouts.app')

@section('content')
<div class="content-header">
  <a href="{{ route('user.dataPengajuan')}}" class="btn btn-danger btn-sm" style="border-radius: 18px"> &nbsp;  Kembali &nbsp; <i class="fas fa-undo"></i></a>
</div>
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Detail Data Pengajuan Pak</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
  
        

      <tbody>
        <tr>
          <th>Pendidikan Terakhir</th>
          <td>{{ $detail->pendidikan_terakhir}}</td>
        </tr> 
        <tr>
          <th>Pendidikan Jurusan</th>
          <td>{{ $detail->jurusan}}</td>
        </tr>        
        <tr>
          <th>Tahun Lulus</th>
          <td>{{ $detail->tahun_lulus}}</td>
        </tr>        
        <tr>
          <th>Pangkat & Golongan</th>
          <td>{{ $detail->pangkat_golongan}}</td>
        </tr>        
        <tr>
          <th>TMT Pangkat & Golongan</th>
          <td>{{ $detail->tmt}}</td>
        </tr>        
        <tr>
          <th>Masa Kerja Golongan</th>
          <td>{{ $detail->gol_tahun}} --Tahun {{ $detail->gol_tahun}} --Bulan</td>
        </tr>        
        <tr>
          <th>Masa Penilaian Awal</th>
          <td>{{ $detail->awal_penilaian}}</td>
        </tr>        
        <tr>
          <th>Jenis Guru</th>
          <td>{{ $detail->jenis_guru}}</td>
        </tr>    
        <tr>
          <th>Tugas</th>
          <td>{{ $detail->tugas}}</td>
        </tr>      
        <tr>
          <th>Alamat Sekolah</th>
          <td>{{ $detail->alamat_sekolah}} Kecamatan {{ $detail->kec_sekolah}} Kabupaten {{ $detail->kab_sekolah}} </td>
        </tr>          
              
      
      </tbody>
 
    </table>
  </div>
  <!-- /.card-body -->
</div>
@endsection