<?php
namespace Fangjia\Miniapps\Member;

use Fangjia\Miniapps\Base;

Class Getprivacysetting extends Base
{
    // API名
    protected $methodName = "cgi-bin/component/getprivacysetting";

    protected $isTrue = true;

    // 用户隐私保护指引的版本，1表示现网版本；2表示开发版。默认是2开发版。
    public $privacy_ver   = null;

    protected function buildParams()
    {
        $params = array();

        if($this->isNotNull($this->privacy_ver )) {
            $params['privacy_ver'] = $this->privacy_ver ;
        }

        $this->param_json = $params;
    }
}