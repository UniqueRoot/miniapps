<?php
namespace Fangjia\Miniapps\Token;

use Fangjia\Miniapps\Base;

Class GetApiQueryAuth extends Base
{
    // API名
    protected $methodName = "cgi-bin/component/api_query_auth";


    public $component_appid = null;
    public $authorization_code = null;

    protected function buildParams()
    {
        $params = array();

        if($this->isNotNull($this->component_appid)) {
            $params['component_appid'] = $this->component_appid;
        }

        if($this->isNotNull($this->authorization_code)) {
            $params['authorization_code'] = $this->authorization_code;
        }

        $this->param_json = $params;
    }
}