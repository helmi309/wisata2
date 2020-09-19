<!-- Menghubungkan dengan view template master -->
@extends('admin.admin')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Paket Wisata')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <a href="/paket-wisata/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Input Data</a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="laravel_datatable" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Judul</th>
              <th>Deskripsi</th>
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
      ajax: "{{ url('paket-wisata') }}",
      columns: [
        { data: 'id_paket_wisata', name: 'id_paket_wisata' },
        { data: 'judul_paket_wisata', name: 'judul_paket_wisata' },
        { data: 'deskripsi_paket_wisata', name: 'deskripsi_paket_wisata' },
        { data: 'action', name: 'action', orderable: false, searchable: false},
      ]
    });
  });
</script>
@endsection