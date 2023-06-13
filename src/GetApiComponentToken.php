<?php
namespace Fangjia\Miniapps;

/**
 * 获取令牌 令牌的获取是有限制的，每个令牌的有效期为 2 小时，请自行做好令牌的管理，在令牌快过期时（比如1小时50分），重新调用接口获取。
 * 生成component_access_token需要依赖component_verify_ticket
 * 文档：https://developers.weixin.qq.com/doc/oplatform/openApi/OpenApiDoc/ticket-token/getComponentAccessToken.html
 */
Class GetApiComponentToken extends Base
{
    // API名
    protected $methodName = "cgi-bin/component/api_component_token";

    public $component_appid = null;
    public $component_appsecret = null;
    public $component_verify_ticket = null;

    protected function buildParams()
    {
        $params = array();

        if(isNotNull($this->component_appid)) {
            $params['component_appid'] = $this->component_appid;
        }

        if(isNotNull($this->component_appsecret)) {
            $params['component_appsecret'] = $this->component_appsecret;
        }

        if(isNotNull($this->component_verify_ticket)) {
            $params['component_verify_ticket'] = $this->component_verify_ticket;
        }

        $this->param_json = $params;
    }
}