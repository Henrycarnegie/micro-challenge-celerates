<!-- Profil -->
<section class="profil">
    <div class="container">
        <div class="row">
            <div class="content col-lg-12 d-flex justify-content-between">
                <div class="detail col-12 col-lg-6">
                    <?php if (!isset($_SESSION["email"])) : ?>
                        <h1>Belum Login</h1>
                        <?php var_dump($_SESSION["email"])?>
                        <?php else : ?>
                            <h1>Sudah Login</h1>
                    <?php endif ?>
                    <div class="item">
                        <span>Nama</span>
                        <?php if ( isset($_SESSION["is_login"]) == true ) : ?>
                            <input type="text" class="form-control" 
                            placeholder= '<?php echo $_SESSION["name"] ?>' 
                            disabled>
                            <?php else :?>
                                <input type="text" class="form-control" placeholder= '--' disabled>
                        <?php endif ?>
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
<!-- Profil -->