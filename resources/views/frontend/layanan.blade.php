
{{-- extends layout --}}
@extends('layouts/_frontend/template')

{{-- add page title --}}
@section('title')
    Layanan
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
                <h2>Layanan</h2>
                <ol>
                    <li><a href="index.html">Halaman Utama</a></li>
                    <li>Layanan</li>
                </ol>
            </div>
  
        </div>
    </section><!-- End Breadcrumbs -->
  
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
  
            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue">
                        <div class="icon">
                            <img src="{{ asset('assets/frontend/img/layanan/tahsin.png') }}" alt="bimbingan" srcset="" width="120" height="120">
                        </div>
                        <h4><a href="">Bimbingan Tahsin / Tahfidz</a></h4>
                        <p>RTQ Karimah mengadakan bimbingan tahsin & tahfidz untuk ikhwan, akhwat, dan juga anak-anak. Bimbingan dilaksanakan selama 3 bulan atau 12x pertemuan setiap levelnya.</p>
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-orange ">
                        <div class="icon">
                            <img src="{{ asset('assets/frontend/img/layanan/pendaftaran.png') }}" alt="pendaftaran" srcset="" width="120" height="120">
                        </div>
                        <h4><a href="">Informasi Pendaftaran</a></h4>
                            <p>
                            Jika ada yang ditanyakan terkait pendaftaran, baik pendaftaran santri PDHQ/PGQ ataupun pendaftaran bimbingan regular, silakan hubungi ke nomor <br><strong>+62 857 200 54 204</strong><br>
                            <a href="https://wa.link/c6i85q" class="btn btn-success" target="_blank"><i class="bx bxl-whatsapp" style="color: white;"></i> WhatsApp</a>
                        </p>
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-pink">
                        <div class="icon">
                            <img src="{{ asset('assets/frontend/img/layanan/donasi.png') }}" alt="donasi" srcset="" width="100" height="100">
                        </div>
                        <h4><a href="">Informasi Menjadi Donatur</a></h4>
                        <p>
                            Informasi untuk menjadi donatur RTQ Karimah, silakan hubungi nomor <br><strong>+62 857 200 54 204</strong><br>
                            <a href="https://wa.link/c6i85q" class="btn btn-success" target="_blank"><i class="bx bxl-whatsapp" style="color: white;"></i> WhatsApp</a>
                        </p>
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-yellow">
                        <div class="icon">
                            <img src="{{ asset('assets/frontend/img/layanan/al-quran.png') }}" alt="al-qur'an" srcset="" width="120" height="120">
                        </div>
                        <h4><a href="">Konsultasi Al-Qur'an</a></h4>
                            <p>
                            Jika ada yang perlu didiskusikan berkaitan dengan Al-Qur'an, silakan hubungi nomor <br><strong>+62 857 200 54 204</strong><br>
                            <a href="https://wa.link/c6i85q" class="btn btn-success" target="_blank"><i class="bx bxl-whatsapp" style="color: white;"></i> WhatsApp</a>
                        </p>
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-red">
                        <div class="icon">
                            <img src="{{ asset('assets/frontend/img/layanan/hpai.png') }}" alt="HPAI" srcset="" width="180" height="100">
                        </div>
                        <h4><a href="">Informasi Produk HPAI</a></h4>
                        <p>
                            RTQ Karimah menyediakan berbagai produk dari HPAI. Untuk informasi lebih lanjut, silakan hubungi nomor <br><strong>+62 857 200 54 204</strong><br>
                            <a href="https://wa.link/c6i85q" class="btn btn-success" target="_blank"><i class="bx bxl-whatsapp" style="color: white;"></i> WhatsApp</a>
                        </p>
                    </div>
                </div>
    
            </div>
  
        </div>
    </section><!-- End Services Section -->

@endsection