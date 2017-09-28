<?php 
require_once ("../connection.php");

$description = $_POST['description'];
$name = $_POST['name'];
$url = $_POST['url'];
$bitid = $_POST['bitid'];

$sql = "INSERT INTO tbl_links(`id`,`link_name`, `link_url`,`link_description`) VALUES('$bitid', '$name', '$url', '$description')";

if ($conn->query($sql) === TRUE) {
	header("location: view.php?check=$bitid	");
}


?>