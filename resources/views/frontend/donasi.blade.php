
{{-- extends layout --}}
@extends('layouts/_frontend/template')

{{-- add page title --}}
@section('title')
    Donasi
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
                <h2>Donasi</h2>
                <ol>
                    <li><a href="index.html">Halaman Utama</a></li>
                    <li>Donasi</li>
                </ol>
            </div>
  
        </div>
    </section><!-- End Breadcrumbs -->
  
    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">
  
            <div class="section-title">
                <h2>
                    وَمَا أَنْفَقْتُمْ مِنْ شَيْءٍ فَهُوَ يُخْلِفُهُ ۖ وَهُوَ خَيْرُ الرَّازِقِينَ   
                </h2>
                <h4>“Dan barang apa saja yang kamu nafkahkan, niscaya Dia akan menggantinya” [Saba’/34 : 39]</h4>
                <p class="mt-5">
                    <span class="h5 mt-5">Salurkan Donasi / Infaq Anda ke</span><br>
                    <img src="{{ asset('assets/frontend/img/nomor-rekening.png') }}" alt="nomor rekening mandiri syariah" class="img-fluid mt-2" width="50%">
                </p>
                <p class="mt-3">
                    <span class="h5 mt-5">Konfirmasi Donasi / Infaq : <strong>+62 857 200 54 204</strong></span><br>
                    <a href="https://wa.link/c6i85q" class="btn btn-success mt-1" target="_blank"><i class="bx bxl-whatsapp" style="color: white;"></i> WhatsApp</a>
                </p>
            </div>
    
            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up">
                        <i class="bx bx-book-bookmark icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Donasi Bahan Makanan Pokok<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                                Infaq Bahan Makanan Pokok Insya Allah akan digunakan untuk para santri, dan juga guru-guru RTQ Karimah. 
                            </p>
                        </div>
                    </li>
        
                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bxs-flag-alt icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapse">Donasi / Infaq utuk Palestina <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                                Insya Allah RTQ Karimah memfasilitasi bagi yang ingin berinfaq untuk saudara-saudari muslim di Palestina.
                            </p>
                        </div>
                    </li>
    
                </ul>
            </div>
  
        </div>
    </section>

@endsection