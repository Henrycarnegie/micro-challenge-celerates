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
                        <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pencil me-2"></i>
                        Edit
                        </button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>Isilah kolom berikut</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="item-1 col-5">
                                            <span>Nama</span>
                                            <input class="form-control form-control-sm" type="text" placeholder="Masukkan Nama" aria-label=".form-control-sm example">
                                        </div>
                                        <div class="item col-3">
                                        <span>Jenis Kelamin</span>
                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                <option selected>Laki-laki</option>
                                                <option value="1">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="item col-5">
                                            <span>Umur</span>
                                            <input class="form-control form-control-sm" type="text" placeholder="Masukkan Umur" aria-label=".form-control-sm example">
                                            <span>Kata sandi</span>
                                            <input class="form-control form-control-sm" type="text" placeholder="Masukkan Umur" aria-label=".form-control-sm example">
                                            <span>Konfirmasi Kata sandi</span>
                                            <input class="form-control form-control-sm" type="text" placeholder="Masukkan Umur" aria-label=".form-control-sm example">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> <span>Simpan Perubahan</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

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