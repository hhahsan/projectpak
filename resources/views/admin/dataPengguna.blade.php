@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-12">
    
    <div class="card">
      <div class="card-header">
        <h1>Data User</h1>
        <a href="{{ route('admin.createUser')}}" class="btn btn-primary"><i class="fas fa-user-plus"></i> &nbsp;Tambah User</a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIP</th>
            <th>Level</th>
            <th>Aksi</th>
          </tr>
          </thead>
          @foreach ($users as $user)
          <tbody>
            <tr>
              <td>1</td>
              <td>{{ $user->gelar_depan}} {{ $user->nama}} {{ $user->gelar_belakang}}</td>
              <td>{{ $user->nip}}</td>
              <td>{{ $user->level->nama}}</td>
              <td>
                <form action="{{ route('admin.destroy', $user->id)}}" method="POST"> @csrf
                  <a href="{{ route('admin.editUser', $user->id)}}" type="button" class="btn btn-info btn-sm" style="border-radius: 8px"><i class="fas fa-info"></i> Edit</a>
                  &nbsp; || &nbsp;
                  <button onClick="return confirm('Apakah anda yakin?')" type="submit" class="btn btn-danger btn-sm" style="border-radius: 8px"><i class="fas fa-user-times"></i> Hapus</button>
                  
                </form>
                
              </td>
            </tr>
          </tbody>  
          @endforeach
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
@endsection