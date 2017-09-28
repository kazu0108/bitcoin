<?php 

require_once("../connection.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<?php


$id = $_GET['check'];

$sql = "SELECT * FROM tbl_links WHERE link_id = '$id'";
$result = $conn->query($sql);
$row = $result->fetch_array(); 

?>
<div class="row">
	<div class="well col-md-offset-3 col-md-6" style="margin-top: 50px;">
			<form class="form-horizontal" method="post" action="update.php">
			<input type="hidden" name="id" value="<?php echo $row['link_id']; ?>">
			<input type="hidden" name="categoryid" value="<?php echo $id; ?>">
				<div class="form-group">
		<label for="category" class="control-label col-md-2">Link name:</label>
		<div class="col-md-10">
		<input type="text" name="name" id="name" class="form-control" value="<?php echo $row['link_name']; ?>"></div>
		</div>
		<div class="form-group">
		<label for="description" class="control-label col-md-2">Link Description:</label>
		<div class="col-md-10">
		<input type="text" name="description" id="description" class="form-control" value="<?php echo $row['link_description']; ?>"></div>
		</div>
		<div class="form-group">
		<label for="from" class="control-label col-md-2">URL:</label>
		<div class="col-md-10">
		<input type="text" name="url" id="url" class="form-control" value="<?php echo $row['link_url']; ?>"></div>
		</div>
					<div class="form-group">
						<div class="col-md-offset-2 col-md-10">
						<span id="msg"></span>
							<button type="submit" class="btn btn-default">Edit</button>	
						</div>					
					</div>			
			</form>
		</div>
	
</div>
	
</div>
</body>
</html>
