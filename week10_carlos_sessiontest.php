<?php
    //Check our session output

    //start the session ( 1 mark )
    session_start();

    //output a user friendly message for your value (2 marks)

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css"/>
    <title>INFO1208 - LAB09</title>
  </head>
  <body>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">INFO1208 - PHP - LAB09 - SESSION TEST</h1>
      <p class="lead">From: Carlos Ferraz</p>
    </div>
  </div>
  <div class="container">
    <div class="card">
      <div class="card-header">
        The value of the custom session variable is:
      </div><!-- end of card-header -->
      <div class="card-body">
        <?php
            echo '$_SESSION["carlos_session_key"] = ' . $_SESSION['carlos_session_key'];
        ?>
      </div><!-- end of card-body-->
    </div><!-- end of card-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
