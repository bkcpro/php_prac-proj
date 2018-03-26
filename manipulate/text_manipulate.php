<?php

  class text{

    public function __construct($text){

      $this->text = $text;
    }

    public function print(){
      echo $this->text;
    }

    public function toUpperCase(){
      $this->text = strtoupper($this->text);

      return $this;
    }



  }




?>
