@extends('layouts.user.app')

@section('content')
<div class="card card-primary">
    <!-- /.card-header -->
  <!-- form start -->
  <form role="form">
    <div class="card-body">
      <div class="text-center">
        <h4 class="text-primary">TAMBAH PENGAJUAN PAK</h4>
        <small class="text-success">Silahkan Mengisi Data Sesuai Isian</small>
        <hr>
      </div>
      
      
      <div class="form-group">
        <label for="pendidikanTerakhir">Pendidikan Terakhir</label>
        <select class="custom-select form-control-border border-width-2" id="pendidikanTerakhir">
          <option></option>
          <option>Tidak Sekolah</option>
          <option>PAUD</option>
          <option>TK / sederajat</option>
          <option>Putus SD</option>
          <option>SD / sederajat</option>
          <option>SMP / sederajat</option>
          <option>SMA / sederajat</option>
          <option>Paket A</option>
          <option>Paket B</option>
          <option>Paket C</option>
          <option>DI / AI</option>
          <option>DII / AII</option>
          <option>DIII / AIII</option>
          <option>DIV</option>
          <option>S1 / AIV</option>
          <option>S2</option>
          <option>S3</option>
          <option>Lainnya</option>
        </select>
      </div>
      <div class="form-group">
        <label for="pendidikanJurusan">Pendidikan Jurusan</label>
        <input type="text" class="form-control form-control-border border-width-2" id="pendidikanJurusan" placeholder="Pendidikan Jurusan">
      </div>
      <div class="form-group">
        <label for="tahunLulus">Tahun Lulus</label>
        <input type="text" class="form-control form-control-border border-width-2" id="tahunLulus" placeholder="Tahun Lulus">
      </div>
      <div class="form-group">
        <label for="pangkat">Pangkat & Golongan</label>
        <select class="custom-select form-control-border border-width-2" id="pangkat">
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
          <input type="text" class="date form-control form-control-border border-width-2" id="tmt" placeholder="TMT Pangkat & Golongan">
          <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="tahunLulus">Masa Kerja Golongan</label>
        <div class="row">
            <div class="col-3">
              <input type="text" class="form-control form-control-border border-width-2" placeholder="--Tahun--">
            </div>
            <div class="col-6">
              <input type="text" class="form-control form-control-border border-width-2" placeholder="--Bulan--">
            </div>
          </div>
      </div>
      <div class="form-group">
        <label for="penilaian">Masa Penilaian Awal</label>
        <div class="input-group date" id="reservationdate" data-target-input="nearest">
          <input type="text" class="date form-control form-control-border border-width-2" id="penilaian" placeholder="Masa Penilaian Awal" autocomplete=’off’>
          <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="jenisGuru">Jenis Guru</label>
        <select class="custom-select form-control-border border-width-2" id="jenisGuru">
          <option>-- Pangkat & Golongan --</option>
          <option value="">Guru Kelas</option>
          <option value="">Guru Mata Pelajaran</option>
          <option value="">Guru Bimbingan Konseling</option>
          <option value="">Guru Pendamping</option>
          <option value="">Guru Magang</option>
          <option value="">Guru TIK </option>
          <option value="">Laboran</option>
          <option value="">Pustakawan</option>
          <option value="">Lainnya</option>
        </select>
      </div>
      <div class="form-group">
        <label for="tugas">Tugas</label>
        <input type="text" class="form-control form-control-border border-width-2" id="tugas" placeholder="Tugas">
      </div>
      <div class="form-group">
        <label class="text-center">Almat Sekolah</label> 
        <div class="card-body">
          <div class="row">
            <div class="col-3">
              <input type="text" class="form-control form-control-border border-width-2" placeholder="Sekolah">
            </div>
            <div class="col-6">
              <input type="text" class="form-control form-control-border border-width-2" placeholder="Kecamatan">
            </div>
            <div class="col-3">
              <input type="text" class="form-control form-control-border border-width-2" placeholder="Kabupaten"> 
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