@extends('welcome')

@section('content')
<div class="container">
    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-12">
          <section id="portfolio" class="portfolio">
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
      </div>

    </div>
</div>
@endsection
