<?php

  $amazon_key = "AmazonProduct";
  $amazon_product = "Mac_Book_Air";

  setcookie($amazon_key, $amazon_product, time() + (86400*30), "/");

?>

<!DOCTYPE html>
<html>

  <head>
    <title> Testing cookies</title>
  </head>

  <body>

    <?php

      if(isset($_COOKIE["AmazonProduct"])){
        echo $_COOKIE["AmazonProduct"];
      }
      else{
        echo "Sorry no cookies";
      }

     ?>


  </body>

</html>
