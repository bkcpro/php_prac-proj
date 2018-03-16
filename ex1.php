<?php

  $repFunc = function($str, $num){
    $i=0;

    while($i < $num){
      echo "<h4>{$str}</h4>";
      $i++;
    }
  }

 ?>

 <!DOCTYPE html>
 <html lang="en">
  <head>
    <title> Testing array functions </title>
  </head>

  <body>

    <pre>
      <?php

        $usrNum = 5;
        $repFunc("bhrgv", $usrNum)

      ?>
    </pre>

  </body>
 </html>
