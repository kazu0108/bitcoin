<?php
require_once("header.php");

?>


<div class="container">
<?php
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
			<form class="form-horizontal" method="get" name="bitcoin">
				<table class="table table-bordered">
					<thead>
						<th></th>
						<th class="text-center">Category</th>
						<th class="text-center">Short Description</th>
						<th class="text-center">Avg From</th>
						<th class="text-center">Avg To</th>
					</thead>
<?php 

$sql = "SELECT * FROM tbl_bitcoin";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()){

?>
					<tbody>
						<td><input type="checkbox" value="<?php echo $row['id'];?> " name="check"></td>
						<td class="text-center"><?php echo $row['name']; ?></td>
						<td class="text-center"><?php echo $row['description'];?></td>
						<td class="text-center"><?php echo $row['avg_from']; ?></td>
						<td class="text-center"><?php echo $row['avg_to']; ?></td>
					</tbody>
					<?php 

        }
      }
      ?>
				</table>
				<div class="col-md-4">
					<a href="addbitcoin.php" class="btn btn-info btn-lg">Add</a>
					<a onClick="view_bitcoin();" class="btn btn-warning btn-lg">View</a>
					<a onClick="edit_bitcoin();" class="btn btn-warning btn-lg">Edit</a>
					<a onClick="delete_bitcoin();" class="btn btn-danger btn-lg">Delete</a>
				</div>
			</form>
	</div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="buttons.js"></script>
	<script type="text/javascript">
		
		function fetch_currency(val)
		{
			$.ajax({
				type: 'post',
				url: 'fetch_currency.php',
				data: {
					rateprice:val
				},
				success: function(response){
					document.getElementById("currency").innerHTML=response;
				}
			});
		}
	</script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>