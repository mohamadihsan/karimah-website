
{{-- extends layout --}}
@extends('layouts/_frontend/template')

{{-- add page title --}}
@section('title')
    Program Tahsin/Tahfidz Akhwat
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
                <h2>Program Tahsin/Tahfidz Akhwat</h2>
                <ol>
                    <li><a href="index.html">Halaman Utama</a></li>
                    <li>Program Tahsin/Tahfidz Akhwat</li>
                </ol>
            </div>
  
        </div>
    </section><!-- End Breadcrumbs -->
  
    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
        <div class="container" data-aos="fade-up">
  
            <div class="row content">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2>Program Tahsin/Tahfidz Akhwat</h2>
                    <h3>Program bimbingan tahsin / tahfidz selama 3 bulan atau 12x pertemuan setiap levelnya</h3>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
                        <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
                    </ul>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                </div>
            </div>
  
        </div>
    </section><!-- End About Us Section -->
  
    <!-- ======= Locations Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">
  
            <div class="section-title" data-aos="fade-up">
                <h2>Lokasi</h2>
            </div>
    
            <div class="row">
    
                <div class="d-flex justify-content-center align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{ asset('assets/frontend/img/locations/karimah-pesona-citayam.png') }}" class="img-fluid" alt="karimah pesona citayam" width="200" height="200">
                        </div>
                        <div class="member-info">
                            <h4>RTQ Karimah Pesona Citayam</h4>
                            <span>Komplek Pesona Citayam blok B 11 A no.12, Susukan, Kec. Bojong Gede, Bogor, Jawa Barat 16920</span>
                        </div>
                    </div>
                </div>
    
            </div>
  
        </div>
    </section><!-- End Location Section -->

@endsection