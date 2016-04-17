<?php
	$url = "https://eune.api.pvp.net/api/lol/eune/v1.2/champion?api_key=5ce41c0a-ea78-4e87-9213-ea2aa6a1cc23";
	$response = file_get_contents($url);
	$file = fopen("f.json" , 'w+');
	file_put_contents("f.json", $response);
	var_dump($response);
	$ceva = json_decode($response);
	
	var_dump($ceva);
	
	
