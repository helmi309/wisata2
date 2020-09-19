@extends('welcome')

@section('content')
<section id="clients" class="clients section-bg">
      <div class="container">

      </div>
    </section>
<div class="container">
    <br>  
    <!-- <p class="text-center">
      More bootstrap 4 components on 
      <a href="http://bootstrap-ecommerce.com/" target="_blank"> Bootstrap-ecommerce.com</a>
    </p> -->
    <hr>
    <div class="card">
      <div class="card-header">
        Riwayat Reservasi
      </div>

      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Paket Tour</th>
                      <th>Tanggal Reservasi</th>
                      <th style="width: 40px">Jumlah Peserta</th>
                      <th>Total Biaya</th>
                      <th>Status</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1;?>
                    @foreach ($pw as $fas)
                      <?php 
                        $ifo = \App\Trip_Paket::find($fas->id_tour);
                      ?>
                    <tr>
                      <td>{{$i}}.</td>
                      <td>{{$ifo->judul}}</td>
                      <td>{{$fas->tgl_reservasi}}</td>
                      <td>{{$fas->jml_peserta}}</td>
                      <td>{{$fas->total_harga}}</td>
                      <td>{{$fas->status}}</td>
                      <td><a href="{{ '/reservasi/read/'.$fas->id }}"><input type="submit" class="btn btn-danger span3" style='background-color: #eb5d1e;' value="Detail"></a></td>
                    </tr><?php ($i++);?>
                    @endforeach                                        
                  </tbody>
                </table>
      </div>
      <!-- /.card-body -->
    </div>
</div> 
@endsection