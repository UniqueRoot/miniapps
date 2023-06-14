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

    protected function buildParams()
    {
        $params = array();

        if(isNotNull($this->getComponentAppid())) {
            $params['component_appid'] =$this->getComponentAppid();
        }

        if(isNotNull($this->getComponentAppSecret())) {
            $params['component_appsecret'] = $this->getComponentAppSecret();
        }

        if(isNotNull($this->getComponentVerifyTicket())) {
            $params['component_verify_ticket'] = $this->getComponentVerifyTicket();
        }

        $this->param_json = $params;
    }
}