<?php
    session_start();

    if ( isset ($_POST["btn-account"])) {
        if (isset ($_SESSION["is_login"])) {
            header("location: profil.php");
            exit();
        } else {
            header("location: ../register/signup.php");
            exit();
        }
    }

?>
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
    <link rel="stylesheet" href="../assets/css/style.css">

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
                            <a href="search_result.php" class="product-img">
                                <img src="assets/images/content/recom_item1.png" alt="" class="img-fluid me-2">
                            </a>
                            <a href="search_result.php" class="product-name">
                                <h6>Toner "The Originote"</h6>
                                <span>mengandung Ceraluronic Essence</span>
                            </a>
                        </div>
                        <div class="recommendation">
                            <a href="search_result.php" class="product-img">
                                <img src="assets/images/content/recom_item1.png" alt="" class="img-fluid me-2">
                            </a>
                            <a href="search_result.php" class="product-name">
                                <h6>Toner "The Originote"</h6>
                                <span>mengandung Ceraluronic Essence</span>
                            </a>
                        </div>
                        <div class="recommendation">
                            <a href="search_result.php" class="product-img">
                                <img src="assets/images/content/recom_item1.png" alt="" class="img-fluid me-2">
                            </a>
                            <a href="search_result.php" class="product-name">
                                <h6>Toner "The Originote"</h6>
                                <span>mengandung Ceraluronic Essence</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 right-container d-flex justify-content-center align-items-center">
                <ul class="list-group pe-2">
                    <li class="list-group-item"><a href="index.php">Beranda</a></li>
                    <li class="list-group-item"><a href="about_us.php">Tentang Kami</a></li>
                    <li class="list-group-item"><a href="profil.php">Profil</a></li>
                    <li class="list-group-item"><a href="#">Test Kulit Anda</a></li>
                </ul>
                <form method="post">
                    <button type="submit" name="btn-account" class="btn btn-register">
                        <i class="me-2 fa-regular fa-user"></i>
                        <?php
                            // Periksa apakah nama pengguna tersedia dalam sesi
                            if (isset($_SESSION["name"])) {
                                echo $_SESSION["name"];
                            } else {
                                echo "Account";
                            }
                        ?>
                    </button>
                </form>
                <!-- <a href="../register/signup.php" name="btn-register" class="btn-register">
                </a> -->
            </div>
        </nav>
    </header>
    <!-- Navigation Bar -->
</body>
</html>   
    
   