<?php
$authorizer_access_token = "";
$client = new Fangjia\Miniapps\Client();
$client->setAccessToken($authorizer_access_token);

$params = new Fangjia\Miniapps\Getqrcode();
$response = $client->sendRequest();
$response = json_decode($response, true);

print_r($response);exit;