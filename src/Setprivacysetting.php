<?php
namespace Fangjia\Miniapps;

/**
 * 设置小程序用户隐私保护指引
 * 文档：https://developers.weixin.qq.com/doc/oplatform/openApi/OpenApiDoc/miniprogram-management/privacy-management/setPrivacySetting.html
 */
Class Setprivacysetting extends Base
{
    // API名
    protected $methodName = "cgi-bin/component/setprivacysetting";

    protected $isTrue = true;

    protected function buildParams()
    {
        $params = array();

        if(isNotNull($this->getPrivacyVer())) {
            $params['privacy_ver'] = $this->getPrivacyVer();
        }

        if(isNotNull($this->getOwnerSetting())) {
            $params['owner_setting'] = $this->getOwnerSetting();
        }

        if(isNotNull($this->getSettingList())) {
            $params['setting_list'] = $this->getSettingList();
        }

        $this->param_json = $params;
    }
}