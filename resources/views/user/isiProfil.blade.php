@extends('layouts.app')

@section('content')
<div class="card card-primary">
  <form method="POST" action="{{ route('profil.store')}}" role="form">
    @csrf
    <div class="card-body">
      <div class="text-center">
        <h4 class="text-primary">Edit Profil</h4>
        <small class="text-success">Silahkan mengisi profil anda sesuai form yang ada</small>
        <hr>
      </div>
    
      <div class="form-group"> 
        <div class="card-body">
          <label for="exampleInputBorder">Nama Lengkap</code></label>
          <div class="row">
            <div class="col-3">
              <input type="text" class="form-control form-control-border border-width-2" name="gelar_depan" placeholder="Gelar Depan">
            </div>
            <div class="col-6">
              <input type="text" class="form-control form-control-border border-width-2" name="nama" placeholder="Nama Lengkap">
            </div>
            <div class="col-3">
              <input type="text" class="form-control form-control-border border-width-2" name="gelar_belakang" placeholder="Gelar Belakang"> 
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="notelp">No Telepon</label>
        <input type="text" class="form-control form-control-border border-width-2" id="notelp" name="no_telephone" placeholder="No Telepon">
      </div>
      <div class="form-group">
        <label for="alamat">Alamat Rumah</label>
        <input type="text" class="form-control form-control-border border-width-2" id="alamat" name="alamat" placeholder="Alamat">
      </div>
      <div class="form-group">
        <label for="tempatLahir">Tempat Lahir</label>
        <input type="text" class="form-control form-control-border border-width-2" id="tempatLahir"  name="tempat_lahir" placeholder="Tempat Lahir">
      </div>
      <div class="form-group">
        <label for="tanggalLahir">Tanggal Lahir</label>
        <div class="input-group date" id="reservationdate" data-target-input="nearest">
          <input type="text" class="date form-control form-control-border border-width-2" id="tanggalLahir" name="tanggal_lahir" placeholder="Tanggal Lahir" autocomplete="off">
          <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="jenisKelamin">Jenis Kelamin</label>
        <select class="custom-select form-control-border border-width-2" name="jenis_kelamin" id="jenisKelamin">
          <option></option>
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>
      
      
      <div class="text-center">
        <button type="submit" class="btn btn-primary" style="border-radius: 18px">&nbsp; Simpan &nbsp;<i class="fas fa-sign-in-alt"></i></button>
      </div>
      
    </div>
    <!-- /.card-body -->   
  </form>
</div>
@endsection