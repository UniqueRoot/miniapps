<?php
namespace Fangjia\Miniapps\Token;

use Fangjia\Miniapps\Base;

Class GetApiCreatePreauthcode extends Base
{
    // API名
    protected $methodName = "cgi-bin/component/api_create_preauthcode";

    public $component_appid = null;

    protected function buildParams()
    {
        $params = array();

        if($this->isNotNull($this->component_appid)) {
            $params['component_appid'] = $this->component_appid;
        }

        $this->param_json = $params;
    }
}