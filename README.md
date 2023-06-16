# Composer下载
composer require fangjia/miniapps

#  第一章 接口调用顺序
1. 上传代码 【sample/Commit.php】
2. 获取体验二维码 【sample/Getqrcode.php】
3. 提交审核 【sample/Submitaudit.php】
4. 查询审核状态 【sample/Getauditstatus.php】
5. 撤销审核 【sample/Undocodeaudit.php】
6. 发布审核 【sample/Release.php】
7. 获取发布的小程序码 【sample/Getwxacode.php】

#  第二章 体验者
1. 绑定体验者 【sample/Bindtester.php】
2. 解绑体验者 【sample/Unbindtester.php】

#  第三章 接口传输TOKEN
1. 在微信开放平台配置好推送地址
2. 获取微信推送的ticket
3. 调用接口【sample/GetApiComponentToken.php】
4. 成功将component_verify_ticket、component_access_token、expires_in存储起来给第一章调用

#  第四章 预授权码
1. 获取预授权码 【sample/GetApiCreatePreauthcode.php】 
2. 获取授权地址
```
   $redirect_uri = str_replace('$APPID$', $appId, $this->redirect_uri);
   $component_appid = CurrencyModel::APPID;``
   return "https://mp.weixin.qq.com/safe/bindcomponent?action=bindcomponent&no_scan=1&component_appid={$component_appid}&pre_auth_code={$this->_pre_auth_code}&redirect_uri={$redirect_uri}&auth_type=2&biz_appid={$appId}";
```  
3. 授权成功记录授权码, 会在授权成功时返回给第三方平台