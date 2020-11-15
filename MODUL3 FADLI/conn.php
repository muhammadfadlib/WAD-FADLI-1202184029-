<?php
$conn = mysqli_connect("localhost","root", "", "wad_modul3_fadli","3307");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function upload(){
    
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpname = $_FILES['gambar']['tmp_name'];

    //untuk mengecek apakah tidak ada gambar yang di upload
    if($error === 4){
        echo "
        <script> 
            alert('pilih gambar terlebih dahulu');
        </script>
        ";
        return false;
    }
    // untuk mengecek apakah yang di upload adalah gambar atau bukan
    $ekstensigambarvalid = ['jpg', 'jpeg', 'png'];
    $ekstensigambar = explode('.' , $namafile);
    $ekstensigambar = strtolower(end($ekstensigambar));

    //mengecek adalah string didalam array
    if(!in_array($ekstensigambar, $ekstensigambarvalid)){
        echo "
        <script> 
            alert('yang di upload bukan gambar');
        </script>
        ";
        return false;
    }

    //mengecek ukuran file yang di upload
    if($ukuranfile > 10000000) {
        echo "
        <script> 
            alert('ukuran gambar terlalu besar');
        </script>
        ";
        return false;
    }
    //Generate nama file baru agar nanti nama file tidak tertimpa
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensigambar;
    
    //lolos pengecekan gambar siap untuk di atur
    move_uploaded_file($tmpname, '' . $namafilebaru);

    return $namafilebaru;
}