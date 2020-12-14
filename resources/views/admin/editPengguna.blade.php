@extends('layouts.admin.app')

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
    <div class="card-body">
      <div class="form-group">
        <label for="nip">NIP</label>
        <input type="text" class="form-control" id="nip" placeholder="NIP" name="nip" value="{{ $user->nip }}">
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