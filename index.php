<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-8 col-lg-8 text-center mx-auto">
                <h2 class="text-center border rounded p-2">Welcome To Gueesing Game</h2>
                <p><i>You will have <b>5</b> tries to guess the correct number <b>(1-10)</b></i></p>
                <h4 class="text-success "><i>GOOD LUCK</i></h4>

                <a href="guessingGame.php" class="btn btn-lg btn-danger text-center">Start The Game</a>

            </div>
        </div>
    </div>


    <?php
    $_SESSION['rand'] = rand(1, 10);
    //echo $_SESSION['rand'];
    $_SESSION['counter'] = 0;
    ?>
    <div style="height: 300px;">

    </div>

    <footer class="text-center bg-primary mt-4 text-white ">
        <p>Design & Developed By <a>Practicehouse.com</a></p>
        <i>Md Arifur Rahman Alif</i>
    </footer>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>