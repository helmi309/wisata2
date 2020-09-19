<!-- Menghubungkan dengan view template master -->
@extends('welcome')
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
          <h1>{{$pw->judul}}</h1>
          <?php $i=0; foreach ($hr as $harga){if ($i==0) {?>
          <h2>Harga Mulai dari Rp.{{ number_format($harga->harga,2) }}/Org</h2>
          <?php $i++;}}?>
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="{{asset('data_file/1594177633cc_.jpg')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Pemberitauan</h4>
          </div>
          <div class="modal-body">
            <p id="error"></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
    @if($errors->any())
      <input type="hidden" id="hrd" value="{{$errors->first()}}">
    @endif
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-12 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">{{$pw->judul}}</h3>
            <p data-aos="fade-up" data-aos-delay="100">
              <?= $pw->deskripsi?>
            </p>

            <br>
            <div class="row">
              <style type="text/css">
                .nav-link{
                  font-size: 13px;
                }
                </style>
              <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist" style="width: 100%;">
                <li class="nav-item">
                  <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Detail Trip</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-content-below-gale-tab" data-toggle="pill" href="#custom-content-below-gale" role="tab" aria-controls="custom-content-below-gale" aria-selected="true">Galeri</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Harga Tour</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-messages" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">Fasilitas Trip</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#custom-content-below-settings" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">Jadwal Perjalanan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-content-below-term-tab" data-toggle="pill" href="#custom-content-below-term" role="tab" aria-controls="custom-content-below-term" aria-selected="false">Trem & Condition</a>
                </li>
              </ul>
              <div class="tab-content" id="custom-content-below-tabContent" style="width: 100%;">
                <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                    <p>
                      <strong>Jadwal: </strong>{{$pw->jadwal_trip}}<br>
                      <strong>Sifat Trip : </strong>{{$pw->sifat_trip}}<br>
                      <strong>Meeting Point : </strong>{{$pw->meeting_point}} khusus penjemputan Peserta
                      <strong>Luar Kota</strong> dikenakan biaya tambahan<br>
                      <strong>Destinasi {{$pw->judul}} :</strong><br>
                        @foreach ($ds as $des)
                        - {{ $des->nama_destinasi_wisata }}<br>
                        @endforeach
                    </p>
                </div>
                <div class="tab-pane fade" id="custom-content-below-gale" style="width:100%" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                  <?php
                    $ifo = \App\View_Galeri::where('id_tour', $pw->id_tour)->get();
                  ?>

                    <div class="row">
                    @foreach($ifo as $p)
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <a href="/w3images/lights.jpg" target="_blank">
                            <img src="{{asset('data_file/'.$p->foto)}}" alt="Lights" style="width:100%">
                            <div class="caption">
                              <p>{{$p->nama_destinasi_wisata}}</p>
                            </div>
                          </a>
                        </div>
                      </div>
                    @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="custom-content-below-profile" style="width:100%" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                    <table class="table table-hover table-striped">
                      <tbody>
                        <tr>
                          <td style="text-align: center;"><strong>Jumlah Peserta</strong></td>
                          <td style="text-align: center;"><b>Harga Tour</b></td>
                        </tr>
                        @foreach ($hr as $harga)
                        <tr>
                          <td style="text-align: center;">{{ $harga->jumlah_peserta }}&nbsp;Org</td>
                          <td style="text-align: center;">{{ number_format($harga->harga,2) }}/Org</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">
                    <p>
                    <?php $p=0;$r=0;?>
                    @foreach ($fr as $fas)
                      @if($fas->status=='Harga Termasuk')
                        @if($p==0)
                        <strong>Harga Termasuk :</strong><br>
                        <?php $p=1;?>
                        @endif
                          √ {{ $fas->deskripsi }}<br>
                      @elseif($fas->status=='Harga Tidak Termasuk')
                        @if($r==0)
                        <strong>Harga Tidak Termasuk :</strong><br>
                        <?php $r=1;?>
                        @endif
                          √ {{ $fas->deskripsi }}<br>
                      @endif
                    @endforeach
                    </p>
                </div>
                <div class="tab-pane fade" id="custom-content-below-settings" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">
                   <p><?= $pw->jadwal_perjalanan?></p>
                </div>
                <div class="tab-pane fade" id="custom-content-below-term" role="tabpanel" aria-labelledby="custom-content-below-term-tab">
                   <p><?= $pw->termcondition?></p>
                </div>
              </div>
            </div>
            <form action="{{ '/cart/store' }}" method="POST" role="form">
                 @csrf
                <input type="hidden" name="id" value="{{ $pw->id_tour }}">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="name">Tanggal Reservasi</label>
                    <?php
                      $stop_date = date("Y-m-d");
                      $date = date('Y-m-d', strtotime($stop_date . ' +3 day'));
                    ?>
                    <input type="date" class="form-control" name="tgl" id="tgl" value="<?= $date?>" min="<?= $date?>" required/>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="name">Jumlah Orang</label>
                    <select class="form-control" name="jml" id="jml" required>
                      @foreach ($hr as $harga)
                        <option value="{{$harga->harga.'/'.$harga->jumlah_peserta}}">{{ $harga->jumlah_peserta }}&nbsp;Org</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                @if(auth()->user())
                <input type="submit" class="btn btn-danger span3" style='background-color: #eb5d1e;' value="Reservasi">
                @else
                    <a href="/login" class="btn btn-danger span3">Login dulu untuk melakukan reservasi</a>
                @endif
            </form>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
  </main><!-- End #main -->
@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function(){
    $('#alertbox').click(function(){
      $("#error").html("You Clicked on Click here Button");
        $('#myModal').modal("show");
      });
    });
    function aler() {
      var as = document.getElementById('hrd').value;
      if (as=='msg') {
          $("#error").html("Selesaikan terlebih dahulu reservasi Anda Sebelumnya");
          $('#myModal').modal("show");
      };
    }
    aler();
</script>
@endsection
