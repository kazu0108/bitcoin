<?php
if (isset($_POST['rateprice'])) {
	$price = $_POST['rateprice'];
	$url = "https://bitpay.com/api/rates";

	$json = file_get_contents($url);
	$data = json_decode($json, TRUE);

	if ($price == 2) {
		$rate = $data[109]["rate"];
		echo "<h4>Exchange Rate: 1 BTC =".$rate." PHP</h4>";
	}
	if ($price == 1) {
		$rate = $data[1]["rate"];
		echo "<h4>Exchange Rate: 1 BTC =".$rate." USD</h4>";
	}
	if ($price == 3) {
		$rate = $data[4]["rate"];
		echo "<h4>Exchange Rate: 1 BTC =".$rate." JPY</h4>";
}
}

?>