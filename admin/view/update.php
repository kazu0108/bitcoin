<?php

require_once "../connection.php";

$name = $_POST['name'];
$description = $_POST['description'];
$url = $_POST['url'];
$id = $_POST['id'];
$bitid = $_POST['categoryid'];


$sql = "UPDATE tbl_links SET link_name = '$name', `link_description` = '$description', `link_url` = '$url' WHERE link_id = '$id'";

if ($conn->query($sql) === TRUE) {
	header("location: view.php?check=$id");
}
	else{
		echo "Error" . $sql . "<br>" . $conn->error;
	
}


$conn->close()

?>