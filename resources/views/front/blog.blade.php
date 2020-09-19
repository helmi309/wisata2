@extends('welcome')

@section('content')
<div class="container">
    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-12">

        <h1 class="my-4">Page Heading
          <small>Secondary Text</small>
        </h1>
        @foreach($pw as $p)
        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="{{asset('data_file/'.$p->gambar_info_wisata)}}" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{ $p->judul_info_wisata }}</h2>
            <p class="card-text"><?= substr($p->artikel_info_wisata, 0,50)?></p>
            <a href="/info/read/{{ $p->id_info_wisata }}" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            {{ $p->created_at }}
          </div>
        </div>
        @endforeach
        <!-- Pagination -->
        <div class=" justify-content-center mb-4">
          {{ $pw->links() }}
        </div>

      </div>

    </div>
</div> 
@endsection