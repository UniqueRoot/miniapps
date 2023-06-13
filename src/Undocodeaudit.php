<?php
namespace Fangjia\Miniapps;

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