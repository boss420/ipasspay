<?php
/**
* the sample code of rebilling via deveoper kit
*@author Jan
*@email  popmyjoshion@gmail.com
*/
	require_once("Directpaykit.class.php");
	$oop=new \Directpaykit(3, // your merchant_id
	1,//your site_id
	"xxxxxx",//your api_key
	);
			$arr=array(
			"pid"=>"1", //the origin order id of the platform
			"oid"=>"1", //merchant order id
			"order_amount"=>"1.00", //order amount
			"order_currency"=>"USD" //order currency
			);
		$result=$oop->sendRebill($arr["pid"],$arr["oid"],$arr["order_amount"],$arr["order_currency"]);
		$arr_result=json_decode($result,true);
		var_dump($arr_result);
		
		