<?php 
require_once ("connection.php");

$id = $_GET['check'];

$sql = "DELETE FROM tbl_users WHERE user_id = '$id'";

if ($conn->query($sql) === TRUE) {
	header("location: users.php");
}else{
	echo "Error". $sql . "<br>" . $conn->error;
}

?>