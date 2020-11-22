<?php
$server = "localhost";
$user="root";
$password = "";
$nama_database = "wad_modul4";
$db = mysqli_connect($server, $user, $password, $nama_database, 3307);
if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>