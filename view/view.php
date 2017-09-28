<?php
	require_once ("../connection.php");
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
	<script src="buttons.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../index.php">Bitcoin</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../index.php">Home</a></li>
      <li><a href="../users.php">User</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <p class="navbar-text">Welcome back, guest</p>
      </ul>
  </div>
</nav>
<div class="container">
<?php

	$id = $_GET['check'];
	$url = "https://bitpay.com/api/rates";

	$json = file_get_contents($url);
	$data = json_decode($json, TRUE);

	$rate = $data[1]["rate"];

?>
<center>
	<h1>Ways to earn Bitcoin</h1>
	<br>
	<div class="col-md-offset-4 col-md-4">
		<select name="currency" id="current" class="form-control" onchange="fetch_currency(this.value);">
			<option value="1">US Dollars</option>
			<option value="2">Philippine Peso</option>
			<option value="3">Japanese Yen</option>
		</select>
	</div>
	<div class="col-md-12" id="currency">
		<h4>Exchange Rate: 1 BTC = <?php echo $rate; ?>USD</h4>
	</div>
</center>
	<div class="row text-center">
			<form class="form-horizontal" method="get" name="link">
				<table class="table table-bordered">
					<thead>
						<th class="text-center">Link</th>
						<th class="text-center">Description</th>
					</thead>
<?php 

$sql = "SELECT * FROM tbl_links WHERE id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()){

?>
					<tbody>
						<td class="text-center"><a href="<?php echo $row['link_url']; ?>"><?php echo $row['link_name']; ?></a></td>
						<td class="text-center"><?php echo $row['link_description']; ?></td>
					</tbody>
					<?php 

        }
      }
      ?>
				</table>
			</form>
	</div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript">
		
		function fetch_currency(val)
		{
			$.ajax({
				type: 'post',
				url: '../fetch_currency.php',
				data: {
					rateprice:val
				},
				success: function(response){
					document.getElementById("currency").innerHTML=response;
				}
			});
		}
	</script>
</html>