<!-- Menghubungkan dengan view template master -->
@extends('admin.admin')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Destinasi Wisata')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <!-- <a href="/paket-wisata/tambah" class="btn btn-primary">Input Data Baru</a> -->
      </div>

      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>Field</th>
              <th>Value</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                <td>Judul</td>
                <td>{{$pw->nama_destinasi_wisata}}</td>
              </tr>
              <tr>
                <td>Deskripsi</td>
                <td>{{$pw->deskripsi}}</td>
              </tr>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<style type="text/css">
  .btn-x {
    position: absolute;
    top: 0%;
    right: 0%;
    background-color: #555;
    color: white;
    font-size: 8px;
    padding: 8px 12px;
    border: none;
    cursor: pointer;
    border-radius: 25px;
    text-align: center;
  }

  .btn-x:hover {
    background-color: black;
  }
</style>
<div class="col-md-12">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Form Galeri</h3>
    </div>
    <form action="/destinasi-wisata/upload" method="post"  enctype="multipart/form-data" role="form">
      {{ csrf_field() }}
      <div class="card-body">
        <div class="form-group">
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="foto" class="custom-file-input" id="exampleInputFile" required>
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <input type="hidden" name="id" value="{{$pw->id_destinasi_wisata}}" />
                      <button type="submit" class="btn btn-primary ">ok</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<div class="col-12">
  <div class="card card-primary">
    <div class="card-header">
      <div class="card-title">
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        @foreach ($dt as $data)
        <div class="col-sm-2">
          <a href="{{asset('data_file/'.$data->foto)}}" data-toggle="lightbox" data-title="a" data-gallery="gallery">
            <img src="{{asset('data_file/'.$data->foto)}}" class="img-fluid mb-2" alt="a"/>
            <a href="/destinasi-wisata/hapus2/{{$data->id_destinasi_wisata}}/{{$data->id}}" title="delete" onclick="javasciprt: return confirm('Are You Sure ?')">
            <button class="btn-x">X</button></a>
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')
<script>
  $(function () {
    bsCustomFileInput.init();
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });
  })
</script>
@endsection