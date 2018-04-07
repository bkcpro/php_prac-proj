<!DOCTYPE html>
<html lang="en">
  <head>
    <title> "Php script for Auto-shop "</title>

    <style>
      .listOfItems{
        color: blue;
        background-color: black;
        max-width: 140px;
      }

      .iDiv{
        color: red;
        margin: 20px;
      }

    </style>

  </head>

  <body>


    <h1> Bob's auto parts </h1>
    <h2> Order results </h2>
    <h3> Discount offered: <br /></br>

         Fewer than 10 tires purchased- No discount </br>
         10 - 49 tires purchased      - 5% discount </br>
         50 - 99 tires purchased      - 10% Discount </br>
         100 or more tires purchased  - 15% discount </br>

    </h3>
    <?php

      $tireqty = $_POST['tireqty'];
      $oilqty = $_POST['oilqty'];
      $sparkqty = $_POST['sparkqty'];

      if($tireqty < 10){
        $discount = 0;
      }
      else if($tireqty>9 && $tireqty<50){
        $discount = 5;
      }
      else if($tireqty>49 && $tireqty<100){
        $discount = 10;
      }
      else if($tireqty>99){
        $discount = 15;
      }

      echo "<div class = \"listOfItems\">
        $tireqty     <span class=\"iDiv\"> Tire(s) </span><br />
        $oilqty      <span class=\"iDiv\"> Oil bottle(s) </span><br />
        $sparkqty    <span class=\"iDiv\"> Spark plug(s) </span><br />
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
      echo "Total including tax: &emsp;&emsp;$" . number_format($totalamount) . "<br />";
      echo "Discount: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" . $discount. "%<br />";
      echo "Total after discount: &emsp;$" . ($totalamount - ($discount/100 * $totalamount)) . "</p>";

      echo "<p>
       ---------------------------------------------------------------------------
      </p>";

      //Also can assign option values' to the text

      echo "<p> Customer was found through: ";

      switch($_POST["find"]){
        case "a":
            echo "Regular customer </p>";
            break;

        case "b":
            echo "TV advertisement </p>";
            break;

        case "c":
            echo "Phone directory </p>";
            break;

        case "d":
            echo "Word of mouth </p>";
            break;

        default:
            echo "No means found </p>";
            break;
      }

    ?>

  </body>
</html>
