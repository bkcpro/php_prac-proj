<?php
  class BMW extends Car{
    public $company = "BMW";

    public function __construct($name, $color, $doors, $price, $inventory){

      $this->name = $name;
      $this->doors = $doors;
      $this->color = $color;
      $this->price = $price;
      $this->inventory = $inventory;
    }

    public function price(){
      echo "<h1> The price of this {$this->company} {$this->name} is {$this->price}</h1>";

      echo "<h3>{$this->inventory->carTotal($this->company)}</h3>";
    }

    public function features(){
      echo "<h2> BMW is fully equipped </h2>";
    }
  }
 ?>
