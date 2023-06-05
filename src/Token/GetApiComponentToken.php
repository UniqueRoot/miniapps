<?php
namespace Fangjia\Miniapps\Token;

use Fangjia\Miniapps\Base;

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

        if($this->isNotNull($this->component_appid)) {
            $params['component_appid'] = $this->component_appid;
        }

        if($this->isNotNull($this->component_appsecret)) {
            $params['component_appsecret'] = $this->component_appsecret;
        }

        if($this->isNotNull($this->component_verify_ticket)) {
            $params['component_verify_ticket'] = $this->component_verify_ticket;
        }

        $this->param_json = $params;
    }
}