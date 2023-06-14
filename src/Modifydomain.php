<?php
namespace Fangjia\Miniapps;

use Fangjia\Miniapps\Base;

/**
 * 配置小程序服务器域名
 * 文档：https://developers.weixin.qq.com/doc/oplatform/openApi/OpenApiDoc/miniprogram-management/domain-management/modifyServerDomain.html
 */
Class Modifydomain extends Base
{
    // API名
    protected $methodName = "wxa/modify_domain";

    protected $isTrue = true;

    protected function buildParams()
    {
        $params = array();

        if(isNotNull($this->getAction())) {
            $params['action'] = $this->getAction();
        }

        if(isNotNull($this->getRequestdomain())) {
            $params['requestdomain'] = $this->getRequestdomain() ;
        }

        if(isNotNull($this->getWsrequestdomain())) {
            $params['wsrequestdomain'] = $this->getWsrequestdomain();
        }

        if(isNotNull($this->getUploaddomain())) {
            $params['uploaddomain'] = $this->getUploaddomain();
        }

        if(isNotNull($this->getDownloaddomain())) {
            $params['downloaddomain'] = $this->getDownloaddomain();
        }
        $this->param_json = $params;
    }


}