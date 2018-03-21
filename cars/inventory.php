<?php

  class Inventory{

    public function carTotal($company){
      $companies = [
        "BMW" => 123,
        "Honda" => 243
      ];

      $totalCars = $companies[$company];
      return "Total number of cars: {$totalCars}";
    }

  }
 ?>
