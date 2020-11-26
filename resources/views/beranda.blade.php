@extends('template.base')

@section('content')
  
<main role="main" class="container">

  <div class="row">
    
        @foreach($list_pertanyaan as $pertanyaan)
      <!-- Blog Entries Column -->
      <div class="col-md-10">
        <hr>
        <h1 class="my-4">Pertanyaan : <br>
          <small>{{$pertanyaan->judul}}</small>
        </h1>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{$pertanyaan->kategori->nama}}</h2>
            <p class="card-text">{!! nl2br($pertanyaan->pertanyaan) !!}</p>
            <a href="{{url('beranda', $pertanyaan->id )}}" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Di posting pada {{$pertanyaan->created_at}} oleh
            <a href="#">{{$pertanyaan->user->username}}</a>
          </div>
        </div>
      </div>
      @endforeach

  </div>
  <!-- /.row -->

</main><!-- /.container -->

@endsection