@extends('layouts.app')

@section('content')
<div class="card card-primary">
    <!-- /.card-header -->
  <!-- form start -->
  <form method="POST" action="{{ route('guru.store')}}" role="form" enctype="multipart/form-data">
    @csrf
    
    <div class="card-body">
      <div class="text-center">
        <h4 class="text-primary">TAMBAH PENGAJUAN PAK</h4>
        <small class="text-success">Silahkan Mengisi Data Sesuai Isian</small>
        <hr>
      </div>
      <div class="form-group">
        <label for="exampleInputFile">Rekomendasi Kepala Sekolah</label>
        <div class="input-group">
          <div class="custom-file">
            <input name="file" type="file" class="custom-file-input" id="exampleInputFile" required>
            <label class="custom-file-label" for="exampleInputFile">Pilih file</label>
          </div>
        </div>
      </div>
      <br>
      <div class="form-group">
        @foreach ($periode as $item)
        <input name="periode_id" type="text" class="form-control form-control-border border-width-2" value="{{ $item->id }}" hidden>
        @endforeach
      </div>
      <div class="form-group">
        <label for="pendidikanTerakhir">Pendidikan Terakhir</label>
        <select name="pendidikan_terakhir" class="custom-select form-control-border border-width-2" id="pendidikanTerakhir" required>
          <option disabled selected>-- Pendidikan terakhir --</option>
          <option value="Tidak Sekolah">Tidak Sekolah</option>
          <option value="PAUD">PAUD</option>
          <option value="TK / sederajat">TK / sederajat</option>
          <option value="Putus SD">Putus SD</option>
          <option value="SD / sederajat">SD / sederajat</option>
          <option value="SMP / sederajat">SMP / sederajat</option>
          <option value="SMA / sederajat">SMA / sederajat</option>
          <option value="Paket A">Paket A</option>
          <option value="Paket B">Paket B</option>
          <option value="Paket C">Paket C</option>
          <option value="DI / AI">DI / AI</option>
          <option value="DII / AII">DII / AII</option>
          <option value="DIII / AIII">DIII / AIII</option>
          <option value="DIV">DIV</option>
          <option value="S1 / AIV">S1 / AIV</option>
          <option value="S2">S2</option>
          <option value="S3">S3</option>
          <option value="Lainnya">Lainnya</option>
        </select>
      </div>
      <div class="form-group">
        <label for="pendidikanJurusan">Pendidikan Jurusan</label>
        <input name="jurusan" type="text" class="form-control form-control-border border-width-2" id="pendidikanJurusan" placeholder="Pendidikan Jurusan" required>
      </div>
      <div class="form-group">
        <label for="tahunLulus">Tahun Lulus</label>
        <input name="tahun_lulus" type="text" class="form-control form-control-border border-width-2" id="tahunLulus" placeholder="Tahun Lulus" required>
      </div>
      <div class="form-group">
        <label for="pangkat">Pangkat & Golongan</label>
        <select name="pangkat_golongan" class="custom-select form-control-border border-width-2" id="pangkat" required>
          <option>-- Pangkat & Golongan --</option>
          <option value="Pengatur Muda - II/a">Pengatur Muda - II/a</option>
          <option value="Pengatur Muda Tk.I - II/b">Pengatur Muda Tk.I - II/b</option>
          <option value="Pengatur - II/c">Pengatur - II/c</option>
          <option value="Pengatur Tk.I - II/d">Pengatur Tk.I - II/d</option>
          <option value="Penata - Muda III/a">Penata - Muda III/a</option>
          <option value="Penata Muda Tk.I - III/b">Penata Muda Tk.I - III/b</option>
          <option value="Penata - III/c">Penata - III/c</option>
          <option value="Penata Tk.I - III/d">Penata Tk.I - III/d</option>
          <option value="pembina - IV/a">pembina - IV/a</option>
          <option value="Pembina Tk.I - IV/b">Pembina Tk.I - IV/b</option>
        </select>
      </div>
      <div class="form-group">
        <label for="tmt">TMT Pangkat & Golongan</label>
        <div class="input-group date" id="reservationdate" data-target-input="nearest">
          <input name="tmt" type="text" class="date form-control form-control-border border-width-2" id="tmt" placeholder="TMT Pangkat & Golongan" required>
          <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="tahunLulus">Masa Kerja Golongan</label>
        <div class="row">
            <div class="col-3">
              <input name="gol_tahun" type="text" class="form-control form-control-border border-width-2" placeholder="--Tahun--" required>
            </div>
            <div class="col-6">
              <input name="gol_bulan" type="text" class="form-control form-control-border border-width-2" placeholder="--Bulan--" required>
            </div>
          </div>
      </div>
      <div class="form-group">
        <label for="penilaian">Masa Penilaian Awal</label>
        <div class="input-group date" id="reservationdate" data-target-input="nearest">
          <input name="awal_penilaian" type="text" class="date form-control form-control-border border-width-2" id="penilaian" placeholder="Masa Penilaian Awal" autocomplete=’off’ required>
          <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="jenisGuru">Jenis Guru</label>
        <select name="jenis_guru" class="custom-select form-control-border border-width-2" id="jenisGuru" required>
          <option>-- Pangkat & Golongan --</option>
          <option value="Guru Kelas">Guru Kelas</option>
          <option value="Guru Mata Pelajaran">Guru Mata Pelajaran</option>
          <option value="Guru Bimbingan Konseling">Guru Bimbingan Konseling</option>
          <option value="Guru Pendamping">Guru Pendamping</option>
          <option value="Guru Magang">Guru Magang</option>
          <option value="Guru TIK">Guru TIK</option>
          <option value="Laboran">Laboran</option>
          <option value="Pustakawan">Pustakawan</option>
          <option value="Lainnya">Lainnya</option>
        </select>
      </div>
      <div class="form-group">
        <label for="tugas">Tugas</label>
        <input name="tugas" type="text" class="form-control form-control-border border-width-2" id="tugas" placeholder="Tugas" required>
      </div>
      <div class="form-group">
        <label class="text-center">Almat Sekolah</label> 
        <div class="card-body">
          <div class="row">
            <div class="col-3">
              <input name="alamat_sekolah" type="text" class="form-control form-control-border border-width-2" placeholder="Sekolah" required>
            </div>
            <div class="col-6">
              <input name="kec_sekolah" type="text" class="form-control form-control-border border-width-2" placeholder="Kecamatan" required>
            </div>
            <div class="col-3">
              <input name="kab_sekolah" type="text" class="form-control form-control-border border-width-2" placeholder="Kabupaten" required> 
            </div>
          </div>
        </div>
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