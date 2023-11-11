<?php
header('Content-Type: text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "czuaojxg_358", "691579", "czuaojxg_358");
if ($mysqli == false){
print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}else{
  
$email = trim(mb_strtolower($_POST["email"]));
$name = trim(mb_strtolower($_POST["name"]));

$result = $mysqli->query("SELECT * FROM `catdog` WHERE `email`='$email'");

if ($result->num_rows != 0) {
  print("exist");

} else {
  $mysqli->query("INSERT INTO `catdog`(`email`, `name`) VALUES ('$email', '$name')");
  print("ok"); 
}
}