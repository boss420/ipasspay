<?php
/**
 * the sample code of refunding via deveoper kit
 *@author Jan
 *@email  popmyjoshion@gmail.com
 */
require_once "Directpaykit.class.php";
$oop = new \Directpaykit(3, // your merchant_id
	1, //your site_id
	"xxxxxx" //your api_key
);
$arr = array(
	"oid" => 111, //transaction ID of the platform
	"refund_amount" => "1.00", //refund amount
);
$result = $oop->sendRefund($arr["oid"], $arr["refund_amount"]);
$arr_result = json_decode($result, true);
var_dump($arr_result);
