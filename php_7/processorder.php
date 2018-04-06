<!DOCTYPE html>
<html lang="en">
  <head>
    <title> "Php script for Auto-shop "</title>
  </head>

  <body>
    <h1> Bob's auto parts </h1>
    <h2> Order results </h2>
    <?php

      $tireqty = $_POST['tireqty'];
      $oilqty = $_POST['oilqty'];
      $sparkqty = $_POST['sparkqty'];


      echo htmlspecialchars($tireqty) . ' tires<br />';
      echo htmlspecialchars($oilqty) . ' oil<br />';
      echo htmlspecialchars($sparkqty) . ' spark plugs<br />';

    ?>
  </body>
</html>
