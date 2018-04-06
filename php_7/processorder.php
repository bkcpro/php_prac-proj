<!DOCTYPE html>
<html lang="en">
  <head>
    <title> "Php script for Auto-shop "</title>

    <style>
      .listOfItems{
        color: blue;
        background-color: black;
        max-width: 100px;
      }
    </style>

  </head>

  <body>


    <h1> Bob's auto parts </h1>
    <h2> Order results </h2>
    <?php

      $tireqty = $_POST['tireqty'];
      $oilqty = $_POST['oilqty'];
      $sparkqty = $_POST['sparkqty'];

      echo "<div class = \"listOfItems\">
        $tireqty      Tire(s) <br />
        $oilqty       Oil bottle(s) <br />
        $sparkqty     Spark plug(s) <br />
      </div>";


      $totalqty = 0;
      $totalqty = $tireqty+$oilqty+$sparkqty;

      // Fix emsp's, find alternative

      echo "<p> Items ordered: &emsp;&emsp;&emsp;&emsp;&emsp;" . $totalqty . "<br />";
      $totalamount = 0.00;

      define("TIREPRICE", 50);
      define("OILPRICE", 10);
      define("SPARKPRICE", 4);

      $totalamount = $tireqty * TIREPRICE
                + $oilqty * OILPRICE
                + $sparkqty * SPARKPRICE;

      echo "Subtotal: &emsp;&emsp;&emsp;&emsp;&emsp;$" . number_format($totalamount, 2) . "<br />";

      $taxrate = 0.10;
      $totalamount = $totalamount + $taxrate * $totalamount;
      echo "Total including tax: &emsp;&emsp;$" . number_format($totalamount) . "</p>";
    ?>

  </body>
</html>
