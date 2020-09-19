<!-- Menghubungkan dengan view template master -->
@extends('admin.admin')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Ubah Info Web')
 
 
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
        <form role="form" method="post" action="{{ @$action }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          @if($btn=='edit')                 
              {{ method_field('PUT') }}
          @endif
          <div class="card-body">
            <div class="form-group">
              <label for="nama_web">Nama Web</label>
              <input type="text" name="nama_web" id="nama_web" class="form-control" value="{{ @$pw->nama_web }}" placeholder="nama web..">
 
              @if($errors->has('nama_web'))
                  <div class="text-danger">
                      {{ $errors->first('nama_web')}}
                  </div>
              @endif
            </div>
            <div class="form-group">
              <label for="customFile">Logo</label>
              @if($btn=='edit')
                <img width="250px" src="{{ url('/img/'.$pw->logo) }}">
                <input type="hidden" name="lg" value="{{$pw->logo}}">
              @endif
              <br>
              <code>Silahkan dikosongkan jika logo tidak diperbarui</code>
              <div class="custom-file">
                <input name="logo" type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
            </div>
            <div class="form-group">
              <label for="telepon">Telepon</label>
              <input type="number" name="telepon" id="telepon" class="form-control" value="{{ @$pw->telepon }}" placeholder="082..">
 
              @if($errors->has('telepon'))
                  <div class="text-danger">
                      {{ $errors->first('telepon')}}
                  </div>
              @endif
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" name="email" id="email" class="form-control" value="{{ @$pw->email }}" placeholder="@gmail.com..">
 
              @if($errors->has('email'))
                  <div class="text-danger">
                      {{ $errors->first('email')}}
                  </div>
              @endif
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea name="alamat" class="form-control" id="alamat" placeholder="alamat ..">{{ @$pw->alamat }}</textarea>
              @if($errors->has('alamat'))
                  <div class="text-danger">
                      {{ $errors->first('alamat')}}
                  </div>
              @endif
            </div>
            <div class="form-group">
              <label for="slogan">Slogan</label>
              <textarea name="slogan" class="form-control" id="slogan" placeholder="slogan ..">{{ @$pw->slogan }}</textarea>
              @if($errors->has('slogan'))
                  <div class="text-danger">
                      {{ $errors->first('slogan')}}
                  </div>
              @endif
            </div>
            <div class="form-group">
                <label for="ig">Link Instagram</label>
                <input type="text" name="ig" id="ig" class="form-control" value="{{ @$pw->ig }}" placeholder="https://www.instagram.com/">
   
                @if($errors->has('ig'))
                    <div class="text-danger">
                        {{ $errors->first('ig')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="fb">Link Facebook</label>
                <input type="text" name="fb" id="fb" class="form-control" value="{{ @$pw->fb }}" placeholder="https://www.facebook.com/">
   
                @if($errors->has('fb'))
                    <div class="text-danger">
                        {{ $errors->first('fb')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="twet">Link Twitter</label>
                <input type="text" name="twet" id="twet" class="form-control" value="{{ @$pw->twet }}" placeholder="https://twitter.com/">
   
                @if($errors->has('twet'))
                    <div class="text-danger">
                        {{ $errors->first('twet')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="utube">Link Youtube</label>
                <input type="text" name="utube" id="utube" class="form-control" value="{{ @$pw->utube }}" placeholder="https://www.youtube.com/">
   
                @if($errors->has('utube'))
                    <div class="text-danger">
                        {{ $errors->first('utube')}}
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