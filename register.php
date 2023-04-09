<html>
<head>
<title>Store Data</title>
</head>
<body>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password1 = "";
$dbname = "hackathon";

$user=$_POST['user'];
$email=$_POST['email'];
$password=$_POST['password'];
$pass=$_POST['psw'];


// Create connection
$conn = new mysqli($servername, $username, $password1, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="INSERT INTO hackathon VALUES ('".$user."','".$email."','".$password."','".$pass."')";

if ($conn->query($sql) === TRUE) {
        $_SESSION['user']=$user;
    	$_SESSION['email']=$email;
        $_SESSION['password']=$password;
	header("Location:success.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>
