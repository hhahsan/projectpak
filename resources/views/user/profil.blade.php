@extends('layouts.user.app')

@section('content')
<div class="card card-primary">
  <form role="form">
    <div class="card-body">
      <div class="text-center">
        <h4 class="text-primary">Daftar Akun PAK</h4>
        <small class="text-success">Silahkan mengisi data sesuai form yang ada</small>
        <hr>
      </div>
    
      <div class="form-group"> 
        <div class="card-body">
          <label for="exampleInputBorder">Nama Lengkap</code></label>
          <div class="row">
            <div class="col-3">
              <input type="text" class="form-control form-control-border border-width-2" placeholder="Gelar Depan">
            </div>
            <div class="col-6">
              <input type="text" class="form-control form-control-border border-width-2" placeholder="Nama Lengkap">
            </div>
            <div class="col-3">
              <input type="text" class="form-control form-control-border border-width-2" placeholder="Gelar Belakang"> 
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="notelp">No Telepon</label>
        <input type="text" class="form-control form-control-border border-width-2" id="notelp" placeholder="No Telepon">
      </div>
      <div class="form-group">
        <label for="alamat">Alamat Rumah</label>
        <input type="text" class="form-control form-control-border border-width-2" id="alamat" placeholder="Alamat">
      </div>
      <div class="form-group">
        <label for="tempatLahir">Tempat Lahir</label>
        <input type="text" class="form-control form-control-border border-width-2" id="tempatLahir" placeholder="Tempat Lahir">
      </div>
      <div class="form-group">
        <label for="tanggalLahir">Tanggal Lahir</label>
        <div class="input-group date" id="reservationdate" data-target-input="nearest">
          <input type="text" class="date form-control form-control-border border-width-2" id="tanggalLahir" placeholder="Tanggal Lahir" autocomplete="off">
          <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="jenisKelamin">Jenis Kelamin</label>
        <select class="custom-select form-control-border border-width-2" id="jenisKelamin">
          <option></option>
          <option>Laki-laki</option>
          <option>Perempuan</option>
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