<?php
namespace Fangjia\Miniapps\Code;

use Fangjia\Miniapps\Base;
Class Undocodeaudit extends Base
{
    // API名
    protected $methodName = "wxa/undocodeaudit";

    protected $isTrue = true;
    protected $isGet  = true;


    protected function buildParams()
    {
        $params = array();

        $this->param_json = $params;
    }
}