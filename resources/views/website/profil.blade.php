<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('web') }}/css/profil.css" />
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
        </div>



        <div style="height: auto;" class="body-form">
            <div class="px-3 py-2 box-profile">
                <div class="formku p-2 mb-4" style="height: auto; border-radius: 20px;">
                    <form action="{{ route('update-profile') }}" method="POST" class="my-form px-3 mt-3"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="profil mt-10 mb-4">
                            <div class="profile-pic">
                                <label class="-label" for="file">
                                    <span class="glyphicon glyphicon-camera"></span>
                                </label>
                                <input id="file" type="file" onchange="loadFile(event)" name="file" />
                                <img src="{{ asset($user->customer->foto_profil ? 'storage/' . $user->customer->foto_profil : 'web/img/default.png') }}" id="output" alt="Profile Image" />


                            
                           
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" autocomplete="off" value="{{ $user->name }}"
                                name="name" required>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" autocomplete="off" value="{{ $user->email }}"
                                name="email" required>
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" autocomplete="off"
                                placeholder="(Enter if want to changed)">
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary w-100 mb-3">
                                {{ __('Update') }}
                            </button>
                        </div>

                    </form>
                    <form action="{{ route('logout') }}" method="post" class="my-form px-3 mt-3">
                        @csrf
                        <button type="submit" class="btn btn-danger w-100">
                            {{ __('Logout') }}
                        </button>
                    </form>

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
            <div class="col-4">
                <a href="/" class="">
                    <iconify-icon icon="ic:round-home"></iconify-icon>
                    <p>Home</p>
                </a>
            </div>
            <div class="col-4">
                <a href="#" class="">
                    <iconify-icon icon="ic:baseline-history"></iconify-icon>
                    <p>Riwayat</p>
                </a>
            </div>
            <div class="col-4">
                <a href="/profil" class="active">
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
    <script>
        function loadFile(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
<!-- Tambahkan di bagian head atau sebelum akhir body -->


</body>

</html>
