<?php
namespace Fangjia\Miniapps;

/**
 * 解除绑定体验者
 * 文档：https://developers.weixin.qq.com/doc/oplatform/openApi/OpenApiDoc/miniprogram-management/member-management/unbindTester.html
 */
Class Unbindtester extends Base
{
    // API名
    protected $methodName = "wxa/unbind_tester";

    protected $isTrue = true;



    protected function buildParams()
    {
        $params = array();

        if(isNotNull($this->getWechatId())) {
            $params['wechatid'] = $this->getWechatId();
        }


        $this->param_json = $params;
    }
}