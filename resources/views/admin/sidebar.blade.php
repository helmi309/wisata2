<!-- Main Sidebar Container -->
  <?php 
    $ifo = \App\Info_Web::find($id="1");
    config('app.name', 'Laravel');
  ?>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
      <!-- <img src="{{ asset('theme/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
        @else

          <li class="nav-item ">
            <a href="{{ route('paket-wisata') }}" class="nav-link {{ set_active('paket-wisata')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                {{ __('Paket Wisata') }}
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="{{ route('trip-paket') }}" class="nav-link {{ set_active('trip-paket')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                {{ __('Trip Paket') }}
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="{{ route('info-wisata') }}" class="nav-link {{ set_active('info-wisata')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                {{ __('Info Wisata') }}
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="{{ route('destinasi-wisata') }}" class="nav-link {{ set_active('destinasi-wisata')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                {{ __('Destinasi Wisata') }}
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="{{ route('info-web') }}" class="nav-link {{ set_active('info-web')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                {{ __('Info Web') }}
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="{{ route('user') }}" class="nav-link {{ set_active('user')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                {{ __('User') }}
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="{{ route('areservasi') }}" class="nav-link {{ set_active('areservasi')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                {{ __('Laporan Reservasi') }}
              </p>
            </a>
          </li>
        @endguest

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>