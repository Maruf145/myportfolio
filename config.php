<?php

$host ="localhost";
$dbUser ="wordpress";
$dbPwd ="123456";
$dbName ="my_fast_website";

$connect = mysqli_connect($host,$dbUser,$dbPwd,$dbName);

 if($connect == false){

      echo "<h1>Sorry anything wrong</h1>";
 }else{

    echo "welcome";
 }


?>