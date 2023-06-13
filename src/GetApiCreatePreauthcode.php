<?php
namespace Fangjia\Miniapps;

/**
 * 获取预授权码 该接口用于获取预授权码（pre_auth_code）是第三方平台方实现授权托管的必备信息，每个预授权码有效期为 1800秒
 * 文档：https://developers.weixin.qq.com/doc/oplatform/openApi/OpenApiDoc/ticket-token/getPreAuthCode.html
 */
Class GetApiCreatePreauthcode extends Base
{
    // API名
    protected $methodName = "cgi-bin/component/api_create_preauthcode";

    public $component_appid = null;

    protected function buildParams()
    {
        $params = array();

        if(isNotNull($this->component_appid)) {
            $params['component_appid'] = $this->component_appid;
        }

        $this->param_json = $params;
    }
}