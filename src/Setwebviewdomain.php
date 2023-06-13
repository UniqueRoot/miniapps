<?php
namespace Fangjia\Miniapps;

use Fangjia\Miniapps\Base;

Class Setwebviewdomain extends Base
{
    // API名
    protected $methodName = "wxa/setwebviewdomain";

    protected $isTrue = true;

    public $webviewdomain    = null;


    protected function buildParams()
    {
        $params = array("action"=>"set");

        if(isNotNull($this->webviewdomain )) {
            $params['webviewdomain'] = $this->webviewdomain ;
        }
        $this->param_json = $params;
    }
}