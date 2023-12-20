<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="{{ asset('web') }}/css/produk.css" />
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
    </div>


  

    <!-- PRODUK -->
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
          <i class="fa fa-arrow-up" aria-hidden="true" style="color : #fff; font-size: 32px; padding: 6px;"></i> </a>
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
        <a href="#/login">
          <iconify-icon icon="mingcute:user-4-line"></iconify-icon>
          <p>Akun</p>
        </a>
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Add this script at the end of your HTML body -->

  <!-- FLASH SALE SCROLL -->
  <script>
    $(document).ready(function () {
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
    document.addEventListener("DOMContentLoaded", function () {
      const scrollToTopBtn = document.querySelector(".scrollToTop"); // Menggunakan class sebagai pemilih

      window.addEventListener("scroll", function () {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          scrollToTopBtn.style.display = "block";
        } else {
          scrollToTopBtn.style.display = "none";
        }
      });

      scrollToTopBtn.addEventListener("click", function () {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      });
    });
  </script>
  <!-- SCROOLLL TO TOP -->

  <script>
    // Set the end date and time for the flash sale
    const flashSaleEndDate = new Date("December 30, 2023 23:59:59").getTime();

    // Update the countdown every second
    const countdownElement = document.getElementById("countdown");
    setInterval(function () {
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
  <script>
    $(window).on('load', function () {
      setTimeout(() => {
        $('.skeleton-loader').addClass('d-none');
        $('.container-grid').removeClass('d-none');
      }, 2500);
    });
  </script>

</body>

</html>