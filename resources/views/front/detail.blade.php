@extends('welcome')

@section('content')
<div class="invoice p-3 mb-3">
  <!-- title row -->
  <div class="row">
    <div class="col-12">
      <h4>
        <i class="fas fa-globe"></i> AdminLTE, Inc.
        <small class="float-right">Date: 2/10/2014</small>
      </h4>
    </div>
    <!-- /.col -->
  </div>
  <!-- info row -->
  <div class="row invoice-info">
    <div class="col-sm-4 invoice-col">
      From
      <address>
        <strong>{{$dw->judul}}</strong><br>
        Jumlah Peserta  : <?= $jmls=$pw->jml_peserta;?> orang<br>
        Tanggal Reservasi  : {{$date= $pw->tgl_reservasi}}<br>
        Jadwal Trip : {{$dw->jadwal_trip}}<br>
        Sifat Trip : {{$dw->sifat_trip}}
      </address>
    </div>

    <div class="col-sm-4 invoice-col">
      <b>Invoice #007612</b><br>
      <br>
      <b>Order ID:</b> {{$pw->id}}<br>
      <?php 
        $date1 = str_replace('-', '/', $date);
        $tomorrow = date('m-d-Y',strtotime($date1 . "+3 days"));
      ?>
      <b>Batas Pembayaran:</b> {{$tomorrow}}<br>
      <b>Status Pembayaran:</b> {{$pw->status}}<br>
      <b>Akun:</b> {{ Auth::user()->name }}
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <!-- Table row -->
  <div class="row">
    <div class="col-12 table-responsive">
      <table class="table table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>No Ktp</th>
          <th>No Hp</th>
          <th>Alamat</th>
        </tr>
        </thead>
        <tbody><?php $i=1;?>
        @foreach ($rd as $fas)
        <tr>
          <td>{{$i}}</td>
          <td>{{$fas->nama}}</td>
          <td>{{$fas->noktp}}</td>
          <td>{{$fas->nohp}}</td>
          <td>{{$fas->alamat}}</td>
        </tr><?php ($i++);?>
        @endforeach   
        </tbody>
      </table>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <div class="row">
    <!-- accepted payments column -->
    <div class="col-6"></div>
    <!-- /.col -->
    <div class="col-6">

      <div class="table-responsive">
        <table class="table">
          <tr>
            <th>Total:</th>
            <td>Rp. {{$pw->total_harga}}</td>
          </tr>
        </table>
      </div>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <!-- this row will not appear when printing -->
  <div class="row no-print">
    <div class="col-12">
      <button type="button" onclick="window.print()" class="btn btn-primary float-right" style="margin-right: 5px;">
        <i class="fas fa-download"></i> Print
      </button>
    </div>
  </div>
</div>
@endsection