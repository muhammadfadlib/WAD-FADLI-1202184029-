<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title></title>
    <style>
    .navbar {
        background-color: rgb(19, 19, 250);
    }

    .nav-link {
        color: black;
    }
    </style>
</head>

<body>

    <nav>
        <ul class="nav justify-content-center bg-primary text-light">
            <li class="nav-item">
                <a class="nav-link" href="./home.php">home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./booking.php">booking</a>
            </li>
        </ul>
    </nav>
    <br>
    <h1 style="color: rgb(57, 75, 235);" class="text-center"> EAD HOTEL
    </h1>
    <h4 style="color: rgb(57, 75, 235);" class="text-center"> Welcome To 5 Star Hotel
    </h4>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
                <div class="card mr-3" style="width: 23rem;">
                    <img src="std.jpg" class="card-img-top" width="300px" height="300px">
                    <div class="card-body">
                        <h5>
                            <center> Standard </center>
                        </h5>
                        <p style="color:blue" class="text-center">$ 90/Day </p>
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>
                                        <center> facilities </center>
                                    </td>
                                </tr>
                                <td>
                                    <center> 1 single bed </center>
                                </td>
                                </tr>
                                <td>
                                    <center> 1 bathroom </center>
                                </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-center">
                        <a href="booking.php?room=<?php echo 'Standard&img=std.jpg' ?>"><button type="button"
                                class="btn btn-primary">Book Now</button></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mr-3" style="width: 23rem; ">
                    <img src="sup.jpg" class="card-img-top" width="300px" height="300px">
                    <div class="card-body">
                        <h5>
                            <center> Superior </center>
                        </h5>
                        <p style="color:blue" class="text-center">$ 150/Day </p>
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>
                                        <center> facilities </center>
                                    </td>
                                </tr>
                                <td>
                                    <center> 1 double bed </center>
                                </td>
                                </tr>
                                <td>
                                    <center> 1 Television and Wi-Fi </center>
                                </td>
                                </tr>
                                <td>
                                    <center> 1 Bathroom with hot water </center>
                                </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-center">
                        <a href="booking.php?room=<?php echo 'Superior&img=sup.jpg' ?>"><button type="button"
                                class="btn btn-primary">Book Now</button></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 23rem; ">
                    <img src="lux.jpg" class="card-img-top" width="300px" height="300px">
                    <div class="card-body">
                        <h5>
                            <center> luxury </center>
                        </h5>
                        <p style="color:blue" class="text-center">$ 150/Day </p>
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>
                                        <center> facilities </center>
                                    </td>
                                </tr>
                                <td>
                                    <center> 2 double bed </center>
                                </td>
                                </tr>
                                <td>
                                    <center> 2 Bathroom with hot water </center>
                                </td>
                                </tr>
                                <td>
                                    <center> 1 Television and Wi-Fi </center>
                                </td>
                                </tr>
                                <td>
                                    <center> 1 workroom </center>
                                </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-center">
                        <a href="booking.php?room=<?php echo 'Luxury&img=lux.jpg' ?>"><button type="button"
                                class="btn btn-primary">Book Now</button></a>
                    </div>
</div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
        </script>
</body>

</html>