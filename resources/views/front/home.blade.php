<!-- Menghubungkan dengan view template master -->
@extends('welcome')
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')
  <!-- ======= Hero Section ======= -->
  <?php
    $ifo = \App\Info_Web::find($id="1");
  ?>
  <script src="https://api.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.js"></script>
  <link href="https://api.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.css" rel="stylesheet" />
  <style>
      #map { position: absolute; top: 0; bottom: 0; width: 100%;height: 600px; }
  </style>
  <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.2/mapbox-gl-directions.js"></script>
  <link
      rel="stylesheet"
      href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.2/mapbox-gl-directions.css"
      type="text/css"/>

  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
          <h1>{{ $ifo->slogan}}</h1>
          <h2>{{ $ifo->nama_web}}</h2>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="{{asset('img/'.$ifo->logo)}}" class="img-fluid animated" style="height:340px" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Tentang</h2>
          <p>{{ $ifo->nama_web}}</p>
        </div>

        <div class="row">
          <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-happy-heart-eyes"></i></div>
              <h4 class="title"><a href="">Pengenalan Alat Musik di Wisata Kampung Seni </a></h4>
              <video width="500" height="315" controls>
                  <source src="./video/VID-20200708-WA0000.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
              <!-- <iframe width="560" height="315" src="./video/VID-20200708-WA0000.mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
              <!-- <p class="description"><?= $ifo->deksripsi?></p> -->
            </div>
            <div class="icon-box" style="margin-left:20px;">
              <div class="icon"><i class="bx bx-bullseye"></i></div>
              <h4 class="title"><a href="">Suasana Wisata Kampung Seni</a></h4>
              <video width="500" height="315" controls>
                  <source src="./video/VID-20200707-WA0006.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>

              <!-- <iframe width="560" height="315" src="./video/VID-20200707-WA0006.mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
              <!-- <p class="description"><?= $ifo->deksripsi?></p> -->
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <p>Maps</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
              <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200" style="margin: 0; padding: 0;">
                  <div id="map"></div>
                  <script>
                      var lat = 109.5550884;
                      var long = -0.6483722;
                      var zoom = 4;

                      if (navigator.geolocation) {
                          navigator.geolocation.getCurrentPosition(showPosition);
                      }

                      function showPosition(position) {
                          lat = position.coords.longitude;
                          long = position.coords.latitude;
                          zoom = 13;
                          mapboxgl.accessToken = 'pk.eyJ1IjoiaGVsbWkzMDkiLCJhIjoiY2thMXlmc3Y5MDA5dDNmbXNocGY4NTVlMyJ9.oqrXBfe5usoHCTyc2_npvQ';
                          var map = new mapboxgl.Map({
                              container: 'map',
                              style: 'mapbox://styles/mapbox/streets-v11',
                              center: [lat,long ],
                              zoom: zoom
                          });
                          var directions = new MapboxDirections({
                              accessToken: mapboxgl.accessToken,
                              steps: false,
                              geometries: 'polyline',
                              // controls: { instructions: false }
                          });
                          map.addControl(directions, 'top-left');

                          map.on('load', function() {
                              directions.on('route', function(ev) {
                                  // var styleSpec = ev.route;
                              });
                          });
                      }
                      mapboxgl.accessToken = 'pk.eyJ1IjoiaGVsbWkzMDkiLCJhIjoiY2thMXlmc3Y5MDA5dDNmbXNocGY4NTVlMyJ9.oqrXBfe5usoHCTyc2_npvQ';
                      var map = new mapboxgl.Map({
                          container: 'map',
                          style: 'mapbox://styles/mapbox/streets-v11',
                          center: [lat,long ],
                          zoom: zoom
                      });
                      var directions = new MapboxDirections({
                          accessToken: mapboxgl.accessToken,
                          steps: false,
                          geometries: 'polyline',
                          // controls: { instructions: false }
                      });
                      map.addControl(directions, 'top-left');

                      map.on('load', function() {
                          directions.on('route', function(ev) {
                          });
                      });

                  </script>


              </div>

          </div>
        </div>

      </div>
    </section><!-- End Portfolio Section -->

      <section id="portfolio" class="portfolio" style="padding-top: 600px;">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <p>Galeri Wisata</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              @foreach($ps as $p)
              <li data-filter=".filter-{{$p->id_destinasi_wisata}}">{{$p->kategori}}</li>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          @foreach($pw as $p)
          <div class="col-lg-4 col-md-6 portfolio-item filter-{{$p->id_destinasi_wisata}}">
            <div class="portfolio-wrap">
              <img src="{{asset('data_file/'.$p->foto)}}" class="img-fluid" alt="{{$p->nama_destinasi_wisata}}">
              <div class="portfolio-links">
                <a href="{{asset('data_file/'.$p->foto)}}" data-gall="portfolioGallery" class="venobox" title="{{$p->nama_destinasi_wisata}}"><i class="icofont-plus-circle"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>{{$p->nama_destinasi_wisata}}</h4>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->
  <!--Start of Tawk.to Script-->
  <!--End of Tawk.to Script-->
@endsection
