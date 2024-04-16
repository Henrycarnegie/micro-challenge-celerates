<!-- Profil -->
<section class="profil">
    <div class="container">
        <div class="row">
            <div class="content col-lg-12 d-flex justify-content-between">
                <div class="detail col-12 col-lg-6">
                    <!-- Nama -->
                    <div class="item">
                        <span>Nama</span>
                        <?php if (isset($_SESSION["is_login"]) == true) : ?>
                            <input type="text" class="form-control" placeholder='<?php echo $_SESSION["name"] ?>' disabled>
                        <?php else : ?>
                            <input type="text" class="form-control" placeholder='--' disabled>
                        <?php endif ?>
                    </div>
                    <div class="detail-collapse d-flex justify-content-between">
                        <!-- Gender -->
                        <div class="item col-12 col-lg-6 me-4">
                            <span>Jenis Kelamin</span>
                            <select class="form-select" aria-label="Default select example" disabled>
                                <?php if (isset($_SESSION["is_login"]) == true) : ?>
                                    <option value="1"><?php echo $_SESSION["gender"] ?></option>
                                <?php else : ?>
                                    <option value="1">--</option>
                                <?php endif ?>
                            </select>
                        </div>
                        <!-- Tipe Kulit -->
                        <div class="item col-12 col-lg-5">
                            <span>Tipe Kulit</span>
                            <?php if (isset($_SESSION["is_login"]) == true) : ?>
                            <input type="text" class="form-control" placeholder='kering' disabled>
                        <?php else : ?>
                            <input type="text" class="form-control" placeholder='--' disabled>
                        <?php endif ?>
                        </div>
                    </div>
                    <!-- Umur -->
                    <div class="item">
                        <span>Umur</span>
                        <?php if (isset($_SESSION["is_login"]) == true) : ?>
                            <input type="text" class="form-control" placeholder='<?php echo $_SESSION["age"] ?>' disabled>
                        <?php else : ?>
                            <input type="text" class="form-control" placeholder='--' disabled>
                        <?php endif ?>
                    </div>
                    <!-- Email -->
                    <div class="item">
                        <span>Email</span>
                        <?php if (isset($_SESSION["is_login"]) == true) : ?>
                            <input type="text" class="form-control" placeholder='<?php echo $_SESSION["email"] ?>' disabled>
                        <?php else : ?>
                            <input type="text" class="form-control" placeholder='--' disabled>
                        <?php endif ?>
                    </div>
                    <!-- Password -->
                    <div class="item">
                        <span>Password</span>
                        <?php if (isset($_SESSION["is_login"]) == true) : ?>
                            <input type="text" class="form-control" placeholder='******' disabled>
                        <?php else : ?>
                            <input type="text" class="form-control" placeholder='--' disabled>
                        <?php endif ?>
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