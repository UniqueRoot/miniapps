<?php
namespace Fangjia\Miniapps;

/**
 * 获取小程序码
 * 文档：https://developers.weixin.qq.com/miniprogram/dev/OpenApiDoc/qrcode-link/qr-code/getQRCode.html
 */
Class Getwxacode extends Base
{
    // API名
    protected $methodName = "wxa/getwxacode";

    protected $isTrue = true;

    protected function buildParams()
    {
        $params = array();

        if(isNotNull($this->getPath())) {
            $params['path'] = $this->getPath();
        }

        if(isNotNull($this->getWidth())) {
            $params['width'] = $this->getWidth();
        }

        if(isNotNull($this->getAutoColor())) {
            $params['auto_color'] = $this->getAutoColor();
        }

        if(isNotNull($this->getLineColor())) {
            $params['line_color'] = $this->getLineColor();
        }

        if(isNotNull($this->getIsHyaLine())) {
            $params['is_hyaline'] = $this->getIsHyaLine();
        }

        if(isNotNull($this->getEnvVersion())) {
            $params['env_version'] = $this->getEnvVersion();
        }

        $this->param_json = $params;
    }
}