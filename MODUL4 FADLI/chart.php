<?php 
    session_start();
    include("conn.php");
	if (!(isset($_SESSION["id"]))) {
		header("Location: login.php");
    }
    $id = $_SESSION["id"];
    $list = "SELECT * FROM `cart` WHERE `user_id` = '$id'";
    $query = mysqli_query($db, $list);

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Cart | WAD Beauty</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
</head>
<body style="background-color: lightcyan;">

<nav class="<?php if ($_SESSION["color"] == "dark") { echo "navbar navbar-dark bg-dark";} else { echo "navbar navbar-light bg-light";}?>">
    <a class="navbar-brand" href="indeks.php">WAD Beauty</a>
    <form class="form-inline">
        <a class="nav-link" style="color:black;" href="indeks.php"><i class="fa fa-shopping-cart"></i></a>
        <div class="navbar-expand">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Selamat Datang, <?php echo $_SESSION['name'] ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="profil.php">profil</a>
                        <a class="dropdown-item" href="logout.php">logout</a>
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
            <div class="alert alert-warning" role="alert">Berhasil Dihapus!</div>
            <?php
        } else{
            ?>
            <div class="alert alert-danger" role="alert">Gagal Dihapus!</div>
            <?php
        }
    }    
?>

<section class="container mt-5">
    <div class="row justify-content-center">
        <div style="width: 900px;">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php 
            $i = 1;
            $total = 0;
            while($data = mysqli_fetch_assoc($query)) {?>
            <tr>
                <th scope="row"><?php echo $i; $i++; ?></th>
                <td><?php echo $data["nama_barang"] ?></td>
                <td>Rp <?php echo $data["harga"]; $total += $data["harga"]; ?></td>
                <td><a href="deletechart.php?id=<?php echo $data["id"];?>" class="btn btn-danger">Hapus</a></td>
            </tr>
            <?php } ?>
            </tbody>
            <thead>
                <tr>
                    <th scope="col" colspan="2">Total</th>
                    <th scope="col" colspan="2">Rp <?php echo $total ?></th>
                </tr>
                </thead>
        </table>
        </div>
    </div> 
</section>
<blockquote class="blockquote text-center mt-5">
    <footer class="blockquote-footer">&copy; 2020 Copyright; WAD Beauty </footer>
</blockquote>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</body>
</html>
