<!-- Menghubungkan dengan view template master -->
@extends('admin.admin')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Paket Wisata')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')
<div class="container-fluid">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex p-0">
          <h3 class="card-title p-3">Form</h3>
          <ul class="nav nav-pills ml-auto p-2">
            <li class="nav-item"><a class="nav-link <?= ($tag==1) ? 'active' : '' ;?>" href="#tab_1" data-toggle="tab">Form</a></li>
            <li class="nav-item"><a class="nav-link <?= ($tag==2) ? 'active' : '' ;?>" href="#tab_2" data-toggle="tab">Harga</a></li>
            <li class="nav-item"><a class="nav-link <?= ($tag==3) ? 'active' : '' ;?>" href="#tab_3" data-toggle="tab">Fasilitas</a></li>
          </ul>
        </div><!-- /.card-header -->
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane <?= ($tag==1) ? 'active' : '' ;?>" id="tab_1">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title"></h3>
                </div>
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
                          <td>{{$pw->judul}}</td>
                        </tr>
                        <tr>
                          <td>Deskripsi</td>
                          <td><?= $pw->deskripsi?></td>
                        </tr>
                        <tr>
                          <td>Jadwal Trip</td>
                          <td>{{$pw->jadwal_trip}}</td>
                        </tr>
                        <tr>
                          <td>Sifat Trip</td>
                          <td>{{$pw->sifat_trip}}</td>
                        </tr>
                        <tr>
                          <td>Meeting Point</td>
                          <td>{{$pw->meeting_point}}</td>
                        </tr>
                        <tr>
                          <td>Jadwal Perjalanan</td>
                          <td><?= $pw->jadwal_perjalanan?></td>
                        </tr>
                        <tr>
                          <td>Peraturan</td>
                          <td><?= $pw->termcondition?></td>
                        </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane <?= ($tag==2) ? 'active' : '' ;?>" id="tab_2">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title"></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{ @$action }}" class="form-horizontal">
                  {{ csrf_field() }}
                  <input type="hidden" name="id" value="{{ @$id }}">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-5">
                        <div class="form-group">
                          <label>Jumlah Peserta</label>
                          <input type="number" name="jmlp" class="form-control" placeholder="Enter ...">
                          @if($errors->has('jmlp'))
                              <div class="text-danger">
                                  {{ $errors->first('jmlp')}}
                              </div>
                          @endif
                        </div>
                      </div>
                      <div class="col-sm-5">
                        <div class="form-group">
                          <label>Harga</label>
                          <input type="number" name="hrgp" class="form-control" placeholder="Enter ...">
                          @if($errors->has('hrgp'))
                              <div class="text-danger">
                                  {{ $errors->first('hrgp')}}
                              </div>
                          @endif
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="form-group">
                          <label> </label>
                          <button type="submit" class="form-control btn btn-primary">{{ @$btn }}</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="laravel_datatable" class="table table-bordered table-striped" style="width:100%!important">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>jumlah_peserta</th>
                            <th>harga</th>
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
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane <?= ($tag==3) ? 'active' : '' ;?>" id="tab_3">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title"></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{ @$action2 }}" class="form-horizontal">
                  {{ csrf_field() }}
                  <input type="hidden" name="id" value="{{ @$id }}">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-5">
                        <div class="form-group">
                          <label>Deskripsi</label>
                          <input type="text" name="deskf" class="form-control" placeholder="Enter ...">
                          @if($errors->has('deskf'))
                              <div class="text-danger">
                                  {{ $errors->first('deskf')}}
                              </div>
                          @endif
                        </div>
                      </div>
                      <div class="col-sm-5">
                        <div class="form-group">
                          <label>Status</label>
                          <select name="sttusf" class="form-control" class="form-control">
                            @php ($data = ['Harga Termasuk','Harga Tidak Termasuk'])
                            @for($i = 0; $i < count($data); $i++)
                              <option value="{{$data[$i]}}">{{$data[$i]}}</option>
                            @endfor
                          </select>
                          @if($errors->has('sttusf'))
                              <div class="text-danger">
                                  {{ $errors->first('sttusf')}}
                              </div>
                          @endif
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="form-group">
                          <label> </label>
                          <button type="submit" class="form-control btn btn-primary">{{ @$btn }}</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="laravel_datatable2" class="table table-bordered table-striped" style="width:100%!important">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>Fasilitas</th>
                            <th>status</th>
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
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div><!-- /.card-body -->
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script>
  $(document).ready( function () {
    $('#laravel_datatable').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ url('trip-paket/harga/'.$id) }}",
      columns: [
        { data: 'id_harga_trip', name: 'id_tour' },
        { data: 'jumlah_peserta', name: 'jumlah_peserta' },
        { data: 'harga', name: 'harga' },
        { data: 'action', name: 'action', orderable: false, searchable: false},
      ]
    });
    $('#laravel_datatable2').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ url('trip-paket/fasilitas/'.$id) }}",
      columns: [
        { data: 'id_fasilitas_trip', name: 'id_tour' },
        { data: 'deskripsi', name: 'deskripsifasilitas' },
        { data: 'status', name: 'status' },
        { data: 'action', name: 'action', orderable: false, searchable: false},
      ]
    });
  });
</script>
@endsection