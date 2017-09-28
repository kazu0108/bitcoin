<?php 
require_once "connection.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO tbl_users(`username`, `password`) VALUES('$username', '$password')";

if ($conn->query($sql) === TRUE) {
	header("location: users.php");
}else {
	echo "Error" . $sql . "<br>" . $conn->error;
}

$conn->close();

?>