<?php
/**
 * the sample code of getting the order information  via deveoper kit
 *@author Jan
 *@email  popmyjoshion@gmail.com
 */
header('Content-type: application/json');
require_once "../src/Directpaykit.php";
$oop = new \boss420\ipasspay\Directpaykit(3, // your merchant_id
	1, //your site_id
	"xxxx" //your api_key
);
$arr = array(
	"oid" => "509",
	"tracking_company" => "USPS",
	"tracking_number" => "123123123999888",
);
$result = $oop->uploadTracking($arr["oid"], $arr["tracking_company"], $arr["tracking_number"]);
echo $result;
