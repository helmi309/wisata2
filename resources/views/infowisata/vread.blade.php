<!-- Menghubungkan dengan view template master -->
@extends('admin.admin')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Info Wisata')
 
 
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
                <td>{{$pw->judul_info_wisata}}</td>
              </tr>
              <tr>
                <td>Deskripsi</td>
                <td><?= $pw->artikel_info_wisata ?></td>
              </tr>
              <tr>
                <td>Foto</td>
                <td><img width="250px" src="{{ url('/data_file/'.$pw->gambar_info_wisata) }}"></td>
              </tr>
              <tr>
                <td>Create At</td>
                <td>{{$pw->created_at}}</td>
              </tr>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection