@extends('layouts.app')

@section('content')
<div class="content-header">
  <a href="{{ route('pegawai.dataMasuk')}}" class="btn btn-danger btn-sm" style="border-radius: 18px"> &nbsp;  Kembali &nbsp; <i class="fas fa-undo"></i></a>
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
          <td>{{ $validasi->user->nama}}</td>
        </tr> 
        <tr>
          <th>NIP</th>
          <td>{{ $validasi->user->nip}}</td>
        </tr> 
        <tr>
          <th>Pendidikan Terakhir</th>
          <td>{{ $validasi->pendidikan_terakhir}}</td>
        </tr> 
        <tr>
          <th>Pendidikan Jurusan</th>
          <td>{{ $validasi->jurusan}}</td>
        </tr>        
        <tr>
          <th>Tahun Lulus</th>
          <td>{{ $validasi->tahun_lulus}}</td>
        </tr>        
        <tr>
          <th>Pangkat & Golongan</th>
          <td>{{ $validasi->pangkat_golongan}}</td>
        </tr>        
        <tr>
          <th>TMT Pangkat & Golongan</th>
          <td>{{ $validasi->tmt}}</td>
        </tr>        
        <tr>
          <th>Masa Kerja Golongan</th>
          <td>{{ $validasi->gol_tahun}} --Tahun {{ $validasi->gol_tahun}} --Bulan</td>
        </tr>        
        <tr>
          <th>Masa Penilaian Awal</th>
          <td>{{ $validasi->awal_penilaian}}</td>
        </tr>        
        <tr>
          <th>Jenis Guru</th>
          <td>{{ $validasi->jenis_guru}}</td>
        </tr>    
        <tr>
          <th>Tugas</th>
          <td>{{ $validasi->tugas}}</td>
        </tr>      
        <tr>
          <th>Alamat Sekolah</th>
          <td>{{ $validasi->alamat_sekolah}} Kecamatan {{ $validasi->kec_sekolah}} Kabupaten {{ $validasi->kab_sekolah}} </td>
        </tr>         
              
      </tbody>
    </table>
    <div class="card-footer">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
        Validasi data PAK
      </button>
    </div>
  </div>
  <!-- /.card-body -->
</div>

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Validasi Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('pegawai.update', $validasi->id)}}" method="POST">
          @method('put')
          @csrf
          <div class="form-group">
            <div class="custom-control custom-radio">
              <input class="custom-control-input custom-control-input-success" type="radio" id="customRadio1" name="status" value="1">
              <label for="customRadio1" class="custom-control-label">Terima Pengajuan</label>
            </div>
            <div class="custom-control custom-radio">
              <input class="custom-control-input custom-control-input-danger" type="radio" id="customRadio" name="status" value="2">
              <label for="customRadio" class="custom-control-label">Tolak Pengajuan</label>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
      
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection