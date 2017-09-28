<?php 
require_once "connection.php";

$category = $_POST['category'];
$description = $_POST['description'];
$from = $_POST['from'];
$to = $_POST['to'];

$sql = "INSERT INTO tbl_bitcoin(`name`, `description`,`avg_from`,`avg_to`) VALUES('$category', '$description', '$from', '$to')";

if ($conn->query($sql) === TRUE) {
	header("location: index.php");
}else {
	echo "Error" . $sql . "<br>" . $conn->error;
}

$conn->close();

?>