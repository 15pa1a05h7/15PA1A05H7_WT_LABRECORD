<?php
include 'dbh.php';
session_start(); 
$msg=$_POST['msg'];
$name=$_POST['name'];
$sql = " INSERT INTO posts(`msg`,`name`)VALUES('$msg','$name')";
mysqli_query($conn,$sql);
header("Location:home.php");
?>