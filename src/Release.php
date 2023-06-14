<?php
namespace Fangjia\Miniapps;

/**
 * 发布已通过审核的小程序
 * 文档：https://developers.weixin.qq.com/doc/oplatform/openApi/OpenApiDoc/miniprogram-management/code-management/release.html
 */
Class Release extends Base
{
    // API名
    protected $methodName = "wxa/release";

    protected $isTrue = true;

    public function buildParams()
    {
        $params = array();

        $this->param_json = $params;
    }
}