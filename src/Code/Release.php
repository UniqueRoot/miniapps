<?php
namespace Fangjia\Miniapps\Code;

use Fangjia\Miniapps\Base;

Class Release extends Base
{
    // API名
    protected $methodName = "wxa/release";

    protected $isTrue = true;

    public function buildParams()
    {
        $params = array();

        $this->param_json = $params;
    }
}