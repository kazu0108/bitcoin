<?php
require_once ("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bitcoin App</title>
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

$sql = "SELECT * FROM tbl_bitcoin WHERE id = '$id'";
$result = $conn->query($sql);
$row = $result->fetch_array(); 
?>
	<div class="row">
	<div class="well col-md-offset-3 col-md-6" style="margin-top: 50px;">
	<form method="post" action="update.php" class="form-horizontal">
		<input type="hidden" name="id" value="<?php echo $row['id'];?>">
		<div class="form-group">
		<label for="category" class="control-label col-md-2">Category:</label>
		<div class="col-md-10">
		<input type="text" name="category" id="category" class="form-control" value="<?php echo $row['name'];?>"></div>
		</div>
		<div class="form-group">
		<label for="description" class="control-label col-md-2">Short Description:</label>
		<div class="col-md-10">
		<input type="text" name="description" id="description" class="form-control" value="<?php echo $row['description'];?>"></div>
		</div>
		<div class="form-group">
		<label for="from" class="control-label col-md-2">Average From:</label>
		<div class="col-md-10">
		<input type="text" name="from" id="from" class="form-control" value="<?php echo $row['avg_from'];?>"></div>
		</div>
		<div class="form-group">
		<label for="to" class="control-label col-md-2">Average To:</label>
		<div class="col-md-10">
		<input type="text" name="to" id="to" class="form-control" value="<?php echo $row['avg_to'];?>"></div>
		</div>
		<div class="col-md-offset-3 col-md-6 form-group">
			<button type="submit" name="add" class="btn btn-success">Submit</button>
		</div>
	</form>
</div>
</div>
</div>


</body>
</html>