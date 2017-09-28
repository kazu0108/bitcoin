<?php
	require_once ("connection.php");
if (isset($_POST['login'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM tbl_users WHERE username = '$username' AND password = '$password'";

	$result = $conn->query($sql);
	$count = $result->num_rows;
	$row = $result->fetch_array();
	if($count == 1){
		session_start();
		$_SESSION['username'] = $row['username'];
		$_SESSION['password'] = $row['password'];
	
	
	header("location: index.php");
}
else{
	$error = "Invalid username or Password";
}
}
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
<div class="row">
<div class="well col-md-offset-3 col-md-6" style="margin-top: 50px;">
	<form method="post" class="form-horizontal">
		<div class="form-group">
		<label for="username" class="control-label col-md-2">Username:</label>
		<div class="col-md-10">
		<input type="text" name="username" id="category" class="form-control"></div>
		</div>
		<div class="form-group">
		<label for="password" class="control-label col-md-2">Password:</label>
		<div class="col-md-10">
		<input type="password" name="password" id="password" class="form-control""></div>
		</div>
		
		<div class="col-md-offset-3 col-md-6 form-group">
			<button type="submit" name="login" class="btn btn-success">Login</button>
		</div>
	</form>
</div>
</div>
</div>
</body>
</html>