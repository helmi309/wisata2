<!-- Menghubungkan dengan view template master -->
@extends('admin.admin')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Tambah Paket Wisata')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')
<div class="container-fluid">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="{{ @$action }}">
          {{ csrf_field() }}
          @if($btn=='edit')                 
              {{ method_field('PUT') }}
          @endif
          <div class="card-body">
            <div class="form-group">
              <label for="judul">Judul</label>
              <input type="text" name="judul" id="judul" class="form-control" value="{{ @$pw->judul_paket_wisata }}" placeholder="judul..">
 
              @if($errors->has('judul'))
                  <div class="text-danger">
                      {{ $errors->first('judul')}}
                  </div>
              @endif
            </div>
            <div class="form-group">
              <label for="deskripsi">Deskripsi</label>
              <textarea name="deskripsi" class="form-control" id="deskripsi" placeholder="deskripsi ..">{{ @$pw->deskripsi_paket_wisata }}</textarea>
              @if($errors->has('deskripsi'))
                  <div class="text-danger">
                      {{ $errors->first('deskripsi')}}
                  </div>
              @endif
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">{{ @$btn }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection