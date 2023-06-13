<?php
namespace Fangjia\Miniapps;

Class Uploadprivacyextfile extends Base
{
    // API名
    protected $methodName = "cgi-bin/component/uploadprivacyextfile";

    protected $isTrue = true;


    public $file   = null;

    protected function buildParams()
    {
        $params = array();

        if(isNotNull($this->file )) {
            $params['file'] = $this->file ;
        }

        $this->param_json = $params;
    }
}