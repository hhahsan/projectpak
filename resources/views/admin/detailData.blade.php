@extends('layouts.app')

@section('content')
<div class="content-header">
  <a href="{{ route('admin.dataMasuk')}}" class="btn btn-danger btn-sm" style="border-radius: 18px"> &nbsp;  Kembali &nbsp; <i class="fas fa-undo"></i></a>
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
          <th>Nama</th>
          <td>{{ $data->user->nama}}</td>
        </tr> 
        <tr>
          <th>NIP</th>
          <td>{{ $data->user->nip}}</td>
        </tr> 
        <tr>
          <th>Pendidikan Terakhir</th>
          <td>{{ $data->pendidikan_terakhir}}</td>
        </tr> 
        <tr>
          <th>Pendidikan Jurusan</th>
          <td>{{ $data->jurusan}}</td>
        </tr>        
        <tr>
          <th>Tahun Lulus</th>
          <td>{{ $data->tahun_lulus}}</td>
        </tr>        
        <tr>
          <th>Pangkat & Golongan</th>
          <td>{{ $data->pangkat_golongan}}</td>
        </tr>        
        <tr>
          <th>TMT Pangkat & Golongan</th>
          <td>{{ $data->tmt}}</td>
        </tr>        
        <tr>
          <th>Masa Kerja Golongan</th>
          <td>{{ $data->gol_tahun}} --Tahun {{ $data->gol_tahun}} --Bulan</td>
        </tr>        
        <tr>
          <th>Masa Penilaian Awal</th>
          <td>{{ $data->awal_penilaian}}</td>
        </tr>        
        <tr>
          <th>Jenis Guru</th>
          <td>{{ $data->jenis_guru}}</td>
        </tr>    
        <tr>
          <th>Tugas</th>
          <td>{{ $data->tugas}}</td>
        </tr>      
        <tr>
          <th>Alamat Sekolah</th>
          <td>{{ $data->alamat_sekolah}} Kecamatan {{ $data->kec_sekolah}} Kabupaten {{ $data->kab_sekolah}} </td>
        </tr>         
              
      
      </tbody>
 
    </table>
  </div>
  <!-- /.card-body -->
</div>
@endsection