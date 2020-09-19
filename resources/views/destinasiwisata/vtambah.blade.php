<!-- Menghubungkan dengan view template master -->
@extends('admin.admin')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Tambah Destinasi Wisata')
 
 
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
              <label for="judul">Nama</label>
              <input type="text" name="judul" id="judul" class="form-control" value="{{ @$pw->nama_destinasi_wisata }}" placeholder="judul..">
 
              @if($errors->has('judul'))
                  <div class="text-danger">
                      {{ $errors->first('judul')}}
                  </div>
              @endif
            </div>
            <div class="form-group">
              <label for="artikel">Artikel</label>
              <textarea name="artikel" id="artikel" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ @$pw->deskripsi }}</textarea>
              @if($errors->has('artikel'))
                  <div class="text-danger">
                      {{ $errors->first('artikel')}}
                  </div>
              @endif
            </div>
            <div class="form-group">
              <label for="kategori">Kategori</label>
              <input type="text" name="kategori" id="kategori" class="form-control" value="{{ @$pw->kategori }}" placeholder="kategori..">
 
              @if($errors->has('kategori'))
                  <div class="text-danger">
                      {{ $errors->first('kategori')}}
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
@section('js')
<script>
  $(function () {
    // Summernote
    $('#artikel').summernote();
  })
</script>
@endsection