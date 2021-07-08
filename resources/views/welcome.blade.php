@extends('layouts.main');
@section('title', 'ULT');

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">

    <div class="container">
    <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
        <div>
            <h1>Unit Layanan Terpadu</h1>
            <h2>LEMBAGA LAYANAN PENDIDIKAN TINGGI WILAYAH V Yogyakarta</h2>
            <a href="{{ route('form') }}" class="btn-get-started">Isi Formulir</a>
        </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
        <img src="assets/img/kemendikbudlogo.png" class="img-fluid" alt="Logo Kemendikbud">
        </div>
    </div>
</div>
    

    </section><!-- End Hero -->
    <br>
    <br>

    <main id="main">
  <div class="container">
    <div class="row-box">
    <div class ="row">
    @foreach($blogs as $p)
        <div class="kartu">
            <div class="kartu-container">
                <div class="cards card-1">
                  <div class="kartu-content">
                  
                    <h3><a href="#">{{ $p->description }}</a></h3>
                    <a href="#" class="kartu-btn">Deskripsi</a>
                  
                  </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>
</div>
@endsection