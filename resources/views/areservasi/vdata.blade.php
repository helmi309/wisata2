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
        <!-- <a href="/tag/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Input Data</a> -->
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="laravel_datatable" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Paket Tour</th>
              <th>Tanggal Reservasi</th>
              <th style="width: 40px">Jumlah Peserta</th>
              <th>Total Biaya</th>
              <th>Status</th>
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
      ajax: "{{ url('areservasi') }}",
      columns: [
        { data: 'id', name: 'id' },
        { data: 'id_tour', name: 'id_tour' },
        { data: 'tgl_reservasi', name: 'tgl_reservasi' },
        { data: 'jml_peserta', name: 'jml_peserta' },
        { data: 'total_harga', name: 'total_harga' },
        { data: 'status', name: 'status' },
        { data: 'action', name: 'action', orderable: false, searchable: false},
      ]
    });
  });
</script>
@endsection