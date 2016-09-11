<?php

	header("Access-Control-Allow-Origin:*");
	
	header('Content-type: text/xml');
	
	if(isset($_GET['StartStation'])&&isset($_GET['ArriveStation'])){
		$StartStation = $_GET['StartStation'];
		$ArriveStation = $_GET['ArriveStation'];
		$url="http://www.webxml.com.cn/WebServices/TrainTimeWebService.asmx/getStationAndTimeByStationName?StartStation=".$StartStation."&ArriveStation=".$ArriveStation."&UserID=";

		$xml = file_get_contents($url);
		//$json = json_encode($xml);
		echo $xml;

	} else {
		echo '{"error_code":1}';

	}
	
?>