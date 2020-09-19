<!-- Menghubungkan dengan view template master -->
@extends('admin.admin')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Info Web')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <a href="/info-web/edit/{{$pw->id}}" class="btn btn-primary">Edit Data</a>
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
                <td>Nama Web</td>
                <td>{{$pw->nama_web}}</td>
              </tr>
              <tr>
                <td>Telepon</td>
                <td>{{$pw->telepon}}</td>
              </tr>
              <tr>
                <td>Email</td>
                <td>{{$pw->email}}</td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>{{$pw->alamat}}</td>
              </tr>
              <tr>
                <td>Slogan</td>
                <td>{{$pw->slogan}}</td>
              </tr>
              <tr>
                <td>Link Instagram</td>
                <td>{{$pw->ig}}</td>
              </tr>
              <tr>
                <td>Link Facebook</td>
                <td>{{$pw->fb}}</td>
              </tr>
              <tr>
                <td>Link Twitter</td>
                <td>{{$pw->twet}}</td>
              </tr>
              <tr>
                <td>Link Youtube</td>
                <td>{{$pw->utube}}</td>
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