@extends('welcome')

@section('content')
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
          <h1>Bettter digital experience with Ninestars</h1>
          <h2>We are team of talanted designers making websites with Bootstrap</h2>
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="{{asset('ninestars/assets/img/hero-img.svg')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section> 
  <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>List Cart</h2>
          <p>Reservasi Anda</p>
        </div>
        @if($cart)
        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info">
              @foreach ($cart as $row =>$key)
              <?php $ui=$row;?>
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>{{$key['judul']}} </h4>
                <p>

                  Jumlah Peserta  : <?= $jmls=$key['jml'];?> orang<br>
                  Tanggal Reservasi  : {{$key['tgl']}}<br>
                  Total Harga  : Rp.{{$key['harga']}}<br>
                </p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Jadwal Trip :</h4>
                <p>{{$key['jadwal_trip']}}</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Sifat Trip :</h4>
                <p>{{$key['sifat_trip']}}</p>
              </div>

              <img src="{{asset('img/2013-03-30jpg1.jpg')}}" class="img-thumbnail img-sm" style="width: 100%;margin-right: 5px;">  
              @endforeach 
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <form action="{{ '/cart/store2' }}" method="post" role="form" class="php-email-form">
              @csrf         
              <?php for ($i=1; $i <= $jmls; $i++) { ?>
              <h4>Peserta <?= $i?></h4>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">No Ktp</label>
                  <input type="number" name="ktp[]" class="form-control" id="ktp" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Nama</label>
                  <input type="text" class="form-control" name="nama[]" id="nama" data-rule="minlen:4" data-msg="Please enter a valid name">
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">No Hp</label>
                <input type="number" class="form-control" name="hp[]" id="hp" data-rule="minlen:4" data-msg="Please enter at least 12 numbers of subject">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Alamat</label>
                <textarea class="form-control" name="alamat[]" id="alamat" rows="3" data-rule="required" data-msg="Please write address for us"></textarea>
                <div class="validate"></div>
              </div>
              <?php }?>
              <div class="mb-3"></div>
              <div class="text-center">
                <!-- <div class="btn-get-started scrollto right"> -->
                  <input type="submit" class="btn btn-danger span3" style='background-color: #eb5d1e;' value="Check Out">
                <!-- </div> -->
                <a href="{{ '/cart/hapus/'.$ui}}" class="btn btn-outline-danger"> × Remove</a>
              </div>
            </form>
          </div>

        </div>
        @endif
      </div>
  </section>
@endsection
