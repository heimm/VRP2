<?php

  if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	$proxy = $_SERVER['HTTP_X_FORWARDED_FOR']; //testimata; vb ei tööta
  else
    $proxy = "";

  $host="localhost";
  $user="test";
  $pass="t3st3r123";
  $db="test";
  $muutuja= "INSERT INTO `test`.`merlenhe_lehekylg_kylastajad` (
 `kellaaeg` ,
`ip_v4` ,
`ip_v4_proxy` 
)
VALUES (
 NOW(), '{$_SERVER['REMOTE_ADDR']}', '{$proxy}'
);
";
  $connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa �hendust mootoriga");
  mysqli_query($connection, $muutuja) or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));
  