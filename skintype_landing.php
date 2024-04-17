<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Logo-Website Name -->
    <link rel="icon" href="assets/images/icon/icon-web.png">
    <title>Micro-Challenge</title>

    <!-- CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

</head>

<body>
    <!-- Navigation Bar -->
    <header class="header fixed-top">
        <nav class="col-12 navbar">
            <div class="col-12 col-lg-6 left-container d-flex justify-content-center align-items-center">
                <img class="me-3 icon-web" src="assets/images/icon/icon-web.png" alt="logo-web">
                <div class="searchbar col-12 col-lg-6">
                    <form action="#" class="col-10">
                        <div class="d-flex align-items-center px-2">
                            <i class="fa fa-search"></i></button>
                            <input id="openSearchbar" class="form-control" type="email"
                                placeholder="Cari produk anda disini ...">
                        </div>
                    </form>
                    <div id="modalOpen" class="overlay hide col-4">
                        <div class="recommendation">
                            <a href="search_result.html" class="product-img">
                                <img src="assets/images/content/recom_item1.png" alt="" class="img-fluid me-2">
                            </a>
                            <a href="search_result.html" class="product-name">
                                <h6>Toner "The Originote"</h6>
                                <span>mengandung Ceraluronic Essence</span>
                            </a>
                        </div>
                        <div class="recommendation">
                            <a href="search_result.html" class="product-img">
                                <img src="assets/images/content/recom_item1.png" alt="" class="img-fluid me-2">
                            </a>
                            <a href="search_result.html" class="product-name">
                                <h6>Toner "The Originote"</h6>
                                <span>mengandung Ceraluronic Essence</span>
                            </a>
                        </div>
                        <div class="recommendation">
                            <a href="search_result.html" class="product-img">
                                <img src="assets/images/content/recom_item1.png" alt="" class="img-fluid me-2">
                            </a>
                            <a href="search_result.html" class="product-name">
                                <h6>Toner "The Originote"</h6>
                                <span>mengandung Ceraluronic Essence</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 right-container d-flex justify-content-center align-items-center">
                <ul class="list-group pe-2">
                    <li class="list-group-item"><a href="/index.html">Beranda</a></li>
                    <li class="list-group-item"><a href="about_us.html">Tentang Kami</a></li>
                    <li class="list-group-item"><a href="profil.html">Profil</a></li>
                    <li class="list-group-item"><a href="#">Test Kulit Anda</a></li>
                </ul>
                <a href="register/signup.html" class="btn-register">
                    <button type="button" class="btn btn-primary"><i class="me-2 fa-regular fa-user"></i>Masuk</button>
                </a>
            </div>
        </nav>
    </header>
    <!-- Navigation Bar -->

    <!-- SkinType Landing Page-->
    <section class="skintype-landing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center align-items-center flex-column">
                    <div class="text-content col-lg-12">
                        <h1>Gratis Tes Tipe Kulit</h1>
                    </div>
                    <div class="content-body col-lg-10">
                        <h2>"Tipe kulit merupakan karakteristik alami dari tubuh kita yang memengaruhi bagaimana produk perawatan kulit bekerja. Mengikuti tes tipe kulit penting karena hal itu membantu kita memahami kebutuhan kulit kita dengan lebih baik. <span class="oren">Dengan mengetahui tipe kulit kita, kita dapat memilih produk perawatan yang sesuai, menghindari reaksi alergi atau iritasi, serta menjaga kulit agar tetap sehat dan berseri.</span> Jadi, jangan ragu untuk mengikuti tes tipe kulit agar perawatan kulitmu lebih efektif dan tepat sasaran."</h2>
                    </div>
                </div>
                <div class="col-lg-12 d-flex justify-content-center align-items-center flex-column">
                    <div class="container">
                        <div class="row">
                            <div class="card-1 col-4">
                                <div class="card">
                                    <img src="assets/images/content/skintype-card-1.jpg" class="card-img-top" alt="skintype-landing">
                                    <div class="card-body">
                                      <h5 class="card-title">Selesaikan Tes</h5>
                                      <p class="card-text">Jadilah diri sendiri dan jawablah dengan jujur untuk mengetahui jenis kulit Anda.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-2 col-4">
                                <div class="card">
                                    <img src="assets/images/content/skintype-card-2.jpg" class="card-img-top" alt="skintype-landing">
                                    <div class="card-body">
                                      <h5 class="card-title">Lihat Hasil Terperinci</h5>
                                      <p class="card-text">Lihat bagaimana jenis kulit Anda memengaruhi keputusan Anda dalam memilih perawatan kulit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-3 col-4">
                                <div class="card">
                                    <img src="assets/images/content/skintype-card-3.jpg" class="card-img-top" alt="skintype-landing">
                                    <div class="card-body">
                                      <h5 class="card-title">Buka Kunci Solusi Anda</h5>
                                      <p class="card-text">Pilih produk yang tepat berdasarkan jenis kulit Anda.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="skintype-landing-question">
        <div class="col-lg-12 d-flex justify-content-center align-items-center flex-column">
            <div class="container">
                <div class="row">
                    <div class="question">
                        <h2>Wajah Anda selalu tampak berkilau atau berminyak</h2>
                        <div class="flex-column col-lg-12">
                            <div class="radio-tile-group">
                                <span>Setuju</span>
                                <div class="input-container-1">
                                  <input id="walk" type="radio" name="radio">
                                  <div class="radio-tile-1">
                                </div>
                                </div>
                                <div class="input-container-2">
                                    <input id="walk" type="radio" name="radio">
                                    <div class="radio-tile-2">
                                    </div>
                                </div>
                                <div class="input-container-3">
                                    <input id="walk" type="radio" name="radio">
                                    <div class="radio-tile-3">
                                    </div>
                                </div>
                                <div class="input-container-4">
                                    <input id="walk" type="radio" name="radio">
                                    <div class="radio-tile-4">
                                    </div>
                                </div>
                                <div class="input-container-5">
                                    <input id="walk" type="radio" name="radio">
                                    <div class="radio-tile-5">
                                    </div>
                                </div>
                                <div class="input-container-6">
                                    <input id="walk" type="radio" name="radio">
                                    <div class="radio-tile-6">
                                    </div>
                                </div>
                                <div class="input-container-7">
                                    <input id="walk" type="radio" name="radio">
                                    <div class="radio-tile-7">
                                    </div>
                                </div>
                                <span>Tidak Setuju</span>
                            </div>
                        </div>
                        <h2>Zona T-mu selalu berminyak sedangkan bagian wajah lainnya matte</h2>
                        <div class="flex-column col-lg-12">
                            <div class="radio-tile-group">
                                <span>Setuju</span>
                                <div class="input-container-1">
                                  <input id="walk" type="radio" name="radio">
                                  <div class="radio-tile-1">
                                </div>
                                </div>
                                <div class="input-container-2">
                                    <input id="walk" type="radio" name="radio">
                                    <div class="radio-tile-2">
                                    </div>
                                </div>
                                <div class="input-container-3">
                                    <input id="walk" type="radio" name="radio">
                                    <div class="radio-tile-3">
                                    </div>
                                </div>
                                <div class="input-container-4">
                                    <input id="walk" type="radio" name="radio">
                                    <div class="radio-tile-4">
                                    </div>
                                </div>
                                <div class="input-container-5">
                                    <input id="walk" type="radio" name="radio">
                                    <div class="radio-tile-5">
                                    </div>
                                </div>
                                <div class="input-container-6">
                                    <input id="walk" type="radio" name="radio">
                                    <div class="radio-tile-6">
                                    </div>
                                </div>
                                <div class="input-container-7">
                                    <input id="walk" type="radio" name="radio">
                                    <div class="radio-tile-7">
                                    </div>
                                </div>
                                <span>Tidak Setuju</span>
                            </div>
                        </div>
                        <h2>Kulit Anda terkelupas, kasar, dan mudah menyerap</h2>
                        <div class="flex-column col-lg-12">
                            <div class="radio-tile-group">
                                <span>Setuju</span>
                                <div class="input-container-1">
                                  <input id="walk" type="radio" name="radio">
                                  <div class="radio-tile-1">
                                </div>
                                </div>
                                <div class="input-container-2">
                                    <input id="walk" type="radio" name="radio">
                                    <div class="radio-tile-2">
                                    </div>
                                </div>
                                <div class="input-container-3">
                                    <input id="walk" type="radio" name="radio">
                                    <div class="radio-tile-3">
                                    </div>
                                </div>
                                <div class="input-container-4">
                                    <input id="walk" type="radio" name="radio">
                                    <div class="radio-tile-4">
                                    </div>
                                </div>
                                <div class="input-container-5">
                                    <input id="walk" type="radio" name="radio">
                                    <div class="radio-tile-5">
                                    </div>
                                </div>
                                <div class="input-container-6">
                                    <input id="walk" type="radio" name="radio">
                                    <div class="radio-tile-6">
                                    </div>
                                </div>
                                <div class="input-container-7">
                                    <input id="walk" type="radio" name="radio">
                                    <div class="radio-tile-7">
                                    </div>
                                </div>
                                <span>Tidak Setuju</span>
                            </div>
                        </div>
                        <h2>Kulit Anda terasa kencang dan kering setelah dibersihkan</h2>
                        <div class="flex-column col-lg-12">
                            <div class="radio-tile-group">
                                <span>Setuju</span>
                                <div class="input-container-1">
                                  <input id="walk" type="radio" name="radio">
                                  <div class="radio-tile-1">
                                </div>
                                </div>
                                <div class="input-container-2">
                                    <input id="walk" type="radio" name="radio">
                                    <div class="radio-tile-2">
                                    </div>
                                </div>
                                <div class="input-container-3">
                                    <input id="walk" type="radio" name="radio">
                                    <div class="radio-tile-3">
                                    </div>
                                </div>
                                <div class="input-container-4">
                                    <input id="walk" type="radio" name="radio">
                                    <div class="radio-tile-4">
                                    </div>
                                </div>
                                <div class="input-container-5">
                                    <input id="walk" type="radio" name="radio">
                                    <div class="radio-tile-5">
                                    </div>
                                </div>
                                <div class="input-container-6">
                                    <input id="walk" type="radio" name="radio">
                                    <div class="radio-tile-6">
                                    </div>
                                </div>
                                <div class="input-container-7">
                                    <input id="walk" type="radio" name="radio">
                                    <div class="radio-tile-7">
                                    </div>
                                </div>
                                <span>Tidak Setuju</span>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn-hasil"><a href="skintype_result.php"><img src="assets/images/icon/btn-hasil.png" alt="skintype-landing"></a></button>
                </div>
            </div>
        </div>
    </section>

    <!-- SkinType Landing Page-->

    <!-- Footer -->  
    <footer>
        <div class="container">
            <div class="row">
                <div class="content col-12 d-flex justify-content-around">
                    <div class="col-3 detail px-4 align-items-center">
                        <div class="name-web mb-4">
                            <img src="assets/images/icon/icon-web.png" alt="" class="me-4">
                            <span>Beautyy</span>
                        </div>
                        <div class="desc">
                            <span>Kecantikan tidak hanya datang dari dalam tetapi juga datang dari luar. Jadi, Anda juga
                                perlu menjaga kesehatan kulit Anda</span>
                        </div>
                    </div>
                    <div class="col-2 navigasi">
                        <h2 class="mx-4">Navigasi</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="profil.html">Profil</a></li>
                            <li><a href="about_us.html">About Us</a></li>
                            <li><a href="#">Test Skin Type</a></li>
                        </ul>
                    </div>
                    <div class="col-4 temukan">
                        <h2 class="mx-4">Temukan Lainnya</h2>
                        <ul>
                            <li><a href="#">Brand</a></li>
                            <li><a href="#">Product</a></li>
                        </ul>
                    </div>
                    <div class="col-2 tentang">
                        <h2 class="mx-4">About Us</h2>
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright">
        <span>Copyright © 2024 All Right Reserved</span>
    </div>
    <!-- Footer -->

    <script src="assets/js/script.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>