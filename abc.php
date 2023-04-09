<?php
session_start();
$user=$_POST['user'];
$email=$_POST['email'];
$password=$_POST['password'];
$pass=$_POST['psw'];
echo $email."<br>".$password."<br>".$pass;
$servername = "localhost";
$username = "root";
$password1 = "";
$dbname = "hackathon";
// Create connection
$conn = new mysqli($servername, $username, $password1, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM hackathon where email='".$email."' and password='".$password."' and pass='".$pass."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
	{
	$row = $result->fetch_assoc();
	$_SESSION['user']=$row['user'];
	$_SESSION['email']=$row['email'];
	$_SESSION['password']=$row['password'];
	header("Location:success.php");
	}
else
	{
	header("Location:error.php");
	}
?>