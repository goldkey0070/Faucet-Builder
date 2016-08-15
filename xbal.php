<?php
function get_bal(){
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://v2.api.xapo.com/oauth2/token");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials&redirect_uri=http://www.bitcoinfaucetexchange.com"); //your redirect url for app

$basic_token = base64_encode("cbf08d4f********:510b355b*******************"); //app id first and app secret together like the way i have it
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/x-www-form-urlencoded",
  "Authorization: Basic ".$basic_token
));

$respons = curl_exec($ch);
curl_close($ch);
$json = json_decode($respons);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://v2.api.xapo.com/accounts/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_HTTPGET, TRUE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json",
  "Authorization: Bearer ".$json->{'access_token'}
));

$respons = curl_exec($ch);
curl_close($ch);

//var_dump($respons);

$bal = json_decode($respons, true);

echo $bal[0]['available_balance'] * 100000000;

}

?>
