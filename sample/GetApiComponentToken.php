<?php
$client = new Fangjia\Miniapps\Client();

$component_app_id = "";
$component_app_secret = "";
$ticket = "";
$params = new Fangjia\Miniapps\GetApiComponentToken();
$params->setComponentAppid($component_app_id);
$params->setComponentAppSecret($component_app_secret);
$params->setComponentVerifyTicket($ticket);
$response = $client->sendRequest();

$response = json_decode($response,true);
print_r($response);exit;
