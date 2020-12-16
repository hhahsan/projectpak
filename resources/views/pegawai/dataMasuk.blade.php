@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-12">
    
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Masuk</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th hidden>awal penilaian</th>
            <th>Periode Penilaian</th>
            <th>Nama</th>
            <th>Nip</th>
            <th hidden>tempat tanggal lahir</th>
            <th hidden>jenis kelamin</th>
            <th hidden>Pendidikan</th>
            <th hidden>Pangkat dan Golongan</th>
            <th hidden>TMT Pangkat dan Golongan</th>
            <th hidden>Masa Kerja Golongan Lama @Tahun</th>
            <th hidden>Masa Kerja Golongan Lama @Bulan</th>
            <th hidden>Jenis Guru</th>
            <th hidden>Tugas</th>
            <th hidden>Alamat Sekolah</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
          </thead>
          @foreach ($datas as $data)
          <tbody>
          <tr>
            <td>{{++$no}}</td>
            <td hidden>{{ $data->awal_penilaian }}</td>
            <td>{{ $data->periode}}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->nip}}</td>
            <td hidden>{{$data->tempat_lahir}} {{$data->tanggal_lahir}}</td>
            <td hidden>{{$data->jenis_kelamin}}</td>
            <td hidden>{{ $data->pendidikan_terakhir}} {{$data->jurusan}} {{$data->tahun_lulus}}</td>
            <td hidden>{{$data->pangkat_golongan}}</td>
            <td hidden>{{$data->tmt}}</td>
            <td hidden>{{$data->gol_tahun}}</td>
            <td hidden>{{$data->gol_bulan}}</td>
            <td hidden>{{$data->jenis_guru}}</td>
            <td hidden>{{$data->tugas}}</td>
            <td hidden>{{$data->alamat_sekolah}} {{$data->kec_sekolah}} {{$data->kab_sekolah}}</td>
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
              &nbsp; || &nbsp;
              <a href="{{ route('pegawai.validasi', $data->id )}}" type="button" class="btn btn-success btn-sm" style="border-radius: 8px"><i class="fas fa-check"></i> Validasi</a>
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