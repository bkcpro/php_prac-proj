<?php

  class Car{
    public $doors = 4;
    public $color = "Black";

    // should a base class contain a function which has a property that's not present as a variable in the base class?
    // as in "$this->company" here, although when this class is extended and an object is created through the extended class
    // is this a good idea?

    public function statement(){
      echo "<h1>{$this->company} {$this->name} has {$this->doors} doors and the color is {$this->color}</h1>";
    }
  }

?>
