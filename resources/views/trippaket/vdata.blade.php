<!-- Menghubungkan dengan view template master -->
@extends('admin.admin')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', $page)
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <a href="/trip-paket/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Input Data</a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="laravel_datatable" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>id_tour</th>
              <th>id_paket</th>
              <th>judul</th>
              <th>jadwal_trip</th>
              <th>sifat_trip</th>
              <th>meeting_point</th>
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
      ajax: "{{ url('trip-paket') }}",
      columns: [
        { data: 'id_tour', name: 'id_tour' },
        { data: 'judul_paket_wisata', name: 'judul_paket_wisata' },
        { data: 'judul', name: 'judul' },
        { data: 'jadwal_trip', name: 'jadwal_trip' },
        { data: 'sifat_trip', name: 'sifat_trip' },
        { data: 'meeting_point', name: 'meeting_point' },
        { data: 'action', name: 'action', orderable: false, searchable: false},
      ]
    });
  });
</script>
@endsection