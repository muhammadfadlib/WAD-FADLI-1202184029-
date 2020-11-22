<?php 
session_start();
include("conn.php");
$id = $_GET['id'];

$delete = "DELETE FROM `cart` WHERE `id`='$id'";
// echo $insert;
$query = mysqli_query($db, $delete);

if ($query > 0) {
    header('location: chart.php?status=success');
} else {
    header('location: chart.php?status=failed');
}

?>