<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto">
        <a href="{{ url('/') }}"> 
          <img src="{{ asset('assets/frontend/img/logo.png') }}" class="img-fluid" alt="RTQ Karimah">
          <span class="h4">RTQ </span><span class="text-dark h4">Karimah</span>
        </a>
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="{{ url('/') }}" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="{{ url('/') }}" class="{{ set_active('halaman-utama') }}">Halaman Utama</a></li>

          <li class="dropdown"><a href="#"><span>Program</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('program-santri') }}" class="{{ set_active('program-santri') }}" style="text-transform: uppercase;">Program Santri PDHQ/PGQ</a></li>
              <li><a href="{{ url('program-tahsin-tahfidz-ikhwan') }}" class="{{ set_active('program-tahsin-tahfidz-ikhwan') }}" style="text-transform: uppercase;">Tahsin/Tahfidz Ikhwan</a></li>
              <li><a href="{{ url('program-tahsin-tahfidz-akhwat') }}" class="{{ set_active('program-tahsin-tahfidz-akhwat') }}" style="text-transform: uppercase;">Tahsin/Tahfidz Akhwat</a></li>
              <li><a href="{{ url('program-tahsin-tahfidz-anak') }}" class="{{ set_active('program-tahsin-tahfidz-anak') }}" style="text-transform: uppercase;">Tahsin/Tahfidz Anak</a></li>
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
            </ul>
          </li>

          <li><a href="{{ url('layanan') }}" class="{{ set_active('layanan') }}">Layanan</a></li>
          <li><a href="{{ url('galeri') }}" class="{{ set_active('galeri') }}">Galeri</a></li>
          <li><a href="{{ url('donasi') }}" class="{{ set_active('donasi') }}">Donasi</a></li>
          <li><a href="{{ url('laporan-informasi') }}" class="{{ set_active('laporan-informasi') }}">Laporan & Informasi</a></li>
          <li><a href="{{ url('kontak') }}" class="{{ set_active('kontak') }}">Kontak</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex d-none d-sm-block">
        <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->