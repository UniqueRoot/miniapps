<?php
namespace Fangjia\Miniapps;

/**
 * 获取刷新令牌
 * 当用户在第三方平台授权页中完成授权流程后，第三方平台开发者可以在回调 URI 中通过 URL 参数获取授权码(authorization_code)。然后使用该接口可以换取公众号/小程序的刷新令牌（authorizer_refresh_token）。
 * 建议保存授权信息中的刷新令牌（authorizer_refresh_token）
 * 文档：https://developers.weixin.qq.com/doc/oplatform/openApi/OpenApiDoc/ticket-token/getAuthorizerRefreshToken.html
 */
Class GetApiQueryAuth extends Base
{
    // API名
    protected $methodName = "cgi-bin/component/api_query_auth";

    protected function buildParams()
    {
        $params = array();

        if(isNotNull($this->getComponentAppid())) {
            $params['component_appid'] = $this->getComponentAppid();
        }

        if(isNotNull($this->getAuthorizationCode())) {
            $params['authorization_code'] = $this->getAuthorizationCode();
        }

        $this->param_json = $params;
    }
}