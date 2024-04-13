
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
    
    <!-- Profil -->
    <section class="profil">
        <div class="container">
            <div class="row">
                <div class="content col-lg-12 d-flex justify-content-between">
                    <div class="detail col-12 col-lg-6">
                        <?php if (($_SESSION["login_failed"]) === true) : ?>
                            <h1>Belum Login</h1>
                        
                            <?php else : ?>
                                <h1>Sudah Login</h1>
                        <?php endif ?>
                        <div class="item">
                            <span>Nama</span>
                            <input type="text" class="form-control" placeholder= '<?php echo $_SESSION["name"] ?>' disabled>

                        </div>
                        <div class="detail-collapse d-flex justify-content-between">
                            <div class="item col-12 col-lg-6 me-4">
                                <span>Jenis Kelamin</span>
                                <select class="form-select" aria-label="Default select example" disabled>
                                    <option value="1">Pilih</option>
                                    <option value="2" selected>Laki-laki</option>
                                    <option value="3">Perempuan</option>
                                </select>
                            </div>
                            <div class="item col-12 col-lg-5">
                                <span>Tipe Kulit</span>
                                <input type="text" class="form-control" placeholder="Oily" disabled>
                            </div>
                        </div>
                        <div class="item">
                            <span>Umur</span>
                            <input type="text" class="form-control" placeholder="24" disabled>
                        </div>
                        <div class="item">
                            <span>Email</span>
                            <input type="text" class="form-control" placeholder="henrycarnegie@gmail.com" disabled>
                        </div>
                        <div class="item">
                            <span>Password</span>
                            <input type="text" class="form-control" placeholder="******" disabled>
                        </div>
                        <div class="container-btn d-flex">
                            <button type="button" class="btn btn-primary me-2"><i class="fa-solid fa-pencil me-2"></i>Edit</button>
                            <button type="button" class="btn btn-primary me-2"><i class="fa-solid fa-file-contract me-2"></i>Test ulang</button>

                            <form action="register/logoutProcess.php" method="post">
                                <button type="submit" name="logout" class="btn btn-danger btn-register">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                    logout
                                </button>
                            </form>

                        </div>
                    </div>
                    <div class="image col-12 col-lg-6 d-flex justify-content-center align-items-center">
                        <img src="assets/images/content/3d_profile.png" alt="3d profil image">
                    </div>
                </div>
            </div>
        </div>
    </section>

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