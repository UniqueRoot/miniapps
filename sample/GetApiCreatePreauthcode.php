<?php
$client = new Fangjia\Miniapps\Client();

$component_app_id = "";
$component_access_token = "";

$params = new Fangjia\Miniapps\GetApiCreatePreauthcode();
$params->setComponentAppid($component_app_id);
$client->setAccessToken($component_access_token);

$response = $client->sendRequest();

$response = json_decode($response,true);
print_r($response);exit;
