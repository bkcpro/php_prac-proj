<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="ex2.php" method="POST">
      <label for="username"> Username </label>
      <input type="text" name="username" />

      <label for="password"> Password </label>
      <input type="password" name="password" />

      <button type="submit">Send</button>
    </form>


  </body>
</html>

<?php

  //get method

  if(isset($_GET['username'])){
    echo "<h1>The username is: {$_GET['username']}</h1>";
    echo "<h2>The lastname is: {$_GET['lastname']}</h2>";
    echo "<h3>The firstname is: {$_GET['firstname']}</h3>";
  }

  //post method

  //resolve isset($_POST['username']) issue => BLOCK prints blank
  echo "<h2>The username user submitted is: {$_POST['username']}</h2>";



?>
