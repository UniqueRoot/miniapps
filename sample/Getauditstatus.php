<?php
$authorizer_access_token = "";
$client = new Fangjia\Miniapps\Client();
$client->setAccessToken($authorizer_access_token);

$audit_id = "";
$params = new Fangjia\Miniapps\Getauditstatus();
$params->setAuditId($audit_id);
$response = $client->sendRequest();
$response = json_decode($response, true);

print_r($response);exit;