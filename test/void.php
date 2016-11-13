<?php
/**
 * the sample code of void an authorized transaction via deveoper kit
 *@author Jan
 *@email  popmyjoshion@gmail.com
 */
header('Content-type: application/json');
require_once "../src/Directpaykit.php";
$oop = new \boss420\ipasspay\Directpaykit(3, // your merchant_id
	1, //your site_id
	"xxxxxx" //your api_key
);
$arr = array(
	"oid" => I("oid"),
);
$result = $oop->void($arr["oid"]);
echo $result;
