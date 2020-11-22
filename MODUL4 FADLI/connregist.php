<?php 
include("conn.php");
if(isset($_POST['submit'])){
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $nohp = $_POST['no_hp'];
    $password = $_POST['password'];
    $cekpass = $_POST['cekpass'];

    if ($password == $cekpass) {
        $insert = "INSERT INTO `user`(`id`, `nama`, `email`, `no_hp`, `password`) 
                    VALUES ('','$name','$email','$nohp','$password')";
        $query = mysqli_query($db, $insert);
        
        if ($query > 0) {
            header('location: regist.php?status=success');
        } else {
            header('location: regist.php?status=failed');
        }
        
    } else {
        header('location: regist.php?status=failed');
    }
           
}
?>