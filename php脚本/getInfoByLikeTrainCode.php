<?php

	header("Access-Control-Allow-Origin:*");
	
	header('Content-type: text/xml');
	
	if(isset($_GET['TrainCode'])){
		$TrainCode = $_GET['TrainCode'];
		
		$url="http://www.webxml.com.cn/WebServices/TrainTimeWebService.asmx/getStationAndTimeDataSetByLikeTrainCode?TrainCode=".$TrainCode."&UserID=";	

		$xml = file_get_contents($url);

		echo $xml;
	} else {
		echo '{"error_code":1}';

	}
	
?>