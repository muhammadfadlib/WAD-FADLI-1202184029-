<?php 
	session_start();
	if (!(isset($_SESSION["id"]))) {
		header("Location: login.php");
	}
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Home | WAD Beauty</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
</head>
<body style="background-color: lightcyan;">

<nav class="<?php if ($_SESSION["color"] == "dark") { echo "navbar navbar-dark bg-dark";} else { echo "navbar navbar-light bg-light";}?>">
    <a class="navbar-brand" href="indeks.php">WAD Beauty</a>
    <form class="form-inline">
        <a class="nav-link" style="color:black;" href="chart.php"><i class="fa fa-shopping-cart"></i></a>
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
    if (!empty($_GET['status'])) {
        if($_GET['status'] == "success"){
            ?>
            <div class="alert alert-warning" role="alert">Berhasil ditambahakan!</div>
            <?php
        } else{
            ?>
            <div class="alert alert-danger" role="alert">Gagal ditambahakan!</div>
            <?php
        }
    }
?>

<section class="container mt-4">
    <div class="row justify-content-center">
        <div class="row justify-content-center mt-3 ">
            <div class="col-sm">
                <div class="card">
                    <div class="card-header text-center" style="background: linear-gradient(to right, #33ccff 0%, #ccff33 100%);">
                        <h4>WAD Beauty</h4>
                        Tersedia Skin Care yang alami dan tidak murahan
                    </div>
                   
                    <div class="row">
                        <div class="col-sm d-flex pr-0">
                            <div class="card" style="width: 18rem;">
                                <img src="assets/image/skin.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">FACE WASH WATER</h5>
                                    <p class="card-text">skincare yang bisa membuat kulit anda glowing</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Rp. 108.000</li>
                                </ul>
                                <div class="card-footer">
                                    <a href="addcart.php?name=FACE WASH WATER&harga=108000" class="btn btn-primary btn-block">Tambah ke Keranjang</a>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-sm d-flex p-0">
                            <div class="card" style="width: 18rem;">
                                <img src="assets/image/spray.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">FACE SPRAY</h5>
                                    <p class="card-text">dapat melembabkan kulit wajah anda </p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Rp. 108.000</li>
                                </ul>
                                <div class="card-footer">
                                    <a href="addcart.php?name=FACE SPRAY&harga=180000" class="btn btn-primary btn-block">Tambah ke Keranjang</a>
                                </div>
                            </div>
                        </div>
                      
                        <div class="col-sm d-flex pl-0">
                            <div class="card" style="width: 18rem;">
                                <img src="assets/image/cuci.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">FACEWASH MAN</h5>
                                    <p class="card-text">melembabkan kulit wajah pria yang kering</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Rp. 169.000</li>
                                </ul>
                                <div class="card-footer">
                                <a href="addcart.php?name=FACEWASH MAN&harga=169000" class="btn btn-primary btn-block">Tambah ke Keranjang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</body>
</html>
