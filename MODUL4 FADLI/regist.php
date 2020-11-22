<!DOCTYPE html>
<html>
<head>
    <title>Register | WAD Beauty</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
</head>
<body style="background-color: lightcyan;">

<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand">WAD Beauty</a>
    <form class="form-inline">
        <a class="nav-link" style="color:black;" href="login.php">Login</a>
        <a class="nav-link" style="color:black;" href="regist.php">Register</a>
    </form>
</nav>
<?php
    if (!empty($_GET['status'])) {
        if($_GET['status'] == "success"){
            ?>
            <div class="alert alert-warning" role="alert">Berhasil Register</div>
            <?php
        } else{
            ?>
            <div class="alert alert-danger" role="alert">Failed Register</div>
            <?php
        }
    }    
?>

<section class="container mt-4">
    <div class="row justify-content-center">
        <div class="row justify-content-center mt-3 ">
            <div class="col-sm ">
                <div class="card p-5" style="width: 25rem;">
                    <h3 class="text-center mb-3">
                        Register
                    </h3>
                    <ul class="list-group list-group-flush">
                        <form action="connregist.php" method="post">
                            <div class="form-group mt-3">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama" require>
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" class="form-control" name="email" require>
                            </div>
                            <div class="form-group mt-3">
                                <label>No. Handphone</label>
                                <input type="text" class="form-control" name="nohp" require>
                            </div>
                            <div class="form-group">
                                <label>Kata Sandi</label>
                                <input type="password" class="form-control" name="password" require>
                            </div>
                            <div class="form-group">
                                <label>Konfirmasi Kata Sandi</label>
                                <input type="password" class="form-control" name="cekpass" require>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary justify-content-center mb-2" name="submit">Daftar</button>
                                <p>Sudah Punya Akun? <a href="">Login</a></p>
                            </div>
                            
                        </form>
                    </ul>
                    </div>
            </div>
        </div> 
    </div>
</section>
</body>
</html>
