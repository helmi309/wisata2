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
        <a href="/info-wisata/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Input Data</a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="laravel_datatable" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Gambar</th>
              <th>Editor</th>
              <th>Tanggal</th>
              <th>Aksi</th>
            </tr>
          </thead>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection

@section('js')
<script>
  $(document).ready( function () {
    $('#laravel_datatable').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ url('info-wisata') }}",
      columns: [
        { data: 'id_info_wisata', name: 'id_info_wisata' },
        { data: 'judul_info_wisata', name: 'judul_info_wisata' },
        { data: 'gambar_info_wisata', name: 'gambar_info_wisata' },
        // { data: 'artikel_info_wisata', name: 'artikel_info_wisata' },
        { data: 'id_editor', name: 'id_editor' },
        { data: 'created_at', name: 'id_editor' },
        { data: 'action', name: 'action', orderable: false, searchable: false},
      ]
    });
  });
</script>
@endsection