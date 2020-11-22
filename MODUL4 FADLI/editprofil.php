<?php 
session_start();
include("conn.php");
if(isset($_POST['submit'])){
    $id = $_SESSION['id'];
    $name = $_POST['nama'];
    $nohp = $_POST['no_hp'];
    $password = $_POST['password'];
    $cekpass = $_POST['cekpassword'];

    $_SESSION['color'] = $_POST['warna'];

    if ($password == $cekpass) {
        $update = "UPDATE `user` SET `nama`='$name', `no_hp`='$nohp',`password`='$password' WHERE `id` = '$id'";
        $query = mysqli_query($db, $update);
        
        if ($query > 0) {
            $_SESSION['name'] = $name;
            header('location: profil.php?status=success');
        } else {
            header('location: profil.php?status=failed');
        }
        
    } else {
        header('location: profil.php?status=failed');
    }
           
}

?>