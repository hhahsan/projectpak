@extends('layouts.app')

@section('content')
<div class="card card-primary">
  <form method="POST" action="{{ route('profil.update', $profil->id)}}" role="form">
    @method('put')
    @csrf
    <div class="card-body">
      <div class="text-center">
        <h4 class="text-primary">Edit Profil</h4>
        <small class="text-success">Silahkan mengisi profil anda sesuai form yang ada</small>
        <hr>
      </div>
      <div class="form-group">
        <label for="notelp">No Telepon</label>
        <input type="text" class="form-control form-control-border border-width-2" id="notelp" name="no_telephone" placeholder="No Telepon" value="{{ $profil->no_telephone}}">
      </div>
      <div class="form-group">
        <label for="alamat">Alamat Rumah</label>
        <input type="text" class="form-control form-control-border border-width-2" id="alamat" name="alamat" placeholder="Alamat" value="{{ $profil->alamat}}">
      </div>
      <div class="form-group">
        <label for="tempatLahir">Tempat Lahir</label>
        <input type="text" class="form-control form-control-border border-width-2" id="tempatLahir"  name="tempat_lahir" placeholder="Tempat Lahir" value="{{ $profil->tempat_lahir}}">
      </div>
      <div class="form-group">
        <label for="tanggalLahir">Tanggal Lahir</label>
        <div class="input-group date" id="reservationdate" data-target-input="nearest">
          <input type="text" class="date form-control form-control-border border-width-2" id="tanggalLahir" name="tanggal_lahir" placeholder="Tanggal Lahir" autocomplete="off" value="{{ $profil->tanggal_lahir}}">
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