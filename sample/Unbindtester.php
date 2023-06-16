<?php

$authorizer_access_token = "";
$client = new Fangjia\Miniapps\Client();
$client->setAccessToken($authorizer_access_token);

$wechatId = "";
$params = new Fangjia\Miniapps\Unbindtester();
$params->setWechatId($wechatId);
$response = $client->sendRequest();

$response = json_decode($response, true);
print_r($response);exit;