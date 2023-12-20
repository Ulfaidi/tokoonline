<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('web') }}/css/app.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css" />
    <link rel="stylesheet" type="text/css" href="https://ditusi.co.id/assets/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&family=Cabin:wght@700&family=Hanken+Grotesk&family=Mirza:wght@600&display=swap"
        rel="stylesheet">

    <!-- font -->


    <title>E-commerce</title>
</head>

<body>
    <div class="content">

        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>

        </ul>

        <div class="content-body">

            <div class="navbar-top">
                <nav class="navbar">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="#" class="nav-link ml-auto">
                                <a class="nav-link" href="#">
                                    <iconify-icon icon="mdi:cart"></iconify-icon>
                                </a>
                            </a>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- PENCARIAN -->
            @if (session('status'))
                <div id="statusAlert" class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>

                <script>
                    // Hapus elemen setelah 5 detik
                    setTimeout(function() {
                        $('#statusAlert').fadeOut('slow');
                    }, 5000);
                </script>
            @endif

            <div class="cari">
                <form onkeydown="return event.key != 'Enter';">
                    <input type="text" class="form-control search-input" placeholder="Mau cari apa kak ?">
                </form>
            </div>
            <!-- PENCARIAN END -->

            <!-- CAROUSEL -->

            <div id="carouselExampleIndicators" class="carousel slide mt-4" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('web') }}/img/slider/01.png" class="d-block w-100 rounded"
                            style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);">
                    </div>
                    <div class="carousel-item ">
                        <img src="{{ asset('web') }}/img/slider/03.png" class="d-block w-100 rounded"
                            style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);">
                    </div>
                </div>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        class=""></button>
                </div>
            </div>

            <!-- CAROUSEL END-->

            <!--  KATEGORI -->
            <div class="wrapper mt-5">
                <div class="section-title-tag mb-3 ">
                    <h3 class="animate-flicker-tag"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" class="h-8 w-8">
                            <g transform="rotate(90 12 12)">
                                <path fill="currentColor"
                                    d="M21.842 6.218a1.977 1.977 0 0 0-.424-.628A1.99 1.99 0 0 0 20 5H8c-.297 0-.578.132-.769.359l-5 6c-.309.371-.309.91 0 1.281l5 6c.191.228.472.36.769.36h12a1.977 1.977 0 0 0 1.41-.582A1.99 1.99 0 0 0 22 17V7c0-.266-.052-.525-.158-.782"
                                    style="color: #98E4FF;" />
                            </g>
                        </svg>KATEGORI</h3> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" class="h-8 w-8 animate-flicker-tag">
                        <g transform="rotate(90 12 12)">
                            <path fill="currentColor"
                                d="M21.842 6.218a1.977 1.977 0 0 0-.424-.628A1.99 1.99 0 0 0 20 5H8c-.297 0-.578.132-.769.359l-5 6c-.309.371-.309.91 0 1.281l5 6c.191.228.472.36.769.36h12a1.977 1.977 0 0 0 1.41-.582A1.99 1.99 0 0 0 22 17V7c0-.266-.052-.525-.158-.782"
                                style="color: #98E4FF;" />
                        </g>
                    </svg>
                </div>
                <div class="icon-scroll row d-flex flex-row flex-nowrap overflow-scroll">

                    <div class="card border-0 shadow-0 categori" style="width: 5rem;">
                        <img src="{{ asset('web') }}/img/icon/categori-tag.png" class="card-img-top mx-auto"
                            style="background:#98E4FF; width:2.5rem; border-radius:0.5rem;">
                        <p class="card-text text-center pt-1" style="font-size:12px;">Pakaian Wanita</p>
                    </div>

                    <div class="card border-0 shadow-0 categori" style="width: 5rem;">
                        <img src="{{ asset('web') }}/img/icon/categori-tag.png" class="card-img-top mx-auto"
                            style="background:#98E4FF; width:2.5rem; border-radius:0.5rem;">
                        <p class="card-text text-center pt-1" style="font-size:12px;">Pakaian Pria</p>
                    </div>

                    <div class="card border-0 shadow-0 categori" style="width: 5rem;">
                        <img src="{{ asset('web') }}/img/icon/categori-tag.png" class="card-img-top mx-auto"
                            style="background:#98E4FF; width:2.5rem; border-radius:0.5rem;">
                        <p class="card-text text-center pt-1" style="font-size:12px;">Celana Wanita</p>
                    </div>

                    <div class="card border-0 shadow-0 categori" style="width: 5rem;">
                        <img src="{{ asset('web') }}/img/icon/categori-tag.png" class="card-img-top mx-auto"
                            style="background:#98E4FF; width:2.5rem; border-radius:0.5rem;">
                        <p class="card-text text-center pt-1" style="font-size:12px;">Celana Pria</p>
                    </div>

                    <div class="card border-0 shadow-0 categori" style="width: 5rem;">
                        <img src="{{ asset('web') }}/img/icon/categori-tag.png" class="card-img-top mx-auto"
                            style="background:#98E4FF; width:2.5rem; border-radius:0.5rem;">
                        <p class="card-text text-center pt-1" style="font-size:12px;">Aksesoris</p>
                    </div>

                    <div class="card border-0 shadow-0 categori" style="width: 5rem;">
                        <img src="{{ asset('web') }}/img/icon/categori-tag.png" class="card-img-top mx-auto"
                            style="background:#98E4FF; width:2.5rem; border-radius:0.5rem;">
                        <p class="card-text text-center pt-1" style="font-size:12px;">Tas</p>
                    </div>

                </div>
            </div>

        </div>
        <!--  KATEGORI END-->


        <!-- FLASH SALE -->
        <section class="flash-sale">
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="section-title">
                            <h3 class="mb-3" style="font-size: 1.2rem;">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
                                    class="h-8 w-8 animate-flicker" height="1.2em" width="1.2em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5z"
                                        style="color: rgba(252,211,77);"></path>
                                </svg>
                                FLASH SALE
                                <span id="countdown"></span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="buying-step-card dark">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="flashsale-scroll row d-flex flex-row flex-nowrap overflow-scroll">

                                        <div class="card border-0 shadow-0 card-flash-sale">
                                            <img src="{{ asset('web') }}/img/produk/1.jpg" alt="">
                                        </div>

                                        <div class="card border-0 shadow-0 card-flash-sale">
                                            <img src="{{ asset('web') }}/img/produk/2.jpg" alt="">
                                        </div>

                                        <div class="card border-0 shadow-0 card-flash-sale">
                                            <img src="{{ asset('web') }}/img/produk/3.jpg" alt="">
                                        </div>

                                        <div class="card border-0 shadow-0 card-flash-sale">
                                            <img src="{{ asset('web') }}/img/produk/4.jpg" alt="">
                                        </div>

                                        <div class="card border-0 shadow-0 card-flash-sale">
                                            <img src="{{ asset('web') }}/img/produk/5.jpg" alt="">
                                        </div>

                                        <div class="card border-0 shadow-0 card-flash-sale">
                                            <img src="{{ asset('web') }}/img/produk/2.jpg" alt="">
                                        </div>

                                    </div>
                                </div>
                                <!-- <div class="col-12 mt-3">
                  <div class="section-title">
                    <h3 class="mb-3 animate-flicker" style="font-size: 2.2rem; text-align: center; color: rgba(252,211,77);">
                      COMING SOON <i class="fa fa-bullhorn" aria-hidden="true"></i>

                    </h3>
                  </div>
                </div> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FLASH SALE END-->


        <!-- PRODUK -->
        <div class="container">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="section-title-produk mb-3 ">
                        <h3><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" class="h-8 w-8 animate-flicker-produk">
                                <path fill="currentColor"
                                    d="M16.3 2.33a3.75 3.75 0 0 0-2.6 0L9.393 3.922A1.75 1.75 0 0 0 8.25 5.563v2.793a4.75 4.75 0 0 1 2.397.235l4.306 1.592a2.75 2.75 0 0 1 1.797 2.58v5.67c0 .322-.056.634-.16.926l4.017-1.484a1.75 1.75 0 0 0 1.143-1.642V5.563a1.75 1.75 0 0 0-1.143-1.641zm-4.53 4.878a.75.75 0 1 1 .49-1.418l2.658.92a.25.25 0 0 0 .163 0l2.65-.92a.75.75 0 1 1 .492 1.418l-2.65.919a1.75 1.75 0 0 1-1.145 0zM7.7 9.53a3.75 3.75 0 0 1 2.6 0l4.307 1.592a1.75 1.75 0 0 1 1.143 1.641v5.67a1.75 1.75 0 0 1-1.143 1.642L10.3 21.666a3.75 3.75 0 0 1-2.6 0l-4.307-1.592a1.75 1.75 0 0 1-1.143-1.642v-5.67a1.75 1.75 0 0 1 1.143-1.641zm-2.395 4.184a.75.75 0 0 0 .464.954l2.48.857v2.7a.75.75 0 0 0 1.5 0v-2.7l2.474-.857a.75.75 0 0 0-.491-1.417L9 14.197l-2.74-.948a.75.75 0 0 0-.955.464"
                                    style="color: #16b36a;" />
                            </svg>TERBARU</h3> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" class="h-8 w-8 animate-flicker-produk">
                            <path fill="currentColor"
                                d="M16.3 2.33a3.75 3.75 0 0 0-2.6 0L9.393 3.922A1.75 1.75 0 0 0 8.25 5.563v2.793a4.75 4.75 0 0 1 2.397.235l4.306 1.592a2.75 2.75 0 0 1 1.797 2.58v5.67c0 .322-.056.634-.16.926l4.017-1.484a1.75 1.75 0 0 0 1.143-1.642V5.563a1.75 1.75 0 0 0-1.143-1.641zm-4.53 4.878a.75.75 0 1 1 .49-1.418l2.658.92a.25.25 0 0 0 .163 0l2.65-.92a.75.75 0 1 1 .492 1.418l-2.65.919a1.75 1.75 0 0 1-1.145 0zM7.7 9.53a3.75 3.75 0 0 1 2.6 0l4.307 1.592a1.75 1.75 0 0 1 1.143 1.641v5.67a1.75 1.75 0 0 1-1.143 1.642L10.3 21.666a3.75 3.75 0 0 1-2.6 0l-4.307-1.592a1.75 1.75 0 0 1-1.143-1.642v-5.67a1.75 1.75 0 0 1 1.143-1.641zm-2.395 4.184a.75.75 0 0 0 .464.954l2.48.857v2.7a.75.75 0 0 0 1.5 0v-2.7l2.474-.857a.75.75 0 0 0-.491-1.417L9 14.197l-2.74-.948a.75.75 0 0 0-.955.464"
                                style="color: #16b36a;" />
                        </svg>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-show-all mb-3 ">
                            <a href="/produk" class="btn" id="countdown">Lihat Semua</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- SKELETON LOAD -->

        <div class="card-container skeleton-loader">
            <!-- Card 1 -->
            <div class="card-load loading">
                <div class="image-load"></div>
                <div class="content-load">
                    <h4></h4>
                    <div class="description-load"></div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card-load loading">
                <div class="image-load"></div>
                <div class="content-load">
                    <h4></h4>
                    <div class="description-load"></div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card-load loading">
                <div class="image-load"></div>
                <div class="content-load">
                    <h4></h4>
                    <div class="description-load"></div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="card-load loading">
                <div class="image-load"></div>
                <div class="content-load">
                    <h4></h4>
                    <div class="description-load"></div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="card-load loading">
                <div class="image-load"></div>
                <div class="content-load">
                    <h4></h4>
                    <div class="description-load"></div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="card-load loading">
                <div class="image-load"></div>
                <div class="content-load">
                    <h4></h4>
                    <div class="description-load"></div>
                </div>
            </div>
        </div>

        <!-- SKELETON LOAD -->

        <div class="container container-grid d-none" id="productContainer">
            <!-- Card 2 -->
            <div class="box">
                <div class="product-grid">
                    <div class="product-image">
                        <a class="image">
                            <img src="{{ asset('web') }}/img/produk/1.jpg" />
                        </a>
                        <a href="/detail">
                            <i class="fas fa-expand product-discount-label"></i>
                        </a>
                        <a href="" class="add-to-cart">
                            <iconify-icon icon="bxs:cart-add"></iconify-icon>
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a>Women's Blouse Top</a></h3>
                        <div class="price">$53.55 <span>$68.88</span></div>
                    </div>
                </div>
            </div>
            <!-- Card 1 -->
            <div class="box">
                <div class="product-grid">
                    <div class="product-image">
                        <a class="image">
                            <img src="{{ asset('web') }}/img/produk/2.jpg" />
                        </a>
                        <a href="/detail">
                            <i class="fas fa-expand product-discount-label"></i>
                        </a> <a href="" class="add-to-cart">
                            <iconify-icon icon="bxs:cart-add"></iconify-icon>
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a>Women's Blouse Top</a></h3>
                        <div class="price">$53.55 <span>$68.88</span></div>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="box">
                <div class="product-grid">
                    <div class="product-image">
                        <a class="image">
                            <img src="{{ asset('web') }}/img/produk/3.jpg" />
                        </a>
                        <a href="/detail">
                            <i class="fas fa-expand product-discount-label"></i>
                        </a> <a href="" class="add-to-cart">
                            <iconify-icon icon="bxs:cart-add"></iconify-icon>
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a>Women's Blouse Top</a></h3>
                        <div class="price">$53.55 <span>$68.88</span></div>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="box">
                <div class="product-grid">
                    <div class="product-image">
                        <a class="image">
                            <img src="{{ asset('web') }}/img/produk/4.jpg" />
                        </a>
                        <a href="/detail">
                            <i class="fas fa-expand product-discount-label"></i>
                        </a> <a href="" class="add-to-cart">
                            <iconify-icon icon="bxs:cart-add"></iconify-icon>
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a>Women's Blouse Top</a></h3>
                        <div class="price">$53.55 <span>$68.88</span></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PRODUK -->



        <!-- SIDE CION RIGHT -->

        <div class="containerWA">
            <div class="areaWA">
                <!-- WhatsApp Button -->
                <a href="#" class="text-decoration-none" target="_blank" rel="noopener">
                    <i class="fab fa-whatsapp" style="color : #fff; font-size: 32px; padding: 6px;"></i>
                </a>
            </div>
        </div>
        <div class="containerTOTOP">
            <div class="areaTOTOP scrollToTop">
                <!-- To Top Button -->
                <a class="text-decoration-none" target="_blank" rel="noopener">
                    <i class="fa fa-arrow-up" aria-hidden="true"
                        style="color : #fff; font-size: 32px; padding: 6px;"></i> </a>
            </div>
        </div>

        <!-- SIDE CION RIGHT -->

    </div>



    <!-- M E N U -->


    <div class="menu-bottom px-2">
        <div class="row">
            <div class="col-4">
                <a href="/" class="active">
                    <iconify-icon icon="ic:round-home"></iconify-icon>
                    <p>Home</p>
                </a>
            </div>
            <div class="col-4">
                <a href="#/cari">
                    <iconify-icon icon="ic:baseline-history"></iconify-icon>
                    <p>Riwayat</p>
                </a>
            </div>
            <div class="col-4">
                @auth
                    <a href="/profil">
                        <iconify-icon icon="mingcute:user-4-line"></iconify-icon>
                        <p>Akun</p>
                    </a>
                @else
                    <a href="/login">
                        <iconify-icon icon="mingcute:user-4-line"></iconify-icon>
                        <p>Akun</p>
                    </a>
                @endauth
            </div>

        </div>
    </div>

    <!-- M E N U -->




    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="{{ asset('web') }}/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Add this script at the end of your HTML body -->

    <!-- FLASH SALE SCROLL -->
    <script>
        $(document).ready(function() {
            $('.flashsale-scroll').slick({
                autoplay: true,
                autoplaySpeed: 1500, // Adjust the speed of the auto slide
                infinite: true,
                slidesToShow: 3, // Adjust the number of visible slides at a time
                slidesToScroll: 1,
                prevArrow: null, // Hide default prev arrow
                nextArrow: null, // Hide default next arrow
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 3,
                        }
                    }
                ]
            });
        });
    </script>
    <!-- FLASH SALE SCROLL -->

    <!-- SCROOLLL TO TOP -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const scrollToTopBtn = document.querySelector(".scrollToTop"); // Menggunakan class sebagai pemilih

            window.addEventListener("scroll", function() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    scrollToTopBtn.style.display = "block";
                } else {
                    scrollToTopBtn.style.display = "none";
                }
            });

            scrollToTopBtn.addEventListener("click", function() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            });
        });
    </script>
    <!-- SCROOLLL TO TOP -->


    <!-- COUNTODOWN -->
    <script>
        // Set the end date and time for the flash sale
        const flashSaleEndDate = new Date("December 30, 2023 23:59:59").getTime();

        // Update the countdown every second
        const countdownElement = document.getElementById("countdown");
        setInterval(function() {
            const now = new Date().getTime();
            const distance = flashSaleEndDate - now;

            if (distance > 0) {
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                countdownElement.innerHTML = `${days} HARI ${hours}:${minutes}:${seconds}`;
            } else {
                countdownElement.innerHTML = "Flash Sale Ended";
            }
        }, 1000);
    </script>
    <!-- COUNTODOWN -->
    <!-- SKELETON -->
    <script>
        $(window).on('load', function() {
            setTimeout(() => {
                $('.skeleton-loader').addClass('d-none');
                $('.container-grid').removeClass('d-none');
            }, 2500);
        });
    </script>
    <!-- SKELETON -->


</body>

</html>
