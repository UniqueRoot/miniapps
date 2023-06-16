<?php
$authorizer_access_token = "";
$client = new Fangjia\Miniapps\Client();
$client->setAccessToken($authorizer_access_token);

$params = new Fangjia\Miniapps\Getwxacode();
$params->setPath("/path/home");
$params->setWidth("430");
$params->setAutoColor(false);
$params->setLineColor('{"r":0,"g":0,"b":0} ');
$params->setIsHyaLine(true);
$params->setEnvVersion("release");
$response = $client->sendRequest();
$response = json_decode($response, true);

print_r($response);exit;