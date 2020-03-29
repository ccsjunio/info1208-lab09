<?php
  // buffering output in order to be able
  // to change cookies within the html code
  // then outputing all buffering
  ob_start();

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

    ?>
    <div class="card">
      <div class="card-header">
        3 marks
      </div><!-- end of card-header -->
      <div class="card-body">
        <?php
           //Work with the unix timestamp https://www.php.net/manual/en/function.time.php
          echo "Unix time right now is: " . time() . "<br/>"; //refresh your browser to watch this value update
          echo "The time right now is: " . date("H:m:s", time()) . " (UTC)<br/>";

          // 3 marks
          $twoHours = 2*60*60;
          echo "The time in 2 hours from now is: " . date("H:m:s", time() + $twoHours) . " (UTC) <br/>";//check the php manual
        ?>
      </div><!-- end of card-body-->
    </div><!-- end of card-->
    <?php 

    ?>
    <div class="card">
      <div class="card-header">
        6 marks
      </div><!-- end of card-header -->
      <div class="card-body">
        <?php
          // Generate a unix timestamp https://www.php.net/manual/en/function.mktime.php
          echo "Unix time for 6pm UTC March 25,2020 is: " . mktime(18,0,0,3,25,2020), "<br/>";

          //fill in missing values and check against https://www.unixtimestamp.com/index.php to verify answer

          // 6 marks
          echo "Unix time for 3am UTC December 25,2021 is: " . mktime(3,0,0,12,25,2021), "<br/><br/>";  //

        ?>
      </div><!-- end of card-body-->
    </div><!-- end of card-->
    <?php 

    ?>
    <div class="card">
      <div class="card-header">
        2 marks
      </div><!-- end of card-header -->
      <div class="card-body">
        <ul class="list-group">
          <?php
            //Notice you can use commas in PHP to output a list of items
            //REview the following, change some of these values, reload and observe output
            //verify outputs against https://www.unixtimestamp.com/index.php
          ?>
          <li class="list-group-item"><?php echo strtotime("now"); ?><span class="badge badge-primary">now</span></li>
          <li class="list-group-item"><?php echo strtotime("10 September 2000"); ?><span class="badge badge-primary">10 September 2000</span></li>
          <li class="list-group-item"><?php echo strtotime("+1 day"); ?><span class="badge badge-primary">+1 day</span></li>
          <li class="list-group-item"><?php echo strtotime("+1 week"); ?><span class="badge badge-primary">+1 week</span></li>
          <li class="list-group-item"><?php echo strtotime("+1 week 2 days 4 hours 2 seconds"); ?><span class="badge badge-primary">+1 week 2 days 4 hours 2 seconds</span></li>
          <li class="list-group-item"><?php echo strtotime("next Thursday"); ?><span class="badge badge-primary">next Thrusday</span></li>
          <li class="list-group-item"><?php echo strtotime("last Monday"); ?><span class="badge badge-primary">last Monday</span></li>
          <?php 
            //Try any 2 strings and verify your results are working
            //2 marks
          ?>
          <li class="list-group-item h3"><?php echo "Carlos Ferraz strtotime tests"; ?><span class="badge badge-primary"></span></li>
          <li class="list-group-item"><?php echo strtotime("+1 month"); ?><span class="badge badge-primary">+1 month</span></li>
          <li class="list-group-item"><?php echo strtotime("+1 year"); ?><span class="badge badge-primary">+1 year</span></li>
        </ul>
      </div><!-- end of card-body-->
    </div><!-- end of card-->
    <?php

    ?>
    <div class="card">
      <div class="card-header">
        5 marks
      </div><!-- end of card-header -->
      <div class="card-body">
        <?php
          // isset() https://www.php.net/manual/en/function.isset.php and unset() https://www.php.net/manual/en/function.unset.php
          $my_Array['my_key'] = "Got something";
          $b = 0;

          echo 'val of $my_Array["my_key"] is:  ';
          var_dump($my_Array['my_key']);

          echo "<br/><br/>val of b is:  ";
          var_dump($b);

          echo "<br/><br/>";

          ?>
          <div class="card">
            <div class="card-header">
              <strong>Wrong way to test if $b is set. In this case, $b is set, but the test is in the wrong way</strong>
            </div>
            <div class="card-body">
              <?php
                //WRONG way to verify a variable is declared
                if( $b ){
                  echo '<span class="badge badge-danger">WRONG:</span>  b is set<br/><br/>';
                } else {
                  echo '<span class="badge badge-danger">WRONG:</span>  b is NOT set: ';
                  var_dump($b);
                }
              ?>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <strong>Correct way to test if $b is set. In this case, $b is set, and the test is correct, using isset</strong>
            </div>
            <div class="card-body">
              <?php
                //CORRECT way to verify a variable is declared, ALWAYS use isset() to check if a var has been declared and is not NULL
                if( isset( $b ) ){
                  echo '<span class="badge badge-success">CORRECT:</span> b is set: ';
                  var_dump( $b );
                  echo "<br/><br/>";
                } else {
                  echo '<span class="badge badge-success">CORRECT:</span> b is NOT set:';
                  var_dump( $b );
                }
              ?>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <strong>After $b is destroyed with unset and we keeping test the correct way, with isset</strong>
            </div>
            <div class="card-body">
              <?php
                //now we can destroy $b and see what we get
                unset($b);
                if(isset($b)){
                  echo '<span class="badge badge-success">CORRECT:</span> b is set:';
                  var_dump($b);
                }else{
                  echo '<span class="badge badge-success">CORRECT:</span> b is NOT set, so we get the message:';
                  ?>
                    <div class="card">
                      <div class="card-body">
                        <?php var_dump($b);?>
                      </div>
                    </div>
                  <?php
                }
              ?>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <strong>Change $a to the value zero and do an if/else statement to output the value of $a</strong>
            </div>
            <div class="card-body">
              <?php
                //Change $a to the value zero and do an if/else statement to output the value of $a
                // 5 marks

                $a = 0;

                if( isset ( $a ) ){

                  echo '<span class="badge badge-success">SUCCESS:</span> a is set and its value is: ';
                  var_dump( $a );

                }else{

                  echo '<span class="badge badge-danger">FAIL:</span> a is not set.';
                  var_dump( $a );
      
                }

              ?>
            </div>
          </div>
  
      </div><!-- end of card-body-->
    </div><!-- end of card--> 
    
    <div class="card">
      <div class="card-header">
        COOKIES!
      </div><!-- end of card header-->
      <div class="card-body">
        <?php
          //How to use setcookie() https://www.php.net/manual/en/function.setcookie.php
          echo 'contents of $_COOKIE' . "<br/>";
          var_dump($_COOKIE);
          ?>
            <div class="card">
              <div class="card-header">
                set a cookie with an expiration of now + 7*24*60*60 seconds = 1 week
              </div>
              <div class="card-body">
                <?php
                  //set a cookie with an expiration of now + 3600 seconds = 1 week
                  setcookie('ryan_cookie', 'value of ryan cookie', time() + 7*24*60*60);
                  echo 'contents of $_COOKIE after ryan_cookie' . "<br/>";
                  var_dump($_COOKIE);
                  //now comment out the setcookie() 3 lines above and relaod... you are seeing the cookie from the browser
                ?>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                to REMOVE a cookie, setcookie() with a time parameter set to the past
              </div>
              <div class="card-body">
                <?php
                  setcookie('ryan_cookie','', time() - 3600);
                  echo 'contents of $_COOKIE after ryan_cookie removal' . "<br/>";
                  var_dump($_COOKIE);
                  //now comment out the setcookie() 3 lines above and relaod... you are seeing the cookie from the browser
                ?>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                set your own cookie to expire in 3 days (3 marks)
              </div>
              <div class="card-body">
                <?php
                  setcookie('carlos_cookie', 'content of carlos_cookie', time()+3*24*60*60);
                  echo 'contents of $_COOKIE after carlos_cookie' . "<br/>";
                  var_dump($_COOKIE);
                  //now comment out the setcookie() 3 lines above and relaod... you are seeing the cookie from the browser
                ?>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                delete your cookie (3 marks) commented on the code
              </div>
              <div class="card-body">
                <?php
                  //setcookie('carlos_cookie', '', time()-3600);
                  echo 'contents of $_COOKIE after carlos_cookie removal' . "<br/>";
                  var_dump($_COOKIE);
                ?>
              </div>
            </div>
            
          </div> <!-- end of card body-->              
    </div><!-- end of card-->

    <div class="card">
      <div class="card-header">
        <strong>SESSIONS!</strong>
      </div><!-- end of card header-->
      <div class="card-body">
        
        <?php
          // Very similar to cookies you can set session variables and delete them
          // docs are here session_start() https://www.php.net/manual/en/function.session-start
          session_start(); //uncomment, session_start() IS MANDATORY to do any sessions stuff !!!!
        ?>
        
        <div class="card">
          <div class="card-header"><strong>SESSION DUMP contains:</strong></div>
          <div class="card-body"><?php var_dump($_SESSION);?></div>
        </div>

        <div class="card">
          <div class="card-header"><strong>The SESSION ID is:</strong></div>
          <div class="card-body"><?php echo session_id(); ?></div>
        </div>

        <div class="card">
          <div class="card-header"><strong>Making a custom session variable: (2 marks)</strong></div>
          <div class="card-body">$_SESSION['carlos_session_key'] = "carlos_session_value";</div>
        
              <?php
                $_SESSION['carlos_session_key'] = "carlos_session_value";
              ?>
        
        </div>

      </div><!-- end of card body-->

      <div class="card-footer">
        <p>Now go see check to see if we can retreive our sessions variable in the <a class="btn btn-primary" href="week10_carlos_sessiontest.php">next page</a></p>
      </div>
    </div><!-- end of card-->
  </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

<?php
  ob_end_flush();
?>