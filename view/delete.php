<?php
require_once ("../connection.php");

$id = $_GET['check'];

	$sql = "SELECT * FROM tbl_links WHERE link_id = '$id'";
	$result = $conn->query($sql);
	$row = $result->fetch_array();
	$bitid = $row['id'];

$sql = "DELETE FROM tbl_links WHERE link_id = '$id'";

if ($conn->query($sql) === TRUE) {
	
	header("location: view.php?check=$bitid");
}else {
	echo "Error" . $sql . "<br>". $conn->error;
}

?>