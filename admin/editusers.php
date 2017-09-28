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

$sql = "SELECT * FROM tbl_users WHERE user_id = '$id'";
$result = $conn->query($sql);
$row = $result->fetch_array(); 
?>
	<div class="row">
	<div class="well col-md-offset-3 col-md-6" style="margin-top: 50px;">
	<form method="post" action="updateusers.php" class="form-horizontal">
		<input type="hidden" name="user_id" value="<?php echo $row['user_id'];?>">
		<div class="form-group">
		<label for="username" class="control-label col-md-2">Username:</label>
		<div class="col-md-10">
		<input type="text" name="username" id="username" class="form-control" value="<?php echo $row['username'];?>"></div>
		</div>
		<div class="form-group">
		<label for="password" class="control-label col-md-2">Password:</label>
		<div class="col-md-10">
		<input type="text" name="password" id="password" class="form-control" value="<?php echo $row['password'];?>"></div>
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