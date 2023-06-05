<?php
namespace Fangjia\Miniapps\Base;
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

        if($this->isNotNull($this->webviewdomain )) {
            $params['webviewdomain'] = $this->webviewdomain ;
        }
        $this->param_json = $params;
    }
}