<!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="/"><span>{{ $ifo->nama_web}}</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{ set_active('index')}}" style="cursor: pointer;"><a onclick="index()">Home</a></li>
          <li class="{{ set_active('info')}}" style="cursor: pointer;"><a onclick="info()">Info Wisata</a></li>
          <li class="{{ set_active('galeri')}}" style="cursor: pointer;"><a onclick="galeri()">Galeri</a></li>
          <li class="drop-down {{ set_active('paket')}}"><a href="">Paket Wisata</a>
            <ul>
              <?php
                $pw = \App\Paket_wisata::get();
                $tp = \App\Trip_Paket::get();
                foreach ($pw as $key) {?>
                  <li class="drop-down"><a href="#">{{$key->judul_paket_wisata}}</a>
                    <ul>
                      <?php foreach ($tp as $keya ) { if ($key->id_paket_wisata==$keya->id_paket) {?>
                      <li><a href="/paket/{{$keya->id_tour}}">{{$keya->judul}}</a></li>
                      <?php }}?>
                    </ul>
                  </li>
                <?php }
              ?>

            </ul>
          </li>
          <li class="{{ set_active('cart')}}" style="cursor: pointer;"><a onclick="cart()">Cart</a></li>
          @if(auth()->user())
          <li class="{{ set_active('reservasi')}}" style="cursor: pointer;"><a onclick="res()">Reservasi</a></li>
          <li class="get-started" style="cursor: pointer;"><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          @else
          <li class="get-started"><a href="{{ route('login') }}">Login</a></li>
          @endif
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  <script type="text/javascript">
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
          var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
          s1.async=true;
          s1.src='https://embed.tawk.to/5eb95ab08ee2956d73a00b79/default';
          s1.charset='UTF-8';
          s1.setAttribute('crossorigin','*');
          s0.parentNode.insertBefore(s1,s0);
      })();
  </script>
