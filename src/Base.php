<?php
namespace Fangjia\Miniapps;
abstract class Base
{
    // API名
    protected $methodName = "";
    // 参数
    protected $param_json = array();

    protected $isTrue = false;

    protected $isGet  = false;

    // 是否是获取AccessToken
    public function isGetAccessToken()
    {
        return $this->isTrue;
    }

    public function isGetRequesst()
    {
        return $this->isGet;
    }

    public function getApiMethodName(){
        return $this->methodName;
    }

    protected function buildParams() {}

    public function getParams() {
        $this->buildParams();
        return $this->param_json;
    }

    protected function isNotNull($val) {
        return !is_null($val);
    }
}