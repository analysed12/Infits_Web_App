<?php
  define('DB_SERVER','localhost');
  define('DB_PASSWORD','password@123');
  define('DB_USERNAME','root');
  define('DB_DATABASE','infits');
  $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
  if($conn === false)
  {
  	echo("cannot connect server".mysqli_connect_error());
  }
  else
  {
  	echo("connect");
  }
?>