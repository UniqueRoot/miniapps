<?php
namespace Fangjia\Miniapps\Token;

use Fangjia\Miniapps\Base;

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

        if($this->isNotNull($this->component_appid)) {
            $params['component_appid'] = $this->component_appid;
        }

        if($this->isNotNull($this->authorizer_appid)) {
            $params['authorizer_appid'] = $this->authorizer_appid;
        }

        if($this->isNotNull($this->authorizer_refresh_token)) {
            $params['authorizer_refresh_token'] = $this->authorizer_refresh_token;
        }

        $this->param_json = $params;
    }
}