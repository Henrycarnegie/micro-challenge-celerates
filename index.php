
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <?php include "layout/headerPages.php"?>
    <!-- Header -->
    
    <!-- Tampilan Awal Pengguna -->
    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-between">
                    <div class="text-content col-6">
                        <h1>Lihatlah. Ketahuilah. Perbaikilah.</h1>
                        <span>Produk skincare yang bagus sebaiknya mampu menjaga kesehatan dan penampilan
                            kulitmu. Seharusnya mengandung bahan-bahan yang efektif dan aman untuk digunakan. Temukan semua rekomendasi produk di sini!</span>
                        <div class="btn-test">
                            <a href="skintype_landing.php">
                                <button type="button" class="btn btn-primary">Test Tipe Kulit</button>
                            </a>
                        </div>
                    </div>
                    <div class="background-anim col-4">
                        <img class="img-fluid" src="assets/images/content/3d_animation_header.png" alt="img-header">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tampilan Awal Pengguna -->

    <?php include "layout/productCarousel.html" ?>

    <!-- Top Brand -->
    <?php include "layout/topBrand.html" ?>
    <!-- Top Brand -->

    <!-- Section FAQ-->
    <section class="FAQ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center flex-column">
                    <div class="title text-center">
                        <h1>Pertanyaan yang Sering Diajukan</h1>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        <span>Mengapa penting untuk mengetahui jenis tipe kulit kita?</span>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body custom-text-align">
                                        <span>Langkah-langkah dasar perawatan kulit yang bear meliputi pembersihan,
                                            eksfoliasi, pelembapan, dan perlindungan matahari. Gunakan pembersih yang
                                            lembut sesuai dengan jenis kulit Anda, lalu gunakan produk eksfoliasi yang
                                            mengandung AHA atau BHA beberapa kali seminggu. Selain itu, jangan lupa
                                            untuk
                                            menggunakan pelembap setiap har dan produk perlindungan matahari dengan
                                            SPF minimal 30.</span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        <span>Bagaimana cara merawat kulit saya dengan benar?</span>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <span>Langkah-langkah dasar perawatan kulit yang bear meliputi pembersihan,
                                            eksfoliasi, pelembapan, dan perlindungan matahari. Gunakan pembersih yang
                                            lembut sesuai dengan jenis kulit Anda, lalu gunakan produk eksfoliasi yang
                                            mengandung AHA atau BHA beberapa kali seminggu. Selain itu, jangan lupa
                                            untuk
                                            menggunakan pelembap setiap har dan produk perlindungan matahari dengan
                                            SPF minimal 30.</span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        <span>Bagaimana cara merawat kulit saya dengan benar?</span>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <span>Langkah-langkah dasar perawatan kulit yang bear meliputi pembersihan,
                                            eksfoliasi, pelembapan, dan perlindungan matahari. Gunakan pembersih yang
                                            lembut sesuai dengan jenis kulit Anda, lalu gunakan produk eksfoliasi yang
                                            mengandung AHA atau BHA beberapa kali seminggu. Selain itu, jangan lupa
                                            untuk
                                            menggunakan pelembap setiap har dan produk perlindungan matahari dengan
                                            SPF minimal 30.</span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFour" aria-expanded="false"
                                        aria-controls="flush-collapseFour">
                                        <span>Bagaimana cara merawat kulit saya dengan benar?</span>
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <span>Langkah-langkah dasar perawatan kulit yang bear meliputi pembersihan,
                                            eksfoliasi, pelembapan, dan perlindungan matahari. Gunakan pembersih yang
                                            lembut sesuai dengan jenis kulit Anda, lalu gunakan produk eksfoliasi yang
                                            mengandung AHA atau BHA beberapa kali seminggu. Selain itu, jangan lupa
                                            untuk
                                            menggunakan pelembap setiap har dan produk perlindungan matahari dengan
                                            SPF minimal 30.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="notify_me"> 
        <div class="container">
            <div class="row">
                <div class="notify col-12 d-flex align-items-center">
                    <div class="text_notify text-center">
                        <h1 class="j1">Dapatkan Pembaruan Dari Mana Saja</h1>
                        <h3 class="j2">Jangan lewatkan sesuatu yang baru dari kami</h3>
                    </div>
                    <div class="input_email">
                        <input type="text" placeholder="usename@gmail.com" required>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </section>
    <!--Section FAQ-->

    
    <!-- Foooter -->
    <?php include "layout/footer.html" ?>
    <!-- Foooter -->

    <script src="assets/js/script.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
