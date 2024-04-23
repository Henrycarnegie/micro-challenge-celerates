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
    
    <!-- Profile -->
    <?php include "layout/detailsUser.php" ?>
    <!-- Profile -->

    <section class="my-fav">
        <div class="container">
            <div class="row">
                <div class="container-fav mb-lg-5 col-12 col-lg-12">
                    <div class="title d-flex justify-content-center">
                        <h1>Produk Favorit</h1>
                    </div>
                    <div class="container-items d-flex flex-column">
                        <div class="colomn-1 row g-3">
                            <div class="col-6 col-lg-4 mb-3 mb-lg-5 pb-3 pb-lg-5 text-center">
                                <div class="item">
                                    <div class="nama-item">
                                        <h4>Skintific</h4>
                                        <h6>Moisturizing Lotion</h6>
                                    </div>
                                    <img src="assets/images/content/fav_1.png" alt="" class="img-fluid">
                                    <button type="button" class="btn btn-primary btn-sm">See Details</button>
                                    <span><img src="assets/images/content/star.png" alt=""></span>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 mb-3 mb-lg-5 pb-3 pb-lg-5 text-center">
                                <div class="item">
                                    <div class="nama-item">
                                        <h4>Skintific</h4>
                                        <h6>Moisturizing Lotion</h6>
                                    </div>
                                    <img src="assets/images/content/fav_2.png" alt="" class="img-fluid">
                                    <button type="button" class="btn btn-primary">See Details</button>
                                    <span><img src="assets/images/content/star.png" alt=""></span>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 mb-3 mb-lg-5 pb-3 pb-lg-5 text-center">
                                <div class="item">
                                    <div class="nama-item">
                                        <h4>Skintific</h4>
                                        <h6>Moisturizing Lotion</h6>
                                    </div>
                                    <img src="assets/images/content/fav_3.png" alt="" class="rounded img-fluid">
                                    <button type="button" class="btn btn-primary">See Details</button>
                                    <span><img src="assets/images/content/star.png" alt=""></span>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 mb-3 mb-lg-5 pb-3 pb-lg-5 text-center">
                                <div class="item">
                                    <div class="nama-item">
                                        <h4>Skintific</h4>
                                        <h6>Moisturizing Lotion</h6>
                                    </div>
                                    <img src="assets/images/content/fav_4.png" alt="" class="img-fluid">
                                    <button type="button" class="btn btn-primary">See Details</button>
                                    <span><img src="assets/images/content/star.png" alt=""></span>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 mb-3 mb-lg-5 pb-3 pb-lg-5 text-center">
                                <div class="item">
                                    <div class="nama-item">
                                        <h4>Skintific</h4>
                                        <h6>Moisturizing Lotion</h6>
                                    </div>
                                    <img src="assets/images/content/fav_5.png" alt="" class="img-fluid">
                                    <button type="button" class="btn btn-primary">See Details</button>
                                    <span><img src="assets/images/content/star.png" alt=""></span>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 mb-3 mb-lg-5 pb-3 pb-lg-5 text-center">
                                <div class="item">
                                    <div class="nama-item">
                                        <h4>Skintific</h4>
                                        <h6>Moisturizing Lotion</h6>
                                    </div>
                                    <img src="assets/images/content/fav_6.png" alt="" class="img-fluid">
                                    <button type="button" class="btn btn-primary">See Details</button>
                                    <span><img src="assets/images/content/star.png" alt=""></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Profil -->

    <!-- Foooter -->
    <?php include "layout/footer.html" ?>
    <!-- Foooter -->

    <script src="assets/js/script.js"></script>    
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>