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
    <!-- Header -->
    <?php include "layout/headerPages.php"?>
    <!-- Header -->


    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="kering col-lg-12 d-flex justify-content-center align-items-center flex-column">
                    <div class="box_kering"></div>
                    <div class="text_kering align-items-center ">
                        <h3>Jenis Kulit Anda adalah :</h3>
                        <b>Kering</b>
                    </div>
                   
                    <div class="kering_img col-lgl-5 d-flex">
                        <img class="img-kering" 
                            src="assets/images/content/kering.png" />
                    </div>

                    <div class="deskripsi">
                        <div class="p1">
                            <b>Deskripsi</b>  
                            <h6>Kulit kering adalah suatu kondisi kulit umum yang 
                            ditandai dengan kurangnya kelembapan pada lapisan 
                            kulit terluar (stratum korneum). Hal ini sering kali 
                            disebabkan oleh faktor lingkungan, seperti udara dingin,
                            kering, atau lingkungan gurun yang panas dan kering, 
                            atau oleh faktor internal, seperti penyakit tertentu, 
                            pengobatan, atau penuaan.</h6>
                        </div>       

                        <div class="p2">
                            <b>Gejala</b>  
                            <h6>Gejala kulit kering antara lain kulit kasar, 
                            bersisik, dan gatal, pecah-pecah halus, dan kemerahan.</h6>
                        </div>
                        
                        <div class="p3">
                            <b>Treatment</b>  
                            <h6>Perawatan untuk kulit kering sering kali melibatkan 
                            tindakan perawatan di rumah, seperti menggunakan pelembab 
                            dan menghindari sabun dan deterjen yang keras, serta mengatasi 
                            segala kondisi kesehatan yang mendasarinya.</h6>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "layout/productCarousel.html" ?>

    <!-- Foooter -->
    <?php include "layout/footer.html" ?>
    <!-- Foooter -->

    <script src="assets/js/script.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>