<?php
$appId = "";
$client = new Fangjia\Miniapps\Client();
$client->setPreAuthCode("");
print_r($client->getAuthorizeUrl($appId));exit;