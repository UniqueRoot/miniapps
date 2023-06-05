<?php
namespace Fangjia\Miniapps\Code;

use Fangjia\Miniapps\Base;

Class Getqrcode extends Base
{
    // API名
    protected $methodName = "wxa/get_qrcode";

    protected $isTrue = true;
    protected $isGet  = true;

    public $path = null;

    protected function buildParams()
    {
        $params = array();

        if($this->isNotNull($this->path )) {
            $params['path'] = $this->path ;
        }

        $this->param_json = $params;
    }
}