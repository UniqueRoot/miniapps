<?php
namespace Fangjia\Miniapps\Member;

use Fangjia\Miniapps\Base;

Class Bindtester extends Base
{
    // API名
    protected $methodName = "wxa/bind_tester";

    protected $isTrue = true;

    public $wechatid       = null;

    protected function buildParams()
    {
        $params = array();

        if($this->isNotNull($this->wechatid )) {
            $params['wechatid'] = $this->wechatid ;
        }


        $this->param_json = $params;
    }
}