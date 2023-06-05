<?php
namespace Fangjia\Miniapps\Member;
use Fangjia\Miniapps\Base;

Class Uploadprivacyextfile extends Base
{
    // API名
    protected $methodName = "cgi-bin/component/uploadprivacyextfile";

    protected $isTrue = true;


    public $file   = null;

    protected function buildParams()
    {
        $params = array();

        if($this->isNotNull($this->file )) {
            $params['file'] = $this->file ;
        }

        $this->param_json = $params;
    }
}