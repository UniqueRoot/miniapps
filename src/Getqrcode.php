<?php
namespace Fangjia\Miniapps;

/**
 * 获取体验版二维码
 * 文档：https://developers.weixin.qq.com/doc/oplatform/openApi/OpenApiDoc/miniprogram-management/code-management/getTrialQRCode.html
 */
Class Getqrcode extends Base
{
    // API名
    protected $methodName = "wxa/get_qrcode";

    protected $isTrue = true;
    protected $isGet  = true;

    protected function buildParams()
    {
        $params = array();

        if(isNotNull($this->getPath())) {
            $params['path'] = $this->getPath();
        }

        $this->param_json = $params;
    }
}