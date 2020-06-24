<?php
session_start();
$update=false;
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
$db="chetna";
$name='';
$email='';

$con=new mysqli($mysql_host,$mysql_user,$mysql_password,$db)or die(mysqli_error($mysqli));




?>