@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Pengajuan Pak</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>No</th>
              <th>NIP</th>
              <th>Masa Penilaian</th>
              <th>Status</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            
                
            
            @foreach ($datas as $data)
            @if(auth()->user()->id == $data->user_id)
            <tr>
              <td>1</td>
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
              <td class="text-center"> 
                <a href="{{ route('user.detail', $data->id )}}" type="button" class="btn btn-info btn-sm" style="border-radius: 8px"><i class="fas fa-info"></i> Detail</a>
                ||
                <a href="#" type="button" class="btn btn-primary btn-sm" style="border-radius: 8px"><i class="fas fa-print"></i> Cetak</a>
              </td>
            </tr>
            @endif
            @endforeach
            
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection