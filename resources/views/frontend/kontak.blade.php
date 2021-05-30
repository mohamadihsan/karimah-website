
{{-- extends layout --}}
@extends('layouts/_frontend/template')

{{-- add page title --}}
@section('title')
    Kontak
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
                <h2>Kontak</h2>
                <ol>
                    <li><a href="index.html">Halaman Utama</a></li>
                    <li>Kontak</li>
                </ol>
            </div>
  
        </div>
    </section><!-- End Breadcrumbs -->
  
    <!-- ======= Contact Section ======= -->
    <div class="map-section">
        <!-- <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe> -->
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126887.08564440228!2d106.7476730035721!3d-6.365383482957109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e9c1b033216b%3A0xc419d323019db5d5!2sRTQ%20KARIMAH!5e0!3m2!1sid!2sid!4v1618219964062!5m2!1sid!2sid" allowfullscreen="" loading="lazy"></iframe>
    </div>
  
    <section id="contact" class="contact">
        <div class="container">
    
            <div class="row justify-content-center" data-aos="fade-up">
    
                <div class="col-lg-10">
    
                    <div class="info-wrap">
                        <div class="row">
                            <div class="col-lg-4 info">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Lokasi:</h4>
                                <p style="font-size: 1rem;">
                                Komplek Pesona Citayam <br> 
                                Blok B 11 A No.12, Susukan,<br> Kec. Bojong Gede <br>
                                Bogor, Jawa Barat 16920 <br>
                                </p>
                            </div>
            
                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p style="font-size: 1rem;">rtqkarimah@gmail.com</p>
                            </div>
            
                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="bi bi-phone"></i>
                                <h4>Telepon / WhatsApp:</h4>
                                <p style="font-size: 1rem;">
                                +6285 720 054 204 <br>
                                </p>
                            </div>
                        </div>
                    </div>
    
                </div>
    
            </div>
    
            <!-- <div class="row mt-5 justify-content-center" data-aos="fade-up">
                <div class="col-lg-10">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                    </div>
                    <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
                </div>
    
            </div> -->
    
        </div>
    </section><!-- End Contact Section -->

@endsection