<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Logo-Website Name -->
    <link rel="icon" href="../assets/images/icon/icon-web.png">
    <title>Micro-Challenge</title>

    <!-- CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">


    <script src="../assets/js/script.js"></script>
</head>

<body>

    <section class="setProfil">
        <div class="container col-12 d-flex flex-column justify-content-center align-items-center">
            <div class="close-btn">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <form action="setProfilProcess.php" method="post" class="col-10 bg-content d-flex flex-column ">
                <div class="col-10 mb-3">
                    <input type="text" class="form-control" name="name" placeholder='<?php echo $_SESSION["name"] ?>' disabled>
                </div>
                <div class="col-10 mb-3">
                    <input type="text" class="form-control" name="age" placeholder="masukan umur anda contoh: 22">
                </div>
                <div class="gender d-flex mb-5">
                    <label class="form-check-label" for="flexSwitchCheckChecked">laki-laki</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="gender" placeholder="laki-laki" value="checked" checked>
                    </div>
                    <label class="form-check-label" for="flexSwitchCheckChecked">perempuan</label>
                </div>
                <div class="d-grid col-10">
                    <button type="submit" name="setProfil" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>

    <script src="assets/js/script.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>