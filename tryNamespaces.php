<?php

  require('cars/name.php');
  require('user/name.php');

  use app\cars\name as carName;
  use app\user\name as userName;

  $carName = new carName("porsche");
  echo $carName->name . "<br />";
  $userName = new userName("bhargava");
  echo $userName->name;
?>
