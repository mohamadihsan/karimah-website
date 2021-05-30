
{{-- extends layout --}}
@extends('layouts/_frontend/template')

{{-- add page title --}}
@section('title')
    Galeri
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
                <h2>Galeri</h2>
                <ol>
                    <li><a href="index.html">Halaman Utama</a></li>
                    <li>Galeri</li>
                </ol>
            </div>
  
        </div>
    </section><!-- End Breadcrumbs -->
  
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">
  
            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Semua</li>
                        <li data-filter=".filter-bimbingan">Bimbingan</li>
                        <li data-filter=".filter-donasi">Donasi</li>
                        <li data-filter=".filter-karimah">RTQ Karimah</li>
                    </ul>
                </div>
            </div>
  
            <div class="row portfolio-container" data-aos="fade-up">
    
                <div class="col-lg-4 col-md-6 portfolio-item filter-bimbingan">
                    <img src="{{ asset('assets/frontend/img/galeri/galeri1.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Kegiatan RTQ Karimah</h4>
                        <p>Bimbingan</p>
                        <a href="{{ asset('assets/frontend/img/galeri/galeri1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Perbesar"><i class="bx bx-expand"></i></a>
                        <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6 portfolio-item filter-bimbingan">
                    <img src="{{ asset('assets/frontend/img/galeri/galeri2.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Kegiatan RTQ Karimah</h4>
                        <p>Bimbingan</p>
                        <a href="{{ asset('assets/frontend/img/galeri/galeri2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Perbesar"><i class="bx bx-expand"></i></a>
                        <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6 portfolio-item filter-bimbingan">
                    <img src="{{ asset('assets/frontend/img/galeri/galeri7.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Kegiatan RTQ Karimah</h4>
                        <p>Bimbingan</p>
                        <a href="{{ asset('assets/frontend/img/galeri/galeri7.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Perbesar"><i class="bx bx-expand"></i></a>
                        <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6 portfolio-item filter-bimbingan">
                    <img src="{{ asset('assets/frontend/img/galeri/galeri11.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Kegiatan RTQ Karimah</h4>
                        <p>Bimbingan</p>
                        <a href="{{ asset('assets/frontend/img/galeri/galeri11.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Perbesar"><i class="bx bx-expand"></i></a>
                        <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6 portfolio-item filter-bimbingan">
                    <img src="{{ asset('assets/frontend/img/galeri/galeri12.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Kegiatan RTQ Karimah</h4>
                        <p>Bimbingan</p>
                        <a href="{{ asset('assets/frontend/img/galeri/galeri12.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Perbesar"><i class="bx bx-expand"></i></a>
                        <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6 portfolio-item filter-bimbingan">
                    <img src="{{ asset('assets/frontend/img/galeri/galeri13.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Kegiatan RTQ Karimah</h4>
                        <p>Bimbingan</p>
                        <a href="{{ asset('assets/frontend/img/galeri/galeri13.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Perbesar"><i class="bx bx-expand"></i></a>
                        <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6 portfolio-item filter-karimah">
                    <img src="{{ asset('assets/frontend/img/galeri/galeri.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Kegiatan RTQ Karimah</h4>
                        <p>RTQ Karimah</p>
                        <a href="{{ asset('assets/frontend/img/galeri/galeri.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Perbesar"><i class="bx bx-expand"></i></a>
                        <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6 portfolio-item filter-karimah">
                    <img src="{{ asset('assets/frontend/img/galeri/galeri3.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Kegiatan RTQ Karimah</h4>
                        <p>RTQ Karimah</p>
                        <a href="{{ asset('assets/frontend/img/galeri/galeri3.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Perbesar"><i class="bx bx-expand"></i></a>
                        <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6 portfolio-item filter-karimah">
                    <img src="{{ asset('assets/frontend/img/galeri/galeri5.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Kegiatan RTQ Karimah</h4>
                        <p>RTQ Karimah</p>
                        <a href="{{ asset('assets/frontend/img/galeri/galeri5.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Perbesar"><i class="bx bx-expand"></i></a>
                        <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6 portfolio-item filter-karimah">
                    <img src="{{ asset('assets/frontend/img/galeri/galeri8.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Kegiatan RTQ Karimah</h4>
                        <p>RTQ Karimah</p>
                        <a href="{{ asset('assets/frontend/img/galeri/galeri8.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Perbesar"><i class="bx bx-expand"></i></a>
                        <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6 portfolio-item filter-karimah">
                    <img src="{{ asset('assets/frontend/img/galeri/galeri9.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Kegiatan RTQ Karimah</h4>
                        <p>RTQ Karimah</p>
                        <a href="{{ asset('assets/frontend/img/galeri/galeri9.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Perbesar"><i class="bx bx-expand"></i></a>
                        <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6 portfolio-item filter-donasi">
                    <img src="{{ asset('assets/frontend/img/galeri/galeri6.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Kegiatan RTQ Karimah</h4>
                        <p>Donasi</p>
                        <a href="{{ asset('assets/frontend/img/galeri/galeri6.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Perbesar"><i class="bx bx-expand"></i></a>
                        <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
                    </div>
                </div>
    
            </div>
  
        </div>
    </section><!-- End Portfolio Section -->

@endsection