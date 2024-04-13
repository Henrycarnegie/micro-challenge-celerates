<?php
session_start();

if (isset($_POST["btn-account"])) {
    if (isset($_SESSION["is_login"])) {
        header("location: profil.php");
        exit();
    } else {
        header("location: register/signup.php");
        exit();
    }
}
?>
<!-- Navigation Bar -->
<header class="header fixed-top">
    <div class="row col-lg-12">
        <nav class="col-lg-12 navbar">
            <div class="col-12 col-lg-4 left-container d-flex justify-content-center align-items-center">
                <img class="me-3 icon-web" src="assets/images/icon/icon-web.png" alt="logo-web">
                <h6>Beautyy</h6>
            </div>
            <div class="col-12 col-lg-4 searchbar">
                <form action="#" class="col-8">
                    <div class="d-flex align-items-center px-2">
                        <i class="fa fa-search"></i></button>
                        <input id="openSearchbar" class="form-control" type="email" placeholder="Cari produk anda disini ...">
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
            <div class="col-lg-4 right-container d-flex justify-content-center align-items-center">
                <ul class="list-group pe-2">
                    <li class="list-group-item"><a href="index.php">Beranda</a></li>
                    <li class="list-group-item"><a href="about_us.php">Tentang</a></li>
                    <li class="list-group-item"><a href="skintype_landing.html">Test Kulit</a></li>
                </ul>
                <div class="dropdown">
                    <button class="btn btn-register dropdown-toggle" name="btn-account" type="button" id="dropdownMenuAccount" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="me-2 fa-regular fa-user"></i>
                        <?php
                            // Periksa apakah nama pengguna tersedia dalam sesi
                            if (isset($_SESSION["name"])) {
                                echo $_SESSION["name"];
                            } else {
                                echo "Masuk";
                            }
                        ?>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a class="dropdown-item" href="profil.php">
                                <strong>Profil</strong>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-item">
                                <?php
                                    if (isset($_SESSION["is_login"])) {
                                        echo "
                                        <form action='register/logoutProcess.php' method='post'>
                                            <button type='submit' name='logout' class='btn btn-danger'>
                                                logout
                                            </button>
                                        </form>
                                        ";
                                    } else {
                                        echo "
                                        <a href='register/signup.php'>
                                            Signup
                                        </a>
                                        ";
                                    }
                                ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- Navigation Bar -->