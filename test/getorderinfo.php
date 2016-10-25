<?php
/**
 * the sample code of getting the order information  via deveoper kit
 *@author Jan
 *@email  popmyjoshion@gmail.com
 */
header('Content-type: application/json');
require_once "../src/Directpaykit.php";
$oop = new \boss420\udopay\Directpaykit(3, // your merchant_id
	1, //your site_id
	"xxxx" //your api_key
);
$arr = array(
	"oid" => "",
	"mh_oid" => "18",
);
$result = $oop->getOrderInfo($arr["oid"], $arr["mh_oid"]);
echo $result;
