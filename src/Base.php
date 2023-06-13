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

    // request 合法域名；当 action 是 get 时不需要此字段
    private $requestDomain;
    // socket 合法域名；当 action 是 get 时不需要此字段
    private $wsRequestDomain;
    // uploadFile 合法域名；当 action 是 get 时不需要此字段
    private $uploadDomain;
    // downloadFile 合法域名；当 action 是 get 时不需要此字段
    private $downloadDomain;
    // udp 合法域名；当 action 是 get 时不需要此字段
    private $udpDomain;
    // tcp 合法域名；当 action 是 get 时不需要此字段
    private $tcpDomain;
    private $action;

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



}