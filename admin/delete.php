<?php
require_once ("connection.php");

$id = $_GET['check'];

$sql = "DELETE FROM tbl_bitcoin WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
	header("location: index.php");
}else {
	echo "Error" . $sql . "<br>". $conn->error;
}

?>