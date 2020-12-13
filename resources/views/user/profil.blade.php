@extends('layouts.app')

@section('content')
<div class="card card-solid">
  <div class="card-body pb-0">
    <div class="row">
      <div class="col-md-6">
        
        <div class="card bg-light">
          <div class="card-header text-muted border-bottom-0">
            
            <h2>Profil User</h2>
            <hr color="grey">
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col-7">
                @foreach ($profil as $item)
                @if(auth()->user()->id == $item->user_id)
                <h3><b>{{ $item->nama }}</b></h3>
                <p class="text-muted"><b>Jenis Kelamin : </b>{{ $item->jenis_kelamin }}</p>
                <p class="text-muted"><b>Tempat tanggal lahir : </b> {{ $item->tempat_lahir }} / {{ $item->tanggal_lahir }}  </p>
                <ul class="ml-4 mb-0 fa-ul text-muted">
                  <li><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat : {{ $item->alamat }}</li>
                  <li><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> No Telepon : {{ $item->no_telephone }}</li>
                </ul>
                
                
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="text-right">
              @if (!empty($profil))
              <a href="{{ route('profil.edit', $item->id )}}" class="btn btn-primary">
                <i class="fas fa-user"></i> Edit Profil
              </a>
              @endif
              @endif
              @endforeach
              @if (empty($profil))
              <a href="{{ route('profil.isi')}}" class="btn btn-success mb-3">
                <i class="fas fa-user"></i> Isi Profil
              </a>
              @endif
              
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.card -->
@endsection