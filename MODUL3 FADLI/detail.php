<?php
require("conn.php");

$id = $_GET["id"];

$db = query("SELECT * FROM event WHERE id = $id")[0];
$banefit= explode(",",$db['banefit']);

function update($data){
    global $conn;
        $id= ($data['id']);
        $name= ($data['name']);
        $deskripsi = ($data['deskripsi']);
        
        $kategori = ($data['kategori']);
        $tanggal = ($data['tanggal']);
        $mulai = ($data['mulai']);
        $berakhir = ($data['berakhir']);
        $tempat = ($data['tempat']);
        $harga = ($data['harga']);
        $banefit = $data['banefit'];
        $banefit_str = implode(",",$banefit);

        if(is_uploaded_file($_FILES['gambar']['tmp_name'])){
            $gambar= upload();
            $namagambar = query("SELECT gambar FROM event WHERE id = $id")[0]['gambar'];
            unlink(''.$namagambar);
            $query = "UPDATE event SET
            name = '$name',
            deskripsi = '$deskripsi',
            gambar= '$gambar',
            kategori= '$kategori',
            tanggal ='$tanggal',
            mulai='$mulai',
            berakhir='$berakhir',
            tempat ='$tempat',
            harga ='$harga',
            banefit ='$banefit_str'
                WHERE id = $id      
            ";
        }else{
            $query = "UPDATE event SET
            name = '$name',
            deskripsi = '$deskripsi',
            kategori= '$kategori',
            tanggal ='$tanggal',
            mulai='$mulai',
            berakhir='$berakhir',
            tempat ='$tempat',
            harga ='$harga',
            banefit ='$banefit_str'
                WHERE id = $id      
            ";
        }
        
mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
}

if( isset($_POST["submit"])){
  if(update($_POST) > 0 ){
      echo "
          <script>
              alert('Data berhasil diubah');
              document.location.href = 'detail.php?id=$id';
          </script>
      ";
  }elseif (update($_POST)==0){
      echo "
          <script>
              alert('Tidak ada data yang dirubah');
              document.location.href = 'detail.php?id=$id';
          </script>
      ";
  }
  else {
      echo "
          <script>
              alert('Data gagal diubah');
              document.location.href = 'detail.php?id=$id';
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

    <h2 class="text-center text-primary">Detail Event!</h2>
    <div class="container mt-5 ">
        <div class="col sm-4">
            <div class="card text-center shadow bg-white rounded mt-5 mr-4 ml-4 mb-5">
                <div class=" card-header">
                    <img src="<?=$db['gambar']?>" class="card-img-top" height="500px" alt="...">
                </div>
                <div class="card-body">
                    <h3 class="card-title text-left"><?=$db['name']?></h3>
                    <div>
                        <p class="card-text text-left"><b>Deskripsi</b></p>
                        <p class="card-text text-left"><?=$db['deskripsi']?></p>
                    </div>
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2" class="text-left">Informasi Events</th>
                                <th scope="col" colspan="2" class="text-left">Banefit</th>
                                <th scope="col" class="text-left"></th>
                                <th scope="col" class="text-left"></th>
                                <th scope="col" class="text-left"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><svg width="1em" height="1em" viewBox="0 0 16 16"
                                        class="bi bi-calendar-date" style="color: orange" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                        <path
                                            d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z" />
                                    </svg>
                                </th>
                                <th class="text-left">
                                    <?= $db['tanggal']?>
                                </th>
                                <th class="text-left">
                                    <li><?= $db['banefit']?></li>
                                </th>

                            </tr>
                            <tr>
                                <th scope="row">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill"
                                        style="color: orange" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    </svg>
                                </th>
                                <th class="text-left">
                                    <?= $db['tempat']?>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock"
                                        style="color: orange" fill=" currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z" />
                                        <path fill-rule="evenodd"
                                            d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                    </svg>
                                </th>
                                <th class="text-left">
                                    <?= $db['mulai']?> - <?= $db['berakhir']?>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" class="text-left">
                                    Katagori
                                </th>
                                <th class="text-left">
                                    <?= $db['kategori']?>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row" class="text-left">
                                    HTM
                                </th>
                                <th class="text-left"> RP
                                    <?= $db['harga']?>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <!-- Button trigger modal -->
                    <form form action="" method="post" enctype="multipart/form-data">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Edit
                        </button>
                        <a class="btn btn-danger " href="hapus.php?id=<?=$db['id']?>"
                            onclick="return confirm('apakah anda yakin menghapus event?');">
                            Delete
                        </a>
                    </form>


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Events</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container mt-3">
                                        <h3 class="text-primary">Edit Event</h3>
                                    </div>
                                    <div class="container mt-3">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="card">
                                                        <div class="card-header bg-danger"></div>
                                                        <div class="card-body">
                                                            <input type="hidden" name="id" value="<?= $db['id']?>">
                                                            <div class="form-group ">
                                                                <label class="text-left"
                                                                    for="inputName"><b>Name</b></label>
                                                                <input type="text" class="form-control"
                                                                    value="<?= $db['name']?>" name="name">
                                                            </div>
                                                            <div class="form-group ">
                                                                <label for="inputDeskripsi"><b>Deskripsi</b></label>
                                                                <textarea type="text-area" class="form-control"
                                                                    name="deskripsi"><?= $db['deskripsi']?></textarea>
                                                            </div>
                                                            <div class="form-group ">
                                                                <label for="inputGambar"><b>Upload Gambar</b></label>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input"
                                                                        id="gambar" name="gambar"
                                                                        value="<?= $db['gambar']?>">
                                                                    <label class="custom-file-label"
                                                                        for="customFile">Choose
                                                                        file</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <label for="inputKategori"><b>Kategori</b></label>
                                                                <div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="kategori" id="inlineRadio1"
                                                                            value="Online"
                                                                            <?=$db['kategori']=='Online' ? "checked":""?>>
                                                                        <label class="form-check-label"
                                                                            for="inlineRadio1">Online</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="kategori" id="inlineRadio2"
                                                                            value="Offline"
                                                                            <?=$db['kategori']=='Offline' ? "checked":""?>>
                                                                        <label class="form-check-label"
                                                                            for="inlineRadio2">Offline</label>
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
                                                                <input type="date" class="form-control" name="tanggal"
                                                                    value="<?= $db['tanggal']?>">
                                                            </div>
                                                            <div class="form-group ">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <label for="inputDeskripsi"><b>Jam
                                                                                Mulai</b></label>
                                                                        <input type="time" name="mulai"
                                                                            class="form-control"
                                                                            value="<?= $db['mulai']?>">
                                                                    </div>
                                                                    <div class="col">
                                                                        <label for="inputDeskripsi"><b>Jam
                                                                                Berakhir</b></label>
                                                                        <input type="time" name="berakhir"
                                                                            class="form-control"
                                                                            value="<?= $db['berakhir']?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <label for="inputTempatl"><b>Tempat</b></label>
                                                                <input type="text" class="form-control" name="tempat"
                                                                    value="<?= $db['tempat']?>">
                                                            </div>
                                                            <div class="form-group ">
                                                                <label for="inputHarga"><b>Harga</b></label>
                                                                <input type="number" class="form-control" name="harga"
                                                                    value="<?= $db['harga']?>">
                                                            </div>
                                                            <div class="form-group ">
                                                                <label for="inputBanefit"><b>Banefit</b></label>
                                                                <div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="banefit[]" id="inlineCheckbox1"
                                                                            value="Snack"
                                                                            <?=in_array('Snack',$banefit) ? "checked":""?>>
                                                                        <label class="form-check-label"
                                                                            for="inlineCheckbox1">Snack</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="banefit[]" id="inlineCheckbox2"
                                                                            value="Sertifikat"
                                                                            <?=in_array('Sertifikat',$banefit) ? "checked":""?>>
                                                                        <label class="form-check-label"
                                                                            for="inlineCheckbox2">Sertifikat</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="banefit[]" id="inlineCheckbox3"
                                                                            value="Souvernir"
                                                                            <?=in_array('Souvernir',$banefit) ? "checked":""?>>
                                                                        <label class="form-check-label"
                                                                            for="inlineCheckbox3">Souvenir</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <button type="button" class="btn btn-danger"
                                                            data-dismiss="modal">Cancel</button>
                                                        <button style="font-family: Times News Roman;" type="submit"
                                                            name="submit" class="btn btn-primary">Save Changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  -->




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