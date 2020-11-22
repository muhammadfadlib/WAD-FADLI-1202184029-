<?php
session_start();
include("conn.php");
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check = "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'";

    $query = mysqli_query($db, $check);

    if (mysqli_num_rows($query) == 1) {
        $row = mysqli_fetch_assoc($query);
        $_SESSION['id'] = $row["id"];
        $_SESSION['name'] = $row["nama"];
        $_SESSION['color'] = "light";

        header('location: login.php?status=success');
    } else{
        header('location: login.php?status=failed');  
    }
}