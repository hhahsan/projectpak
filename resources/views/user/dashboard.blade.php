@extends('layouts.user.app')

@section('content')
<div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-olive">
        <div class="inner">
            <div class="text-center">
                <i class="nav-icon fas fa-book  fa-5x"></i>
            </div>
            <hr color="white">
            <h4>Data Pengajuan</h4>
            <p>Sebelum mengajukan pengusulan PAK, anda wajib mengisi formulir yang disediakan pada menu ini dengan benar, setelah menyelesaikan pengisian formulir maka formulir dapat dikirimkan.</p>
        </div>
        <a href="/data-pengajuan" class="small-box-footer"><i class="fas fa-arrow-circle-right fa-2x"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-indigo">
        <div class="inner">
            <div class="text-center">
                <i class="nav-icon far fa-plus-square fa-5x"></i>
            </div>
            <hr color="white">
            <h4>Tambah Pengajuan Baru</h4>
            <p>Apakah anda sudah mengajukan PAK ? jika sudah anda dapat melihat riwayat pengajuan PAK anda sebelumnya, beserta keterangan yang diberikan oleh dinas pendidikan kabupaten ponorogo.</p>
        </div>
        <a href="/tambah-pengajuan" class="small-box-footer"><i class="fas fa-arrow-circle-right fa-2x"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-maroon">
        <div class="inner">
            <div class="text-center">
                <i class="nav-icon fas fa-ellipsis-h fa-5x"></i>
            </div>
            <hr color="white">
            <h4>Profile</h4>
            <p>Untuk mengubah informasi pribadi seperti nama, nomor telefon, dan informasi pribadi lainnya ada pada halaman profil, dan juga untuk merubah password(kata sandi) terdapat pada halaman ini.</p>
        </div>
        <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-right fa-2x"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-navy">
        <div class="inner">
            <div class="text-center">
                <i class="nav-icon far fa-circle text-danger fa-5x"></i>
            </div>
            <hr color="white">
            <h4>Keluar</h4>
            <p>Jika anda sudah merasa cukup dengan proses pengajuan PAK anda hari ini, jangan lipa untuk menutup aplikasi ini dengan menekan tombol menu keluar, agar akun anda tetap aman dan dapat digunakan kembali.</p>
        </div>
        <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-right fa-2x"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>

<!--Modal Periode -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection
