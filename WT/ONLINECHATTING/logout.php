<?php
include "dbh.php";
session_start();
session_destroy();
$sql = "delete from posts";
mysqli_query($conn,$sql);
header("Location:first.html");
?>   