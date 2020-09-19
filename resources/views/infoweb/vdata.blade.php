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
        <!-- <a href="/tag/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Input Data</a> -->
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="laravel_datatable" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Logo</th>
              <th>Telepon</th>
              <th>Wa</th>
              <th>alamat</th>
              <th>email</th>
              <th></th>
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
      ajax: "{{ url('info-web') }}",
      columns: [
        { data: 'id', name: 'id_tag' },
        { data: 'nama_web', name: 'nama_web' },
        { data: 'logo', name: 'logo' },
        { data: 'telepon', name: 'telepon' },
        { data: 'wa', name: 'wa' },
        { data: 'alamat', name: 'alamat' },
        { data: 'email', name: 'deskripsi' },
        { data: 'action', name: 'action', orderable: false, searchable: false},
      ]
    });
  });
</script>
@endsection