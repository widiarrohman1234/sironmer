@extends('template.base')
@section('index')
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-12 text-center">
        <a class="blog-header-logo text-dark" href="{{url('home')}}">SIRONMER</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      @foreach($list_kategori as $kategori)
      <a class="p-2 text-muted" href="#">{{$kategori->nama}}</a>
      @endforeach
    </nav>
  </div>

  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-12 px-0">
      <h1 class="display-4 font-italic">WebSite SiRonMer</h1>
      <p class="lead my-3">Sudah Jarang tatap muka secara langsung antara dosen/pengajar dengan mahasiswa/murid. Ada ”sekat” dalam komunikasi mereka yang dibatasi layar pada peranti yang digunakan. Sebab, mereka memang tidak berada di satu tempat yang sama namun memiliki semangat yang luar biasa.
        <br>
      Ya, sebagaimana banyak aktivitas yang berubah selama pandemi Covid-19, pembelajaran dan UTS juga mengalami penyesuaian.</p>
    </div>
  </div>


<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        Produk Informatika Politap
      </h3>

      <div class="blog-post">
        <h2 class="blog-post-title">WebSite SiRonMer</h2>
        <p class="blog-post-meta">25 November 2020 by <a href="https://www.facebook.com/widiarrohman9/">Muhammad Widi Arrohman</a></p>

        <p>Pertama-tama Saya ucapkan puji syukur kepada Tuhan atas nikmat yang diberikan kepada kita hari ini. Adanya website ini, untuk orang-orang hebat seperti anda. Semoga Tuhan selalu memberikan keberkahan kepada kita semua yang sudah bersedia meluangkan waktunya untuk membuka halaman website ini.</p>
        <hr>
        
        <h3>Teknik Informatika Politeknik Negeri Ketapang</h3>
        <p>Lulusan program studi Teknik Informatika Politeknik Negeri Ketapang dibekali dengan pengetahuan teoritis dan pengalaman praktek sehingga siap masuk ke dunia kerja. Lulusan dikategorikan sebagai Informatic-workers yaitu profesional yang bekerja dibidang informatika atau bidang lain yang berbasis teknologi informatika sebagai operator, programmer, atau analis dan designer.</p>

        <h3>Visi Program Studi</h3>
        <ul>
          <li>“Menjadi program studi unggul dan terdepan dalam menghasilkan sumber daya manusia bidang keahlian teknologi informasi untuk dunia industri khususnya di Kalimantan Barat pada tahun 2025 dan nasional pada tahun 2030”</li>
        </ul>

        <h3>Misi Program Studi</h3>
        <ol>
          <li>Menyiapkan lulusan di bidang Teknik Informatika yang mampu memasuki tantangan dan peluang kerja.</li>
          <li>Melaksanakan pendidikan dan pengajaran di bidang Teknik Informatika yang berorientasi pada perkembangan ilmu pengetahuan.</li>
          <li>Mengembangkan ilmu pengetahuan dan teknologi bidang Teknik Informatika dengan berkolaborasi dengan asosiasi profesi dan penguna lulusan program studi Teknik Informatika.</li>
          <li>Menyelenggarakan dan mengembangkan penelitian dibidang teknik informatika yang berkontribusi bagi perkembangan ilmu pengetahuan dan teknologi.</li>
          <li>Melaksanakan pengambdian kepada masyarakat dibidang teknik informatika yang bermanfaat untuk masyarakat luas.</li>
          <li>Membangun kerjasama dengan pihak instansi pemerintah dan industri.</li>
        </ol>
      </div><!-- /.blog-post -->

      <nav class="blog-pagination">
        <a class="btn btn-outline-primary disabled" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>

    </div><!-- /.blog-main -->

    @include('template.section.sidebarWidgets')

  </div>
  <!-- /.row -->

</main><!-- /.container -->
@endsection