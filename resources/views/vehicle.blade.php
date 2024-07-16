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
    <a href="https://wa.me/628112103595?text=Assalamualaikum%20Hallo%20KOPTEL%20Mohon%20info%20super" class="link_chat">
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
                <li><a href="/home">Beranda</a></li>
                <li><a href="#about">Tentang Kami</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Layanan Kami</a>
                    <div class="dropdown-content" style="background-color: #ffffff; width: auto; font-size: 10px;">
                        <a href="/vehicle">Telco Vehicle</a>
                        <a href="/telhome">Telco Home</a>
                        <a href="/super">Telco Super</a>
                    </div>
                </li>
                <li><a href="/berita">Berita</a></li>

                <li><a href="#contact">Message Us</a></li>
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
           }, 100);
        });

        
</script>