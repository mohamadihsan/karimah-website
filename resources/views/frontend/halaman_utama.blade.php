
{{-- extends layout --}}
@extends('layouts/_frontend/template')

{{-- add page title --}}
@section('title')
    Halaman Utama
@endsection

{{-- add meta description --}}
@section('description')
    <meta content="" name="description">
@endsection

{{-- add carousel --}}
@section('carousel')
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url({{ asset('assets/frontend/img/slide/slide-1.jpg') }});background-size: cover;margin-top: 4em;width: 100%;">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                        <h2>السلام عليكم ورحمة الله وبركاته</h2>
                        <p class="h5" style="text-align: justify;">
                            <span class="text-warning">*DIBUKA PENDAFTARAN PENDIDIKAN DA'I HAFIZH AL-QUR’AN (PDHQ) RTQ KARIMAH* TAHUN 2021</span><br>
                            Alhamdulillah telah dibuka pendaftaran santri PDHQ/PGQ beasiswa (Bebas biaya asrama, pendidikan, & makan), <em><strong> Khusus Akhwat </strong></em><br>
                            <span class="text-warning"><strong>*Kuota Terbatas*</strong></span>
                        </p>
                        <!-- <div class="text-center"><a href="laporan-informasi.html" class="btn-get-started">DAFTAR</a></div> -->
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url({{ asset('assets/frontend/img/slide/slide-2.jpg') }});background-size: cover;margin-top: 4em;width: 100%;">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                        <h2>الْمَاهِرُ بِالْقُرْآنِ مَعَ السَّفَرَةِ الْكِرَامِ الْبَرَرَةِ وَالَّذِي يَقْرَأُ الْقُرْآنَ وَيَتَتَعْتَعُ فِيهِ وَهُوَ عَلَيْهِ شَاقٌّ لَهُ أَجْرَانِ </h2>
                        <p style="text-align: justify;">
                            “Orang yang pandai membaca Al-Qur`an, dia bersama para malaikat yang mulia dan patuh. Sedangkan orang yang membaca Al-Qur`an dengan terbata-bata dan berat melafalkannya, maka dia mendapat dua pahala.” (Muttafaq Alaih)
                        </p>
                        <!-- <div class="text-center"><a href="laporan-informasi.html" class="btn-get-started">Laporan & Informasi</a></div> -->
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url({{ asset('assets/frontend/img/slide/slide-3.jpg') }});background-size: cover;margin-top: 4em;width: 100%;">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                        <h2>نْ أَبِي أُمَامَةَ الْبَاهِلِيِّ قَالَ: قَالَ رَسُولُ اللهِ صَلَّى اللهُ عَلَيْهِ وَسَلَّمَ: اقْرَءُوا الْقُرْآنَ؛ فَإِنَّهُ يَأْتِي شَفِيعًا يَوْمَ الْقِيَامَةِ لِصَاحِبِهِ</h2>
                        <p style="text-align: justify;">
                            “Rasulullah shallallahu ‘alaihi wasallam bersabda, ‘Bacalah Al-Qur’an. Sebab, ia akan datang memberikan syafaat pada hari Kiamat kepada pemilik (pembaca, pengamal)-nya,” 
                            <br/><b>(HR. Ahmad)</b>
                        </p>
                        <!-- <div class="text-center"><a href="laporan-informasi.html" class="btn-get-started">Laporan & Informasi</a></div> -->
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        </div>
    </section><!-- End Hero -->
@endsection

{{-- add content --}}
@section('content')
    
    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
        <div class="container" data-aos="fade-up">

            <div class="row content">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 style="text-transform: capitalize;">Menjadi pusat studi ilmu Al-Qur’an di Indonesia</h2>
                    <!-- <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave</h3> -->
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                    <p style="text-align: justify;">
                    “Segala puji bagi Allah yang telah menurunkan kepada hamba-Nya Al Kitab (Al-Qur’an) dan Dia tidak mengadakan kebengkokan di dalamnya; sebagai bimbingan yang lurus, untuk memperingatkan akan siksaan yang sangat pedih dari sisi Allah dan memberi berita gembira kepada orang-orang yang beriman, yang mengerjakan amal saleh, bahwa mereka akan mendapat pembalasan yang baik, mereka kekal di dalamnya untuk selama-lamanya.” ( Al Kahfi: 1-3)
                    </p>
                    <!-- <ul>
                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
                    <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
                    </ul> -->
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Programs Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Program</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue">
                        <div class="icon">
                            <!-- <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                            </svg>
                            <i class="bx bxl-dribbble"></i> -->
                            <img src="{{ asset('assets/frontend/img/programs/santri.png') }}" alt="program santri PDHQ - PGQ" srcset="" width="120" height="120">
                        </div>
                        <h4><a href="">Program Santri PDHQ/PGQ</a></h4>
                        <p>Proses kegiatan bimbingan berjalan selama 2 tahun dengan berbagai program didalamnya</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-orange ">
                        <div class="icon">
                            <!-- <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                            </svg>
                            <i class="bx bx-file"></i> -->
                            
                            <img src="{{ asset('assets/frontend/img/programs/ikhwan.png') }}" alt="program tahsin tahfidz ikhwan" srcset="" width="100" height="100">
                        </div>
                        <h4><a href="">Tahsin / Tahfidz Ikhwan</a></h4>
                        <p>Proses kegiatan bimbingan berjalan selama 3 bulan lamanya atau 12x pertemuan setiap levelnya</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-pink">
                        <div class="icon">
                            <img src="{{ asset('assets/frontend/img/programs/akhwat.png') }}" alt="program tahsin tahfidz akhwat" srcset="" width="100" height="100">
                        </div>
                        <h4><a href="">Tahsin / Tahfidz Akhwat</a></h4>
                        <p>Proses kegiatan bimbingan berjalan selama 3 bulan lamanya atau 12x pertemuan setiap levelnya</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-yellow">
                        <div class="icon">
                            <!-- <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                            </svg>
                            <i class="bx bx-layer"></i> -->
                            <img src="{{ asset('assets/frontend/img/programs/anak.png') }}" alt="program tahsin tahfidz anak" srcset="" width="200" height="100">
                        </div>
                        <h4><a href="">Tahsin / Tahfidz Anak</a></h4>
                        <p>Proses kegiatan bimbingan berjalan selama 3 bulan lamanya atau 12x pertemuan setiap levelnya</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Programs Section -->

    <!-- ======= Location Section ======= -->
    <section id="location" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Lokasi</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue">
                        <div class="icon">
                            <img src="{{ asset('assets/frontend/img/locations/karimah-pesona-citayam.png') }}" alt="RTQ karimah pesona citayam bogor" srcset="" width="120" height="120">
                        </div>
                        <h4><a href="">RTQ Karimah Pesona Citayam</a></h4>
                        <p>Komplek Pesona Citayam blok B 11 A no.12, Susukan, Kec. Bojong Gede, Bogor, Jawa Barat 16920</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-orange ">
                        <div class="icon">
                            <img src="{{ asset('assets/frontend/img/locations/karimah-villa-citayam.png') }}" alt="RTQ karimah villa citayam bogor" srcset="" width="120" height="120">
                        </div>
                        <h4><a href="">RTQ Karimah Villa Citayam</a></h4>
                        <p>Komplek Perumahan Villa Citayam, blok C3 no.12 Susukan, Kec. Bojong Gede, Bogor, Jawa Barat 16920</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-pink">
                        <div class="icon">
                            <img src="{{ asset('assets/frontend/img/locations/asrama-santri.png') }}" alt="asrama santri RTQ karimah pesona citayam" srcset="" width="120" height="120">
                        </div>
                        <h4><a href="">Asrama Santri Pesona Citayam</a></h4>
                        <p>Komplek Pesona Citayam blok C 09 A no.05, Susukan, Kec. Bojong Gede, Bogor, Jawa Barat 16920</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Location Section -->

    <!-- ======= Donation Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Donasi</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue">
                        <div class="icon">
                            <img src="{{ asset('assets/frontend/img/locations/asrama-santri.png') }}" alt="donasi pembebasan asrama santri" srcset="" width="120" height="120">
                        </div>
                        <h4><a href="">Pembebasan Asrama Santri</a></h4>
                        <p>Pembebasan Asrama Santri digalangkan untuk mendukung jalannya program-program</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-orange ">
                        <div class="icon">
                            <img src="{{ asset('assets/frontend/img/locations/karimah-pesona-citayam.png') }}" alt="renovasi RTQ karimah pesona citayam" srcset="" width="100" height="100">
                        </div>
                        <h4><a href="">Renovasi RTQ Karimah</a></h4>
                        <p>Renovasi RTQ Karimah dilakukan untuk menambah ruangan belajar supaya proses belajar mengajar menjadi lebih nyaman</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stre tch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-pink">
                        <div class="icon">
                            <img src="{{ asset('assets/frontend/img/programs/santri.png') }}" alt="beasiswa santri" srcset="" width="100" height="100">
                        </div>
                        <h4><a href="">Beasiswa Santri PDHQ/PGQ</a></h4>
                        <p>Beasiswa akan diberikan kepada para santri yang mondok di asrama untuk mendukung segala kebutuhan para santri</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-pink">
                        <div class="icon">
                            <img src="{{ asset('assets/frontend/img/programs/akhwat.png') }}" alt="beasiswa bimbingan tahsin tahfidz" srcset="" width="100" height="100">
                        </div>
                        <h4><a href="">Beasiswa Bimbingan Tahsin / Tahfidz</a></h4>
                        <p>Beasiswa akan diberikan kepada peserta bimbingan yang kurang mampu secara keuangan</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Donation Section -->

    <!-- ======= Our Connections Section ======= -->
    <section id="connections" class="clients">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Koneksi</h2>
            </div>

            <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="{{ asset('assets/frontend/img/connections/al-utsmani.png') }}" class="img-fluid" alt="lembaga qur'an al-utsmani">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="{{ asset('assets/frontend/img/connections/hpai.png') }}" class="img-fluid" alt="hpai">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="client-logo">
                    <!-- <img src="{{ asset('assets/frontend/img/connections/hpai.png') }}" class="img-fluid" alt=""> -->
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="client-logo">
                    <!-- <img src="{{ asset('assets/frontend/img/connections/hpai.png') }}" class="img-fluid" alt=""> -->
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Our Connections Section -->

@endsection