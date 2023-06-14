<?php
namespace Fangjia\Miniapps;

/**
 * 获取小程序用户隐私保护指引
 * 文档：https://developers.weixin.qq.com/doc/oplatform/openApi/OpenApiDoc/miniprogram-management/privacy-management/setPrivacySetting.html
 */
Class Getprivacysetting extends Base
{
    // API名
    protected $methodName = "cgi-bin/component/getprivacysetting";

    protected $isTrue = true;

    protected function buildParams()
    {
        $params = array();

        if(isNotNull($this->getPrivacyVer())) {
            $params['privacy_ver'] = $this->getPrivacyVer();
        }

        $this->param_json = $params;
    }
}