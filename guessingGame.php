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

    <title>Guessing Game</title>
</head>

<body>
    
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-6 col-md-6 mr-3  border rounded p-4 border-danger">
                <form action="" method="GET">
                    <div class="form-group row">
                        <label for="guessNumber" class="col-4 ml-auto"> Please Guess A Number </label>
                        <div class="col-8 mr-auto">
                            <input type="text" name="guessNumber" placeholder="Guess A Number between 1 to 10" class="form-control col-6">
                        </div>
                    </div>

                    <button type="submit" name="submit" class="m-2 form-control btn btn-lg btn-block text-center btn-success p-2"> See The Result </button>
    
                </form>
            </div>




            <div class="col-lg-5 col-md-5 p-3 border rounded border-primary mx-auto">
                <?php

                $rand = $_SESSION['rand'];
                $guessNumber = 0;

                //echo "random number " . $rand . "<br>";


                if (isset($_GET['submit'])) {
                    //echo " Clicked <br>";
                    $counter = $_SESSION['counter'];
                    if ($counter < 4) {
                        $guessNumber = $_GET['guessNumber'];
                        //echo "guess number " . $guessNumber . "<br>";
                        $_SESSION['counter'] = $_SESSION['counter'] + 1;
                        //echo "Counter " . $_SESSION['counter'] . "<br>";
                        if ($guessNumber < $rand) {
                            echo "<h2 class='text-danger text-center'> Opps... </h2>";
                           echo "<h4 class='text-danger text-center'> Your Guessed Number is Too Low </h4>";
                           echo "<h2 class='text-danger text-center'> Please Try Again... </h2>"; 
                        }else if($guessNumber > $rand){
                            echo "<h2 class='text-primary text-center'> Opps... </h2>";
                            echo "<h4 class='text-primary text-center'> Your Guessed Number is Too High </h4>";
                             echo "<h2 class='text-primary text-center'> Please Try Again... </h2>"; 
                        }
                        else if($rand == $guessNumber) {
                            echo "<h2 class='text-success text-center'> Congratulations !!! </h2>";
                            echo "<h4 class='text-success border text-center'> You Guessed The Correct Number " . $rand . "<br>"
                                . "You Have Tried " . $_SESSION['counter'] . " Times </h4>";
                            $_SESSION['counter'] = 0;
                            echo "<script>
                             setTimeout(function(){ alert('CONGRATULATIONS !!! PLEASE RE-START THE GAME'); }, 2000);
                            </script>";
                            header('refresh: 3; url=index.php');
                        }
                    } else {
                        echo "<h2 class='text-danger text-center'> Sorry </h2>";
                        echo "<h3 class='text-danger text-center'> You have tried 5 Times </h3>";
                        echo "<h4 class='text-center'>The Random Number Was " . $rand ."</h4>";
                        echo "<script>
                            setTimeout(function(){ alert('GAME OVER :( PLEASE RE-START THE GAME'); }, 1000);
                        </script>";
                        header('refresh: 3; url=index.php');
                    }
                }


                ?>

               
            </div>
        </div>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>