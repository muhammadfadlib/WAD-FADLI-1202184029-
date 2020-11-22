<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>LOGIN | WAD Beauty</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
</head>
<body style="background-color: lightcyan;">

<?php
    if (!empty($_GET['status']) && $_GET['status'] == "success") {
        ?>
        <nav class="<?php if ($_SESSION["color"] == "dark") { echo "navbar navbar-dark bg-dark";} else { echo "navbar navbar-light bg-light";}?>">
    <a class="navbar-brand" href="indeks.php">WAD Beauty</a>
    <form class="form-inline">
        <a class="nav-link" style="color:black;" href="Home.php"><i class="fa fa-shopping-cart"></i></a>
        <div class="navbar-expand">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Selamat Datang, <?php echo $_SESSION['name'] ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="profil.php">Profile</a>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </form>
</nav>
        <?php
    } else{
        ?>
        <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="indeks.php">WAD Beauty</a>
            <form class="form-inline">
                <a class="nav-link" style="color:black;" href="login.php">Login</a>
                <a class="nav-link" style="color:black;" href="regist.php">Register</a>
            </form>
        </nav>
        <?php
    }
?>

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
                        Login
                    </h3>
                    <ul class="list-group list-group-flush">
                        <form action="connlogin.php" method="post">
                            <div class="form-group mt-3">
                                <label>E-mail</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label>Kata Sandi</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary justify-content-center mb-2" name="submit">Login</button>
                                <p>Anda belum memiliki Akun? <a href="">Registrasi</a></p>
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
