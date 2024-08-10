<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .whatsapp-button {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 1000;
    }
    .link_chat img {
      height: 50px;
      width: 50px;
    }
    .modal-content {
      border-radius: 10px;
      padding: 2rem;
      width: 100px;
      height: 550px;
      word-wrap: break-word; /* Menambahkan word-wrap */
      overflow-wrap: break-word; /* Tambahan untuk dukungan browser lainnya */
    }
    .modal-header {
      background-color: #007bff;
      color: #fff;
      border-bottom: none;
      border-radius: 10px 10px 0 0;
    }
    .modal-title {
      font-size: 1.5rem;
      font-weight: bold;
    }
    .modal-body {
      padding: 2rem;
      width: 400px;
      height: 400px; /* Atur tinggi otomatis */
      max-height: 80vh; /* Maksimum tinggi 80% dari tinggi viewport */
      /* overflow-y: auto; Tambahkan scroll jika konten melebihi tinggi */
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }
    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #004085;
    }
    .form-label {
      font-weight: bold;
    }
    .form-control {
      border-radius: 0.25rem;
      box-shadow: none;
      border: 1px solid #ffffff;
    }
    .form-control:focus {
      box-shadow: none;
      border-color: #007bff;
    }
    .form-control.short-input {
      max-width: 300px; /* Atur lebar maksimal input field */
    }
    #resultModal .modal-body {
      padding: 1.5rem;
    }
    .result-title {
      font-size: 1.25rem;
      font-weight: bold;
    }
    .result-item {
      margin: 0.5rem 0;
      border: 1px solid #ced4da;  
      border-radius: 0.25rem;
      padding: 0.5rem;
      background-color: #ffffff;
    }
    .main-banner {
  background-image: url('../pemanis/assets/images/bg.jpeg');
  background-size: cover; /* Make sure the background covers the entire container */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Prevent background from repeating */
  padding: 60px 0; /* Add some padding to make the content look better */
  color: #fff; /* Set default text color to white to contrast with the background */
}
    
    
  </style>
</head>
<body>
  <div class="pace pace-inactive">
    <div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
      <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div>
  </div>

  <div class="whatsapp-button">
    <a href="https://wa.me/628112103595?" class="link_chat">
      <img src="https://koptel.co.id/assets/img/whatsapp.png" alt="WhatsApp">
    </a>
  </div>


    <title>Space Dynamic - SEO HTML5 Template</title>
    

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('pemanis/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('pemanis/assets/css/templatemo-space-dynamic.css') }}">
    <link rel="stylesheet" href="{{ asset('pemanis/assets/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('pemanis/assets/css/owl.css') }}">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!--
    
TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <a href="{{ route('home') }}" class="logo">
              <!-- Logo with Image -->
              <img src="pemanis/assets/images/logo.png" alt="KopTel Logo" style="height: 75px; width: auto;">
              <!-- Optional: Keep the text as well --> 
            </a>
          
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
                <li><a href="#top" class="active">Beranda</a></li>
                <li><a href="/about">Tentang Kami</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Layanan Kami</a>
                    <div class="dropdown-content" style="background-color: #ffffff; width: auto; font-size: 10px;">
                        <a href="/vehicle">Telco Vehicle</a>
                        <a href="/telhome">Telco Home</a>
                        <a href="/super">Telco Super</a>
                    </div>
                </li>
                <li><a href="/berita">Berita</a></li>

                {{-- <li><a href="#contact">Message Us</a></li> --}}
                <li><div class="main-red-button"><a href="#contact">Hubungi Kami</a></div></li>
            </ul>
    
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  

  <div class="main-banner wow fadeIn main-content" id="top" data-wow-duration="1s" data-wow-delay="0.5s" >
    
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <h6>Selamat datang di Koperasi Telkom</h6>
                <h2>Meningkatkan <em>Kesejahteraan</em> <span>Anggota</span></h2>
                <p>KOPTEL merupakan koperasi sekunder di bawah naungan PT. Telkom Indonesia.</p>
                <!-- Button to trigger credit simulation modal -->
                {{-- <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#kreditModal">
                  Simulasi Kredit
                </button>
  
                <!-- Credit Simulation Modal -->
                <div class="modal fade" id="kreditModal" tabindex="-1" aria-labelledby="kreditModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="kreditModalLabel">Simulasi Kredit</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form id="simulasiKreditForm" class="d-flex flex-column justify-content-between" style="flex-grow: 1;">
                          <div>
                            <div class="mb-3">
                              <label for="principal" class="form-label">Jumlah Pinjaman</label>
                              <input type="number" class="form-control short-input" id="principal" placeholder="Masukkan jumlah pinjaman" required>
                            </div>
                            <div class="mb-3">
                              <label for="interestRate" class="form-label">Suku Bunga (%)</label>
                              <input type="number" class="form-control short-input" id="interestRate" placeholder="Masukkan suku bunga per tahun" required>
                            </div>
                            <div class="mb-3">
                              <label for="tenure" class="form-label">Jangka Waktu (tahun)</label>
                              <input type="number" class="form-control short-input" id="tenure" placeholder="Masukkan jangka waktu pinjaman" required>
                            </div>
                          </div>
                        </form>
                        <button type="button" class="btn btn-primary align-self-end" id="calculateButton">Hitung</button>
                      </div>
                    </div>
                  </div>
                </div> <!-- End of Credit Simulation Modal -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 

  <!-- Result Modal -->
  <div class="modal fade" id="resultModal" tabindex="-1" aria-labelledby="resultModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="resultModalLabel">Hasil Simulasi Kredit</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="result">
          <!-- Hasil perhitungan akan ditampilkan di sini -->
        </div>
      </div>
    </div>
  </div> --}}
              </div>
            </div>
            <style>
              .right-image img {
                max-width: 100%;
                height: auto;
                border-radius: 30px;
              }

              .img-hero{
                border: 4px solid black;
              }
            </style>
          </head>
            {{-- <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img id="slideshow-image"class="img-hero" src="pemanis/assets/images/banner-right-image.png" alt="team meeting">
              </div>
            </div> --}}
          
            {{-- <script>
              const images = [
                'pemanis/assets/images/berita.png',
                // 'pemanis/assets/images/penyerahan.png',
                'pemanis/assets/images/kerjasama.png',
                'pemanis/assets/images/divre.png'
              ];
          
              let currentIndex = 0;
          
              function changeImage() {
                const imgElement = document.getElementById('slideshow-image');
                currentIndex = (currentIndex + 1) % images.length;
                imgElement.src = images[currentIndex];
              }
          
              setInterval(changeImage, 3000); // Ganti gambar setiap 3 detik (3000 ms)
            </script>  --}}
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <img src="pemanis/assets/images/koptel2.png" alt="person graphic">
          </div>
        </div>
        <div class="col-lg-8 align-self-center">
            <div class="banner-container">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h1 class="text-white">Layanan Kami</h1>
                    </div>
                </div>
                
                <style>
                .text-white {
                    color: white;
                }
                </style>
                
                <div class="services">
                  <div class="row">
                      <div class="col-lg-12">
                          <a href="/vehicle">
                              <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                  <div class="icon">
                                      <img src="pemanis/assets/images/service-icon-01.png" alt="telco vehicle">
                                  </div>
                                  <div class="right-text">
                                      <h4>Telco Vehicle</h4>
                                      <p>Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter</p>
                                  </div>
                              </div>
                          </a>
                      </div>
                      <div class="col-lg-12">
                          <a href="/super">
                              <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                                  <div class="icon">
                                      <img src="pemanis/assets/images/service-icon-02.png" alt="telco super">
                                  </div>
                                  <div class="right-text">
                                      <h4>Telco Super</h4>
                                      <p>Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter</p>
                                  </div>
                              </div>
                          </a>
                      </div>
                      <div class="col-lg-12">
                          <a href="/telhome">
                              <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                                  <div class="icon">
                                      <img src="pemanis/assets/images/service-icon-03.png" alt="telco home">
                                  </div>
                                  <div class="right-text">
                                      <h4>Telco Home</h4>
                                      <p>Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter</p>
                                  </div>
                              </div>
                          </a>
                      </div>
                  </div>
              </div>
                
                <style>
                    .item {
                        margin-bottom: 20px; /* Tambahkan jarak antar item */
                    }
                    .right-text h4, .right-text p {
                        color: #fff; /* Atur warna teks menjadi putih */
                    }
                </style>
                
                    </div>
                </div>
            </div>
        </div>
        
        <style>

        #about{
            margin-top: -5%;
        }
        .banner-container {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
        }
        
        .section-heading {
            text-align: left;
        }
        
        .services {
            margin-top: 20px;
            margin-left: 100px;
        }
        </style>
        
      </div>
    </div>
  </div>

  {{-- <div id="services" class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="left-image">
            <img src="pemanis/assets/images/services-left-image.png" alt="">
          </div>
        </div> --}}
        {{-- <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="section-heading">
            <h2>Grow your website with our <em>SEO</em> service &amp; <span>Project</span> Ideas</h2>
            <p>Space Dynamic HTML5 template is free to use for your website projects. However, you are not permitted to redistribute the template ZIP file on any CSS template collection websites. Please contact us for more information. Thank you for your kind cooperation.</p>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="first-bar progress-skill-bar">
                <h4>Website Analysis</h4>
                <span>84%</span>
                <div class="filled-bar"></div>
                <div class="full-bar"></div>
              </div>
            </div> --}}
            {{-- <div class="col-lg-12">
              <div class="second-bar progress-skill-bar">
                <h4>SEO Reports</h4>
                <span>88%</span>
                <div class="filled-bar"></div>
                <div class="full-bar"></div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="third-bar progress-skill-bar">
                <h4>Page Optimizations</h4>
                <span>94%</span>
                <div class="filled-bar"></div>
                <div class="full-bar"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  <div id="portfolio" class="our-portfolio section">
    {{-- <div class="container"> --}}
      <div class="row">
        {{-- <div class="col-lg-6 offset-lg-3">
          <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2>Layanan <em>Kami</em></h2>
          </div>
        </div> --}}
      {{-- </div> --}}
      <div class="row justify-content-center">
        <div class="col-lg-3 col-sm-6">
            <a href="/vehicle">
                <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="hidden-content">
                        <h4>TELCO VEHICLE</h4>
                        <p>Layanan KOPTEL berupa pembiayaan Kepemilikan Kendaraan Baru...</p>
                    </div>
                    <div class="showed-content">
                        <img src="pemanis/assets/images/mobil.png" alt="">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-sm-6">
            <a href="/super">
                <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div class="hidden-content">
                        <h4>TELCO SUPER</h4>
                        <p>Pembiyaan multiguna dari KOPTEL sebagai sarana penunjang kebutuhan yang beragam dari telkomers...</p>
                    </div>
                    <div class="showed-content">
                        <img src="pemanis/assets/images/uang.png" alt="">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-sm-6">
            <a href="telhome">
                <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="hidden-content">
                        <h4>TELCO HOME</h4>
                        <p>Kredit Pemilikan Rumah (KPR). Untuk pembelian Tempat tinggal...</p>
                    </div>
                    <div class="showed-content">
                        <img src="pemanis/assets/images/rumah.png" alt="">
                    </div>
                </div>
            </a>
        </div>
    </div>
    
    <style>
        #portfolio{
            margin-top: -3%;
        }
        .item {
            position: relative;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .showed-content {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 100%;
        }
        .showed-content img {
            max-width: 100%;
            max-height: 100%;
        }
    </style>
    

  <div id="blog" class="our-blog section mb-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h1>BERITA TERBARU </h1>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="top-dec">
            <img src="pemanis/assets/images/logo.png"style="height: 100px; width: auto; alt=">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="left-image">
            <a href="#"><img src="pemanis/assets/images/berita.png" width="100" height="400" alt=""></a>
            <div class="info">
              <div class="inner-content">
                <ul>
                  {{-- <li><i class="fa fa-calendar"></i>  2022-11-21 13:44:271</li> --}}
                </ul>
                <a href="/berita"><h4>HUT KOPTEL KE - 32</h4></a>
                <p>HUT KOPTEL - (21/11/2022, Bandung) – Hari ini pada Tanggal 21 November 2022 KOPTEL berulang tahun ke-32...</p>
                <div class="main-blue-button mb-3">
                  <a href="/berita">Berita lainnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="left-image">
            <a href="#"><img src="pemanis/assets/images/divre.png" width="100" height="400" alt=""></a>
            <div class="info">
              <div class="inner-content">
                <ul>
                  {{-- <li><i class="fa fa-calendar"></i>  2022-11-21 13:44:271</li> --}}
                </ul>
                <a href="/berita"><h4>KERJASAMA KOPTEL - APARTMENT ATLANTA DEPOK - DIVRE II</h4></a>
                <p> Telah dilakukan penandatanganan kerjasama pemasaran apartment Atlanta bagi karyawan Telkom Group....</p>
                {{-- <div class="main-blue-button mt-5 pt-5">
                  <a href="/berita">Selengkapnya</a>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="right-list">
            <ul>
              <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i> 2020-06-18 08:53:35</span>
                  <a href="#"><h4>KERJASAMA KOPTEL - GREEN AVENUE APARTMENT, LRT CITY BEKASI</h4></a>
                  <p>PT Adhi Commuter Property, salah satu anak perusahaan dari BUMN AdhiKarya yang mendapat privilage pembangunan proyek LRT ...</p>
                </div>
                <div class="right-image">
                  <a href="#"><img src="pemanis/assets/images/kerjasama.png" alt=""></a>
                </div>
              </li>
              <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i>2020-06-18 09:14:01 </span>
                  <a href="#"><h4>KERJASAMA KOPTEL - APARTMENT ATLANTA DEPOK - DIVRE II</h4></a>
                  <p>Tanggal 3 Februari 2020 bertempat di Apartment Atlanta Jalan Margonda Depok, telah dilakukan penandatanganan...</p>
                </div>
                <div class="right-image">
                  <a href="#"><img src="pemanis/assets/images/divre.png" alt=""></a>
                </div>
              </li>
              
              <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i> 2020-06-16 13:45:38</span>
                  <a href="#"><h4>RAT KOPTEL Tahun Buku 2019</h4></a>
                  <p>Rapat Anggota Tahunan KOPTEL tahun buku 2019 telah dilaksanakan pada tanggal 8 Juni 2020...</p>
                </div>
                <div class="right-image">
                  <a href="#"><img src="pemanis/assets/images/rat.png" alt=""></a>
                </div>
              </li>
            </ul>
          </div>
        </div> --}}
      </div>
    </div>
  </div>

  {{-- <div id="contact" class="contact-us sectionm mb-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>Feel Free To Send Us a Message About Your Website Needs</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doer ket eismod tempor incididunt ut labore et dolores</p>
            <div class="phone-info">
              <h4>For any enquiry, Call Us: <span><i class="fa fa-phone"></i> <a href="#">010-020-0340</a></span></h4>
            </div>
          </div>
        </div> --}}
        {{-- <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
          
          <form id="contact" action="" method="post">
            <div class="row"> --}}
              {{-- <div class="col-lg-6">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                </fieldset>
              </div> --}}
              {{-- <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                </fieldset>
              </div>
            </div>
            <div class="contact-dec">
              <img src="pemanis/assets/images/contact-decoration.png" alt="">
            </div> --}}
          {{-- </form>
        </div>
      </div>
    </div>
  </div> --}}
    <div class="mt-5 pt-5 map_main">
      <div class="map-responsive" style="border: 5px solid #000; padding: 10px; border-radius: 10px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.4494463030883!2d107.6241818449691!3d-6.902693531186324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7b4650aa5ad%3A0x8ea35f88388b0932!2sKoperasi%20Telkom!5e0!3m2!1sid!2sid!4v1718810756969!5m2!1sid!2sid" width="1440" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    
    <footer style="background-color: #df5950; color: #fff; ;"class="mt-5 pt-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
            <p style="color: #fff;">© Copyright 2024. All Rights Reserved.
              {{-- <br>Design: <a rel="nofollow" href="https://templatemo.com" style="color: #fff;">TemplateMo</a> --}}
            </p>
          </div>
        </div>
      </div>
    </footer>
    
    
  <!-- Scripts -->
  <!-- Include Bootstrap's JavaScript if not already included -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('assets/js/animation.js') }}"></script>
  <script src="{{ asset('assets/js/imagesloaded.js') }}"></script>
  <script src="{{ asset('assets/js/templatemo-custom.js') }}"></script>
  {{-- <script>
    $(document).ready(function(){
        $("#bannerCarousel").carousel();
    });
    <script>
$(document).ready(function() {
    $('.dropdown-toggle').click(function(event) {
        event.preventDefault();
        var $dropdownMenu = $(this).next('.dropdown-menu');
        $dropdownMenu.toggle();
    });

    // Close the dropdown if the user clicks outside of it
    $(document).click(function(event) {
        if (!$(event.target).closest('.dropdown').length) {
            $('.dropdown-menu').hide();
        }
    });
});
</script> --}}

<script>
    $(document).ready(function(){
        $("#bannerCarousel").carousel();
    });
    $(document).ready(function() {
            // Menyembunyikan dropdown saat dokumen siap (ready)
            $('.dropdown-content').hide();

            // Mengatur klik untuk menampilkan dropdown
            $('.dropbtn').click(function(e) {
                e.preventDefault(); // Mencegah link dropdown diikuti
                var dropdownContent = $(this).next('.dropdown-content');
                $('.dropdown-content').not(dropdownContent).hide(); // Menyembunyikan dropdown lainnya
                dropdownContent.toggle();
            });

            // Menyembunyikan dropdown saat klik di luar dropdown
            $(document).click(function(e) {
                var target = e.target;
                if (!$(target).is('.dropbtn') && !$(target).parents().is('.dropdown')) {
                    $('.dropdown-content').hide();
                }
            });

            // Mencegah menutup dropdown saat di dalam dropdown
            $('.dropdown-content').click(function(e) {
                e.stopPropagation();
            });
        });

        // Memastikan dropdown disembunyikan saat halaman dimuat ulang (reload)
        $(window).on('load', function() {
            $('.dropdown-content').hide();
        });

        $(window).on('load', function() {
           setTimeout(() => {
            $('#js-preloader').hide();
            $('.main-content').show();
           }, 1000);
        });
        $(document).ready(function(){
      $('#calculateButton').on('click', function() {
        var principal = parseFloat($('#principal').val());
        var interestRate = parseFloat($('#interestRate').val()) / 100;
        var tenure = parseFloat($('#tenure').val());

        var monthlyRate = interestRate / 12;
        var numberOfPayments = tenure * 12;
        var monthlyPayment = (principal * monthlyRate) / (1 - Math.pow(1 + monthlyRate, -numberOfPayments));
        var totalPayment = monthlyPayment * numberOfPayments;
        var totalInterest = totalPayment - principal;

        var resultHtml = `
          <div class="result-title">Hasil Simulasi:</div>
          <div class="result-item">Angsuran Bulanan: Rp ${monthlyPayment.toFixed(2)}</div>
          <div class="result-item">Total Pembayaran: Rp ${totalPayment.toFixed(2)}</div>
          <div class="result-item">Total Bunga: Rp ${totalInterest.toFixed(2)}</div>
        `;
        
        
        $('#result').html(resultHtml);
        $('#kreditModal').modal('hide'); // Menyembunyikan modal simulasi kredit
        $('#resultModal').modal('show'); // Menampilkan modal hasil perhitungan
        
      }); 
    });

        
</script>
    


</body>
</html>