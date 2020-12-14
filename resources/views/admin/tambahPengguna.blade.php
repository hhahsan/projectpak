@extends('layouts.app')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Tambah Pengguna</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="{{ route('admin.storeUser')}}" method="POST">
    @csrf
    <div class="form-group"> 
      <div class="card-body">
        <label >Nama Lengkap</code></label>
        <div class="row">
          <div class="col-3">
            <input type="text" class="form-control" name="gelar_depan" placeholder="Gelar Depan">
          </div>
          <div class="col-6">
            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
          </div>
          <div class="col-3">
            <input type="text" class="form-control" name="gelar_belakang" placeholder="Gelar Belakang"> 
          </div>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="form-group">
        <label for="nip">NIP</label>
        <input type="text" class="form-control" id="nip" placeholder="NIP" name="nip">
      </div>
    </div>
    <div class="card-body">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
      </div>
    </div>
    <div class="card-body">
      <div class="form-group">
        <label for="jenisKelamin">Level</label>
        <select class="custom-select form-control" id="jenisKelamin" name="level_id">
          <option></option>
          <option value="1">Admin</option>
          <option value="3">Pegawai</option>
        </select>
      </div>
    </div>
    <div class="card-body">
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
<!-- /.card -->
@endsection