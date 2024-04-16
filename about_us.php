
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
    <!-- Navigation Bar -->
    <?php include "layout/headerPages.php" ?>
    <!-- Navigation Bar -->
    
    <!-- Tampilan awal -->
    <section class="main-content">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="content col-lg-10 d-flex align-items-center justify-content-around">
                    <div class="icon-besar col-lg-5">
                        <img class="img-fluid" style="width: 75%; height: 80%; border-radius: 50%"
                            src="assets/images/icon/icon_besar.png" />
                    </div>

                    <div class="title-beauty col-lg-4 d-flex align-items-center">                     
                        <div class="text-start">
                            <h1 class="mb-3">Beauty</h1>
                            <h5 class="mb-3">Skincare platform</h5>  
                            <h6>Platform media yang dibuat khusus
                            memenuhi segala hal kecantikan,<span> website ini bertujuan
                            menginspirasi wanita & pria Indonesia Untuk merawat diri dan
                            dapat percaya diri dengan kulitnya sendiri</span> serta membantu mengetahui
                            jenis kulit seseorang dan memberikan rekomendasi produk yang
                            sesuai dengan jenis kulitnya </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tampilan visi misi -->
    <section class="visi_misi">
        <div class="container-fluid">
            <div class="row"> 
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="col-12 title-visimisi p-4 d-flex justify-content-center">
                        <div class="title-visi col-lg-4 align-self-start">
                            <h1>Visi :</h1>
                            <h6>Menjadi perusahaan perawatan kulit
                                terdepan yang menginspirasi dan memberdayakan
                                semua orang untuk merasa percaya diri dengan
                                kecantikan alami mereka</h6>
                        </div>
                        <div class="title-misi col-lg-4 align-self-end">
                            <h1>Misi :</h1>
                            <h6>Merekomendasikan produk skincare sesuai 
                                dengan type kulit dan Memberikan edukasi dan 
                                informasi yang bermanfaat tentang kesehatan dan 
                                kecantikan kulit</h6>
                        </div>             
                        <div class="pose_male col-lg-4">
                            <img class="img-fluid" src="assets/images/icon/pose_male.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Tampilan visi misi -->
    
    <!-- Foooter -->
    <?php include "layout/footer.html" ?>
    <!-- Foooter -->

    <script src="assets/js/script.js"></script>    
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>