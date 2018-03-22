<?php

  require("cars/inventory.php");
  require("cars/cars.php");
  require("cars/honda.php");
  require("cars/BMW.php");


  $hondaCar = new Honda("Civic", 4, "black", "$25,000", new Inventory);
  $bmwCar = new BMW("I8", 2, "blue", "$60,000", new Inventory);

  // $hondaCar->statement();
  // $hondaCar->price();
  // echo "<hr />";
  // $bmwCar->statement();
  // $bmwCar->price();
  // $bmwCar->features();

  $hondaCar->storyTime();
 ?>

 <!DOCTYPE html>
 <html lang="en">
  <head>
    <title> Trying classes and objects, basic stuff </title>
  </head>

  <body>
  </body>

 </html>
