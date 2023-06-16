<?php
$authorizer_access_token = "";
$client = new Fangjia\Miniapps\Client();
$client->setAccessToken($authorizer_access_token);

$params = new Fangjia\Miniapps\Submitaudit();
$response = $client->sendRequest();
$response = json_decode($response, true);

// 查询接口会用到审核ID
print_r($response['auditid']);exit;