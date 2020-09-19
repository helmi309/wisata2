@extends('welcome')

@section('content')
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-12">

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">Start Bootstrap</a>
        </p>


        <hr>
        <!-- Title -->
        <h1 class="mt-4">{{$pw->judul_info_wisata}}</h1>


        <!-- Date/Time -->
        <p>{{$pw->created_at}}</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{asset('data_file/'.$pw->gambar_info_wisata)}}" alt="">

        <hr>

        <p><?= $pw->artikel_info_wisata ?></p>
        <hr>

      </div>

    </div>
    <!-- /.row -->

  </div>
@endsection