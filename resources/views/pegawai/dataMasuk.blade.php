@extends('layouts.pegawai.app')

@section('content')
<div class="row">
  <div class="col-12">
    
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nip</th>
            <th>Periode Penilaian</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
          </thead>
          @foreach ($datas as $data)
          <tbody>
          <tr>
            <td>1</td>
            <td>{{ $data->user->nama }}</td>
            <td>{{ $data->user->nip}}</td>
            <td>{{ $data->periode->periode}}</td>
            <td>
              @if ($data->status == 1)
              <span class="badge badge-success">Diterima</span>
              @elseif ($data->status == 2)
              <span class="badge badge-danger">Ditolak</span>
              @elseif ($data->status == null)
              <span class="badge badge-info">Belum di Validasi</span>
              @endif
            </td>
            <td>
              <a href="{{ route('pegawai.detailData', $data->id )}}" type="button" class="btn btn-info btn-sm" style="border-radius: 8px"><i class="fas fa-info"></i> Detail</a>
              ||
              <a href="{{ route('pegawai.validasi', $data->id )}}" type="button" class="btn btn-info btn-sm" style="border-radius: 8px"><i class="fas fa-info"></i> Validasi</a>
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