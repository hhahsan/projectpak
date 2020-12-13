@extends('layouts.admin.app')

@section('content')
<div class="col-md-6">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Periode Penilaian</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal">
      <div class="card-body">
        <div class="form-group text-center">
          <label class="form-label mb-3 ">Tetapkan Periode Penilaian</label>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal</label>
          <div class="col-sm-10 input-group date">
            <input type="text" class="date form-control " data-target="#reservationdate"/>
              <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      <!-- /.card-footer -->
    </form>
  </div>
</div>
<!-- /.card -->
@endsection