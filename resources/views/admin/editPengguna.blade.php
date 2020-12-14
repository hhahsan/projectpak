@extends('layouts.app')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Edit Data User</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="{{ route('admin.updateUser' ,$user->id)}}" method="POST">
    @method('put')
    @csrf
    <div class="form-group"> 
      <div class="card-body">
        <label >Nama Lengkap</code></label>
        <div class="row">
          <div class="col-3">
            <input type="text" class="form-control" name="gelar_depan" placeholder="Gelar Depan" value="{{ $user->gelar_depan }}">
          </div>
          <div class="col-6">
            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="{{ $user->nama }}">
          </div>
          <div class="col-3">
            <input type="text" class="form-control" name="gelar_belakang" placeholder="Gelar Belakang" value="{{ $user->gelar_belakang }}"> 
          </div>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ $user->email }}">
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