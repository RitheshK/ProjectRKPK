<?php

$host = "127.0.0.1";
$user = "rithesh";
$pass = "";
$db = "project_db";
$port = 3306;

$connection = mysqli_connect($host,$user,$pass,$db,$port) or die(mysql_error());
?>
