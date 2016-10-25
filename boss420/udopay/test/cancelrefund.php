<?php
/**
 * the sample code of cacelling refund via deveoper kit
 *@author Jan
 *@email  popmyjoshion@gmail.com
 */
header('Content-type: application/json');
require_once "../src/Directpaykit.php";
$oop = new \boss420\udopay\Directpaykit(3, // your merchant_id
	1, //your site_id
	"xxxxxx" //your api_key
);
$arr = array(
	"oid" => "111", //transaction id of the platform
);
$result = $oop->cancelRefund($arr["oid"]);
echo $result;
