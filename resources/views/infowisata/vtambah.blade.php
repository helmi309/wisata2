<!-- Menghubungkan dengan view template master -->
@extends('admin.admin')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Tambah Info Wisata')
 
 
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
        <form role="form" method="post" action="{{ @$action }}"  enctype="multipart/form-data">
          {{ csrf_field() }}
          @if($btn=='edit')                 
              {{ method_field('PUT') }}
          @endif
          <div class="card-body">
            <div class="form-group">
              <label for="judul">Judul</label>
              <input type="text" name="judul" id="judul" class="form-control" value="{{ @$pw->judul_info_wisata }}" placeholder="judul..">
 
              @if($errors->has('judul'))
                  <div class="text-danger">
                      {{ $errors->first('judul')}}
                  </div>
              @endif
            </div>
            <div class="form-group">
              <label for="artikel">Artikel</label>
              <textarea name="artikel" id="artikel" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ @$pw->artikel_info_wisata }}</textarea>
              @if($errors->has('artikel'))
                  <div class="text-danger">
                      {{ $errors->first('artikel')}}
                  </div>
              @endif
            </div>
            <div class="form-group">
              <label for="customFile">Gambar</label>
              @if($btn=='edit')
                <img width="250px" src="{{ url('/data_file/'.$pw->gambar_info_wisata) }}">
                <input type="hidden" name="gmb" value="{{$pw->gambar_info_wisata}}">
              @endif
              <br>
              <code>Silahkan dikosongkan jika gmbar tidak diperbarui</code>
              <div class="custom-file">
                <input name="gamabar" type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
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
<script src="{{asset('theme/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
<script src="{{asset('theme/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script>
  $(function () {
    // Summernote
    $('#artikel').summernote();
  })
  $(document).ready(function () {
    bsCustomFileInput.init();
  });
</script>
@endsection