<?php
    require("conn.php");
    
function create($data){
    global $conn;

        $name= htmlspecialchars($data['name']);
        $deskripsi = htmlspecialchars($data['deskripsi']);
        $gambar= upload();
        if(!$gambar){
            return false;
        }
        $kategori = htmlspecialchars($data['kategori']);
        $tanggal = htmlspecialchars($data['tanggal']);
        $mulai = htmlspecialchars($data['mulai']);
        $berakhir = htmlspecialchars($data['berakhir']);
        $tempat = htmlspecialchars($data['tempat']);
        $harga = htmlspecialchars($data['harga']);

        $banefit = $data['banefit'];
        $banefit_str = implode(",",$banefit);
        
        $query = "INSERT INTO event (name, deskripsi, gambar, kategori, tanggal, mulai, berakhir, tempat, harga, banefit)
                        VALUES
            ('$name' ,'$deskripsi', '$gambar', '$kategori','$tanggal','$mulai','$berakhir','$tempat','$harga','$banefit_str')
            ";
        mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
}
    //apakah tombol subit sudah pernah dipencet atau belum
    if( isset($_POST["submit"])){
        // tambah($_POST);
    //cek apakah data berhasil ditambahkan atau tidak
    if(create($_POST) > 0 ){
        echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href = 'buat.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan');
                document.location.href = 'buat.php';
            </script>
        ";
        }
     }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand">EAD EVENTS</a>
        <form class="form-inline">
            <a class="navbar-brand" href="home.php">HOME</a>
            <a class="btn btn-outline-light my-2 my-sm-0" href="buat.php" type="submit">buat event</a>
        </form>
    </nav>

    <div class="container mt-3">
        <h3 class="text-primary">Buat Event</h3>
    </div>
    <div class="container mt-3">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header bg-danger"></div>
                        <div class="card-body">
                            <div class="form-group ">
                                <label for="inputName"><b>Name</b></label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group ">
                                <label for="inputDeskripsi"><b>Deskripsi</b></label>
                                <textarea type="text-area" class="form-control" name="deskripsi"></textarea>
                            </div>
                            <div class="form-group ">
                                <label for="inputGambar"><b>Upload Gambar</b></label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="inputKategori"><b>Kategori</b></label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kategori" id="inlineRadio1"
                                            value="Online">
                                        <label class="form-check-label" for="inlineRadio1">Online</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kategori" id="inlineRadio2"
                                            value="Offline">
                                        <label class="form-check-label" for="inlineRadio2">Offline</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card-header bg-primary"></div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group ">
                                <label for="inputTanggal"><b>Tanggal</b></label>
                                <input type="date" class="form-control" name="tanggal">
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col">
                                        <label for="inputDeskripsi"><b>Jam Mulai</b></label>
                                        <input type="time" name="mulai" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label for="inputDeskripsi"><b>Jam Berakhir</b></label>
                                        <input type="time" name="berakhir" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="inputTempatl"><b>Tempat</b></label>
                                <input type="text" class="form-control" name="tempat">
                            </div>
                            <div class="form-group ">
                                <label for="inputHarga"><b>Harga</b></label>
                                <input type="number" class="form-control" name="harga">
                            </div>
                            <div class="form-group ">
                                <label for="inputBanefit"><b>Banefit</b></label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="banefit[]"
                                            id="inlineCheckbox1" value="Snack">
                                        <label class="form-check-label" for="inlineCheckbox1">Snack</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="banefit[]"
                                            id="inlineCheckbox2" value="Sertifikat">
                                        <label class="form-check-label" for="inlineCheckbox2">Sertifikat</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="banefit[]"
                                            id="inlineCheckbox3" value="Souvernir">
                                        <label class="form-check-label" for="inlineCheckbox3">Souvenir</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="text-right">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="btn btn-danger" data-dismis="form">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script>
    $('#gambar').on('change', function() {
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    </body>

</html>