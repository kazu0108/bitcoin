<?php
require_once ("connection.php");

$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];

$sql = "UPDATE tbl_users SET username = '$username', password = '$password' WHERE user_id = '$id'";

if ($conn->query($sql) === TRUE) {
	header("location: users.php");
}
else{
	echo "Error:" . $sql . "<br>" . $conn->error;
}

$conn->close();


?>