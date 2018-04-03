<?php

    require("static_var_func.php");

    echo "<h1> Using static variable: " .useStatic::$var. "</h1>";
    echo "<h2> Using static function: ";
    echo useStatic::callHiddenVar(). "</h2>";

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
