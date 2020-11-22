<?php 
session_start();
include("conn.php");
$id = $_SESSION['id'];
$name = $_GET['name'];
$harga = $_GET['harga'];

$insert = "INSERT INTO `cart`(`id`, `user_id`, `nama_barang`, `harga`)
    VALUES ('','$id','$name','$harga')";
// echo $insert;
$query = mysqli_query($db, $insert);

if ($query > 0) {
    header('location: indeks.php?status=success');
} else {
    header('location: indeks.php?status=failed');
}

?>