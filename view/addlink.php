<?php
	require_once ("../connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ways to earn Bitcoin</title>
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
	<form method="post" action="add.php" class="form-horizontal">
	<input type="hidden" name="bitid" value="<?php echo $_GET['check']; ?>">
		<div class="form-group">
		<label for="category" class="control-label col-md-2">Link name:</label>
		<div class="col-md-10">
		<input type="text" name="name" id="name" class="form-control" placeholder="Enter Link Name"></div>
		</div>
		<div class="form-group">
		<label for="description" class="control-label col-md-2">Link Description:</label>
		<div class="col-md-10">
		<input type="text" name="description" id="description" class="form-control" placeholder="Enter description"></div>
		</div>
		<div class="form-group">
		<label for="from" class="control-label col-md-2">URL:</label>
		<div class="col-md-10">
		<input type="text" name="url" id="url" class="form-control" placeholder="Enter URL"></div>
		</div>
		<!-- <div class="form-group">
		<label for="from" class="control-label col-md-2">Category:</label>
		<div class="col-md-10">
		<select class="form-control" name="category">
			<?php 

			// $sql = "SELECT * FROM tbl_bitcoin";

			// $result = $conn->query($sql);

			// if ($result->num_rows > 0) {
			// 	while($row = $result->fetch_assoc()){
			// 		?>
			// 		<option value="<?php echo $row['id'];?>"><?php echo $row['name']; ?></option>
			// 		<?php

				
			// 	}
			// }
			?>
		</select> </div>
		</div> -->
				<div class="col-md-offset-3 col-md-6 form-group">
			<button type="submit" name="add" class="btn btn-success">Submit</button>
		</div>
	</form>
</div>
</div>
</div>
</body>
</html>