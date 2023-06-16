<?php
$authorizer_access_token = "";
$client = new Fangjia\Miniapps\Client();
$client->setAccessToken($authorizer_access_token);

$template_id = "";
$user_version = "";
$user_desc = "";
$authorizer_appid = "";
$ext_json['extEnable'] = true;
$ext_json['extAppid'] = $authorizer_appid;
$ext_json = json_encode($ext_json);

$params = new Fangjia\Miniapps\Commit();
$params->setTemplateId($template_id);
$params->setUserVersion($user_version);
$params->setUserDesc($user_desc);
$params->setExtJson($ext_json);
$response = $client->sendRequest();
$response = json_decode($response, true);
print_r($response);exit;