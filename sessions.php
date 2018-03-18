<?php

  session_start();

  $_SESSION["amazon_key"] = "AmazonProduct";
  $_SESSION["AmazonProduct"] = "Mac_book_air";
?>


<!DOCTYPE html>
<html>
  <head>

    <title> Testing sessions </title>
  </head>

  <body>

    <pre>
      <?php

        if(isset($_SESSION["amazon_key"])){
          echo "{$_SESSION['amazon_key']}: {$_SESSION['AmazonProduct']} \n\n";

          var_dump($_SESSION);
        }

      ?>
    </pre>

  </body>

</html>
