<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">INFO1208 - PHP - LAB09</h1>
      <p class="lead">From: Carlos Ferraz</p>
    </div>
  </div>
  <div class="container">
    <?php
    /**
    * Follow the instructions below, filling in the missing information and observing the output
    * to learn the functions.
    * Please take an extra few minutes to play with the values and observe the output
    * break the code, fix it and learn the boundaries of using these functions
    */
    ?>
    <div class="card">
      <div class="card-header">
        4 marks
      </div><!-- end of card-header -->
      <div class="card-body">
        <?php
          // Look in documentation at https://www.php.net/manual/en/function.date.php to assist with the below
          echo 'Today is ' . date("l") . "<br/>"; //output the current day in the format "Friday"
          echo 'Today is ' . date("l M j, Y") . "<br/>"; //look up how I got this

          //4 marks
          echo 'Today is ' . date("D F j") . " in the year " . date("Y") . "<br/><br/>"; //output "Today is Fri March 27 in the year 2020"

        ?>
      </div><!-- end of card-body-->
    </div><!-- end of card-->
    <?php 
    

    //Work with the unix timestamp https://www.php.net/manual/en/function.time.php
    echo "Unix time right now is: " . time() . "<br/>"; //refresh your browser to watch this value update
    echo "The GMT time right now is: " . date("H:m:s", time()) . "<br/>";

    // 3 marks
    $twoHours = 2*60*60;
    echo "The GTM time in 2 hours from now is: " . date("H:m:s", time() + $twoHours) . "<br/>";//check the php manual

    echo "<hr>"; //some spacing

    // Generate a unix timestamp https://www.php.net/manual/en/function.mktime.php
    echo "Unix time for 6pm UTC March 25,2020 is: " . mktime(19,0,0,3,25,2020), "<br/>";

    //fill in missing values and check against https://www.unixtimestamp.com/index.php to verify answer

    // 6 marks
    echo "Unix time for 3am UTC December 25,2021 is: " . mktime(), "<br/><br/>";  //

    echo "<hr>"; //some spacing

    //Notice you can use commas in PHP to output a list of items
    //REview the following, change some of these values, reload and observe output
    //verify outputs against https://www.unixtimestamp.com/index.php
    echo strtotime("now"), "<br/>";
    echo strtotime("10 September 2000"), "<br/>";
    echo strtotime("+1 day"), "<br/>";
    echo strtotime("+1 week"), "<br/>";
    echo strtotime("+1 week 2 days 4 hours 2 seconds"), "<br/>";
    echo strtotime("next Thursday"), "<br/>";
    echo strtotime("last Monday"), "<br/>";

    //Try any 2 strings and verify your results are working
    //2 marks
    echo "Ryan Price strtotime tests<br/>";
    echo strtotime(""), "<br/>";
    echo strtotime(""), "<br/><br/>";

    echo "<hr>"; //some spacing

    // isset() https://www.php.net/manual/en/function.isset.php and unset() https://www.php.net/manual/en/function.unset.php
    $my_Array['my_key'] = "Got something";
    $b = 0;

    echo 'val of $my_Array["my_key"] is:';
    var_dump($my_Array['my_key']);
    echo "<br/>val of b is:";
    var_dump($b);
    echo "<br/><br/>";

    //WRONG
    if($b){
      echo 'WRONG:b is set';
    }else{
      echo 'WRONG:b is NOT set:';
      var_dump($b);
    }

    //CORRECT way to verify a variable is declared, ALWAYS use isset() to check if a var has been declared
    if(isset($b)){
      echo 'CORRECT:b is set:';
      var_dump($b);
    }else{
      echo 'CORRECT:b is NOT set:';
      var_dump($b);
    }

    //now we can destroy $b and see what we get
    unset($b);
    if(isset($b)){
      echo 'CORRECT:b is set:';
      var_dump($b);
    }else{
      echo 'CORRECT:b is NOT set:';
      var_dump($b);
    }

    echo "<hr>"; //some spacing
    //Change $a to the value zero and do an if/else statement to output the value of $a
    // 5 marks
    /*
    if(){


    }else{

    }
    */

    echo "<hr>"; //some spacing
    //How to use setcookie() https://www.php.net/manual/en/function.setcookie.php

    echo 'contents of $_COOKIE' . "<br/>";
    var_dump($_COOKIE);
    //set a cookie with an expiration of now + 3600 seconds = 1 week
    //setcookie("ryan_cookie","value of ryan cookie", time() + 3600); //uncomment this line, and refresh
    echo 'contents of $_COOKIE after' . "<br/>";
    var_dump($_COOKIE);
    //now comment out the setcookie() 3 lines above and relaod... you are seeing the cookie from the browser

    //to REMOVE a cookie, setcookie() with a time parameter set to the past
    setcookie('ryan_cookie', "", time() - 3600); //UNCOMMENT and refresh


    //set your own cookie to expire in 3 days (3 marks)

    //delete your cookie (3 marks)

    echo "SESSION<hr>"; //some spacing

    //Very similar to cookies you can set session variables and delete them
    //  docs are here session_start() https://www.php.net/manual/en/function.session-start
    session_start(); //uncomment, session_start() IS MANDATORY to do any sessions stuff !!!!
    echo 'SESSION dump contains:';
    var_dump($_SESSION);

    echo 'The session ID is:' . session_id(); // refresh.. this does not change, it is unique and almost impossible to guess

    //store something in our session using $_SESSION['your_key'] = "your val"; (2 marks)

    ?>

    Now go see check to see if we can retreive our sessions variable in the <a href="week10_sessiontest_solutions.php">next page</a>
  
  </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>