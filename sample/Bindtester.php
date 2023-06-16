<?php
$authorizer_access_token = "";
$client = new Fangjia\Miniapps\Client();
$client->setAccessToken($authorizer_access_token);

$wechat_id = "";
$params = new Fangjia\Miniapps\Bindtester();
$params->setWechatId($wechat_id);
$response = $client->sendRequest();
$response = json_decode($response, true);

print_r($response);exit;