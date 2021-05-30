
{{-- extends layout --}}
@extends('layouts/_frontend/template')

{{-- add page title --}}
@section('title')
    Laporan Informasi
@endsection

{{-- add meta description --}}
@section('description')
    <meta content="" name="description">
@endsection

{{-- add carousel --}}
@section('carousel')
@endsection

{{-- add content --}}
@section('content')
    
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
            <div class="d-flex justify-content-between align-items-center">
                <h2>Laporan & Informasi</h2>
                <ol>
                    <li><a href="index.html">Halaman Utama</a></li>
                    <li>Laporan & Informasi</li>
                </ol>
            </div>
  
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
  
            <div class="row">
    
                <div class="col-lg-8 entries">
    
                <article class="entry">
    
                    <div class="entry-img">
                    <img src="{{ asset('assets/frontend/img/informasi/info1.jpg') }}" alt="" class="img-fluid">
                    </div>
    
                    <h2 class="entry-title">
                    <a href="blog-single.html">Infaq Sembako untuk para Guru RTQ Karimah</a>
                    </h2>
    
                    <div class="entry-meta">
                    <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Mohamad Ihsan</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2021-04-01">1 April 2021</time></a></li>
                        <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li> -->
                    </ul>
                    </div>
    
                    <div class="entry-content">
                    <p>
                        Pada tanggal 30 Maret 2021 kemarin, telah diterima 10 sembako dari Hamba Allah untuk diberikan kepada guru-guru RTQ Karimah. 
                        Di masa pandemi ini dan mendekati bulan suci Ramadhan, sembako tersebut mudah-mudahan bisa bermanfaat.  
                    </p>
                    <div class="read-more">
                        <a href="blog-single.html">Selengkapnya</a>
                    </div>
                    </div>
    
                </article><!-- End blog entry -->
    
                <article class="entry">
    
                    <div class="entry-img">
                    <img src="{{ asset('assets/frontend/img/informasi/info2.jpg') }}" alt="" class="img-fluid">
                    </div>
    
                    <h2 class="entry-title">
                    <a href="blog-single.html">Donasi Beras</a>
                    </h2>
    
                    <div class="entry-meta">
                    <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Mohamad Ihsan</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2021-03-01">1 Maret 2021</time></a></li>
                        <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li> -->
                    </ul>
                    </div>
    
                    <div class="entry-content">
                    <p>
                        Pada tanggal 25 Februari 2021 kemarin, telah diterima 2 karung beras dari Hamba Allah untuk diberikan kepada santri-santri RTQ Karimah untuk kebutuhan makan setiap harinya. 
                        Di masa pandemi ini dan mendekati bulan suci Ramadhan, sembako tersebut mudah-mudahan bisa bermanfaat.
                    </p>
                    <div class="read-more">
                        <a href="blog-single.html">Selengkapnya</a>
                    </div>
                    </div>
    
                </article><!-- End blog entry -->
    
                <div class="blog-pagination">
                    <ul class="justify-content-center">
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    </ul>
                </div>
    
                </div><!-- End blog entries list -->
    
                <div class="col-lg-4">
    
                <div class="sidebar">
    
                    <h3 class="sidebar-title">Kategori</h3>
                    <div class="sidebar-item categories">
                    <ul>
                        <li><a href="#">General <span>(25)</span></a></li>
                        <li><a href="#">Donasi <span>(12)</span></a></li>
                        <li><a href="#">Kegiatan Ramadhan <span>(5)</span></a></li>
                        <li><a href="#">Bimbingan <span>(22)</span></a></li>
                    </ul>
                    </div><!-- End sidebar categories-->
    
                </div><!-- End sidebar -->
    
                </div><!-- End blog sidebar -->
    
            </div>
    
        </div>
    </section><!-- End Blog Section -->

@endsection