<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('web') }}/css/detail.css" />
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
            <div class="cari">
                <form onkeydown="return event.key != 'Enter';">
                    <input type="text" class="form-control search-input" placeholder="Mau cari apa kak ?">
                </form>
            </div>
            <!-- PENCARIAN END -->


            <!-- CAROUSEL -->

            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{ asset('web') }}/img/produk/1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('web') }}/img/produk/2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('web') }}/img/produk/3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('web') }}/img/produk/4.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <!-- CAROUSEL END-->
            <div class="price-container">
                <div class="product-price">
                    <iconify-icon icon="tdesign:money" rotate="270deg"></iconify-icon>
                    Rp100.000
                </div>
            </div>
            <div class="name-container">
                <div class="deskripsi-name">
                    Ini contoh nama produk
                </div>
                <div class="deskripsi-rate">
                    <span class="start" style="color:#FFB534 ; font-size: 17px;">
                        <iconify-icon icon="tdesign:star-filled"></iconify-icon>
                    </span>
                    <span>4.7</span>/5 | <span>10K </span>sold
                </div>
            </div>
            <div class="deskripsi-container">
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="section-title">
                            <h3 class="mb-3" style="font-size: 1.2rem;">

                                DESKRIPSI

                            </h3>
                        </div>
                    </div>
                </div>
                <div class="deskripsi">
                    <span class="deskripsi">

                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when
                        looking
                        at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                        of letters,
                        as
                        opposed to using 'Content here, content here', making it look like readable English. Many
                        desktop publishing
                        packages and web page editors now use Lorem Ipsum as their default model text, and a search for
                        'lorem
                        ipsum'
                        will uncover many web sites still in their infancy. Various versions have evolved over the
                        years, sometimes
                        by
                        accident, sometimes on purpose (injected humour and the like).
                    </span>
                </div>
            </div>
            <div class="user-comments-container">
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="section-title">
                            <h3 class="mb-3" style="font-size: 1.2rem;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" class="h-8 w-8 animate-flicker">
                                    <path fill="currentColor"
                                        d="M6 14h8v-2H6zm0-3h12V9H6zm0-3h12V6H6zM2 22V4q0-.825.588-1.412T4 2h16q.825 0 1.413.588T22 4v12q0 .825-.587 1.413T20 18H6zm3.15-6H20V4H4v13.125zM4 16V4z"
                                        style="color: #16b36a;" />
                                </svg>
                                ULASAN

                            </h3>
                        </div>
                    </div>
                </div>
                <div class="show-comments" style="">
                    <div class="comment-user">
                        <i class="fas fa-user"></i>
                        <div>
                            <span>zk</span>
                            <div>2023-10-15</div>
                        </div>
                    </div>
                    <div class="comment-box" style="">Ntapp</div>
                </div>
                <div class="show-comments" style="">
                    <div class="comment-user">
                        <i class="fas fa-user"></i>
                        <div>
                            <span>Andy</span>
                            <div>2023-10-15</div>
                        </div>
                    </div>
                    <div class="comment-box" style="">Good Game</div>
                </div>
            </div>
        </div>




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
            <div class="col-2">
                <a href="#" class="active">
                    <iconify-icon icon="ic:round-home"></iconify-icon>
                    <p>Home</p>
                </a>
            </div>
            <div class="col-2">
                <a href="#">
                    <iconify-icon icon="ic:round-comment"></iconify-icon>
                    <p>coment</p>
                </a>
            </div>
            <div class="col-8">
                <div class="section-title-show-all mb-3 ">
                    <a href="produk.php" class="btn" id="addcart">Add To Cart</a>
                </div>
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

    <!-- SHOW MORE -->

    <!-- SHOW MORE -->

</body>

</html>
