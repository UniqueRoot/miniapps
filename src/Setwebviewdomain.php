<?php
namespace Fangjia\Miniapps;

use Fangjia\Miniapps\Base;

/**
 * 配置小程序业务域名
 * 文档：https://developers.weixin.qq.com/doc/oplatform/openApi/OpenApiDoc/miniprogram-management/domain-management/modifyJumpDomain.html
 */
Class Setwebviewdomain extends Base
{
    // API名
    protected $methodName = "wxa/setwebviewdomain";

    protected $isTrue = true;


    protected function buildParams()
    {
        $params = array("action"=>"set");

        if(isNotNull($this->getWebViewDomain())) {
            $params['webviewdomain'] = $this->getWebViewDomain() ;
        }

        if(isNotNull($this->getAction())) {
            $params['action'] = $this->getAction();
        }
        $this->param_json = $params;
    }
}