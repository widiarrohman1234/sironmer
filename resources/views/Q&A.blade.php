@extends('template.base')
@section('content')

    <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-8">
      <br>

        @foreach($list_pertanyaan as $pertanyaan )
        <!-- Single Comment -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Pertanyaan : {{$pertanyaan->judul}}</h5>
            <h6>nama : {{$pertanyaan->user->username}}</h6>
            <p>{{$pertanyaan->pertanyaan}}</p>
              @foreach($pertanyaan->jawaban as $jawaban )
        <hr>
            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">{{$pertanyaan->user->username}}</h5>
                {!! nl2br($jawaban->jawaban) !!}<br>
                <i> Di posting pada {{$pertanyaan->created_at}}</i>
              </div>
            </div>
              @endforeach

          </div>
        </div>
        @endforeach

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Tinggalkan komentar:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>

      </div>
      
  @include('template.section.sidebarWidgets')

    </div>
    <!-- /.row -->


@endsection