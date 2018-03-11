<?php
include 'dbh.php';
session_start();
if(isset($_POST['sub'])){
$uname=$_POST['uname'];
$pass=$_POST['pass'];                                
$sql="SELECT * FROM signup WHERE `username`='$uname' AND `password`='$pass';";

$result=mysqli_query($conn,$sql);

if($row=$result->fetch_assoc()){
    echo $_SESSION['name']=$_POST['uname'];
   header("Location:home.php"); 

	}
else{
	
   header("Location:error.php");
} 
}
?> 

<!DOCTYPE html> 
<html>
<head>
    <title>Online Chatting</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body> 
<div id="main">
    <div id="info">
        <h2>login here</h2>
        <form  method="post">
        <label><b>UserName</b></label>
        <input type="text" name="uname" placeholder="User name" required><br><br>
        <label><b>Password</b></label>
        <input type="password" name="pass" placeholder="Password"><br><br>
        <button style="background-color: #6495ed;color:white;" type="submit" name="sub" ><b>Login</b></button>
        </form>
		  </div>
</div>
</body>
</html>