<?php
namespace Fangjia\Miniapps;

/**
 * 上传小程序用户隐私保护指引
 * 文档：https://developers.weixin.qq.com/doc/oplatform/openApi/OpenApiDoc/miniprogram-management/privacy-management/uploadPrivacySetting.html
 */
Class Uploadprivacyextfile extends Base
{
    // API名
    protected $methodName = "cgi-bin/component/uploadprivacyextfile";

    protected $isTrue = true;




    protected function buildParams()
    {
        $params = array();
        $params['file'] = 'txt';
        $this->param_json = $params;
    }
}