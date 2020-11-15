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

    <div class="Container mt-5 text-center text-primary">
        <h3>WELCOME TO EAD EVENTS</h3>
    </div>
    <div class="container">
        <div class="row">
            <?php
            require("conn.php");

            $query = mysqli_query($conn, "select * from event");
            $cek = mysqli_num_rows($query);
            if($cek==0){
            echo "Not Event found";
            }else{
              while($db=mysqli_fetch_assoc($query)){
                echo '
                    
                    <div class="col-md-4 my-4 shadow bg-white rounded">
                      <div class="card p-2">
                          <img src="'.$db['gambar'].'" class="card-img-top" alt="...">
                          <div class="card-body">
                              <h5 class="card-title">'.$db['name'].'</h5>
                              <p class="card-text mb-5"></p>

                              <table>
                              <tr>
                              <th scope="row">
                                <svg width="1em" height="1em" viewBox="0 0 16 16"
                                class="bi bi-calendar-date" style="color: orange" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                <path
                                    d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z" />
                                </svg>
                              </th>
                              <th class="text-left">
                                '.$db['tanggal'].'
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
                                '.$db['tempat'].'
                            </th>
                            </tr>
                            <tr>
                              <th scope="row">
                                Kategori : 
                              </th>
                              <th>
                              '.$db['kategori'].'
                              </th>
                            </tr>
                            </table>
                              <div class=" card-footer">
                                <div class="text-center">
                                  <a type="button" href="detail.php?id='.$db['id'].'" class="btn btn-primary">Detail</a>
                                </div>  
                              </div>
                          </div>
                      </div>
                    </div>
                
                
                
                ';
              }
                
            }
            ?>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    </body>

</html>