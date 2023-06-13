<?php
namespace Fangjia\Miniapps;

/**
 * 获取授权帐号调用令牌
 * 该接口用于获取授权帐号的authorizer_access_token。authorizer_access_token 有效期为 2 小时，authorizer_access_token 失效时，
 * 可以使用 authorizer_refresh_token 获取新的 authorizer_access_token
 * 文档：https://developers.weixin.qq.com/doc/oplatform/openApi/OpenApiDoc/ticket-token/getAuthorizerAccessToken.html
 */
Class GetApiRefreshToken extends Base
{
    // API名
    protected $methodName = "cgi-bin/component/api_authorizer_token";


    public $component_appid = null;
    public $authorizer_appid = null;
    public $authorizer_refresh_token = null;

    protected function buildParams()
    {
        $params = array();

        if(isNotNull($this->component_appid)) {
            $params['component_appid'] = $this->component_appid;
        }

        if(isNotNull($this->authorizer_appid)) {
            $params['authorizer_appid'] = $this->authorizer_appid;
        }

        if(isNotNull($this->authorizer_refresh_token)) {
            $params['authorizer_refresh_token'] = $this->authorizer_refresh_token;
        }

        $this->param_json = $params;
    }
}