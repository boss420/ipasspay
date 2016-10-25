<?php
/**
 * the sample code of processing transaction via deveoper kit
 *@author Jan
 *@email  popmyjoshion@gmail.com
 */
header('Content-type: application/json');
require_once "../src/Directpaykit.php";
$oop = new \boss420\udopay\Directpaykit(3, // your merchant_id
	1, //your site_id
	"xxxxx" //your api_key
);
$arr = array(
	"oid" => "1", //merchant order id
	"order_amount" => "1.00", //order amount,should be like this:5.00,5,01
	"order_currency" => "USD", //ex:USD,CNY,EUR,GBP

	/*credit card information*/
	"card_no" => "4391880502212396", //card number
	"card_cvv" => "358", //cvv/cvc/cvv2
	"card_ex_year" => "21",
	"card_ex_month" => "11",

	/*billing information*/
	"bill_email" => "test@gmail.com",
	"bill_phone" => "18651227777",
	"bill_country" => "US", //2 ISO code
	"bill_state" => "CA", //for the USA,Canada,Australia,Japan,please refer to the deveoper API page
	"bill_city" => "test",
	"bill_street" => "test11",
	"bill_zip" => "21300",
	"bill_firstname" => "test",
	"bill_lastname" => "test",

	"syn_url" => "https://www.google.com", //synchronous notification URL(no use in direct API,just ignore it.)
	"asyn_url" => "https://www.google.com", //asynchronous notificaiton URL(should be a real URL that we can access from the internet)
);
//If it's a rebilling transaction
$rebill_arr = array(
	"rebill_amount" => "10.00",
	"rebill_cycle" => 20,
	"rebill_count" => 10,
	"rebill_firstdate" => "2016-08-08",
);
$oop->setRebill($rebill_arr);

$result = $oop->sendGateway($arr);
echo $result;
