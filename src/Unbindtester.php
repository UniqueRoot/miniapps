<?php
namespace Fangjia\Miniapps;

Class Unbindtester extends Base
{
    // API名
    protected $methodName = "wxa/unbind_tester";

    protected $isTrue = true;

    public $wechatid       = null;

    protected function buildParams()
    {
        $params = array();

        if(isNotNull($this->wechatid )) {
            $params['wechatid'] = $this->wechatid ;
        }


        $this->param_json = $params;
    }
}