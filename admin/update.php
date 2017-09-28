<?php
require_once ("connection.php");

$name = $_POST['category'];
$description = $_POST['description'];
$from = $_POST['from'];
$to = $_POST['to'];
$id = $_POST['id'];

$sql = "UPDATE tbl_bitcoin SET name = '$name', description = '$description', avg_from = '$from', avg_to = '$to' WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
	header("location: index.php");
}
else{
	echo "Error:" . $sql . "<br>" . $conn->error;
}

$conn->close();


?>