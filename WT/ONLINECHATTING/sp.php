<?php
include 'dbh.php';
session_start();
if(isset($_POST['sub'])){
$uname=$_POST['uname'];
$email=$_POST['Email'];
$pass=$_POST['pass'];
$sql="INSERT INTO signup (`username`,`email`,`password`) VALUES('$uname','$email','$pass')";
mysqli_query($conn,$sql); 
header("location:ln.php");
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
         <form  method="post">
        <h2>Don't have an account sign up here!!!</h2>
        <label>UserName:</label>
		<input type="text" name="uname" placeholder="enter name.." required><br><br>
		<label>Email:</label>
        <input type="text" name="Email" placeholder="Email"><br><br>
        <label>Password:</label>
        <input type="password" name="pass" placeholder="Password"><br><br>
        <button style="background-color: #6495ed;color:white;" type="submit" name="sub"><b>signup</b></button>
        </form>
    </div>
</div>
</body>
</html>