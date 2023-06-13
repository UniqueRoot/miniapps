<?php
namespace Fangjia\Miniapps;

/**
 * 基础抽象类
 */
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

    /**
     * @return mixed
     */
    public function getRequestDomain()
    {
        return $this->requestDomain;
    }

    /**
     * @param mixed $requestDomain
     */
    public function setRequestDomain($requestDomain)
    {
        $this->requestDomain = $requestDomain;
    }

    /**
     * @return mixed
     */
    public function getWsRequestDomain()
    {
        return $this->wsRequestDomain;
    }

    /**
     * @param mixed $wsRequestDomain
     */
    public function setWsRequestDomain($wsRequestDomain)
    {
        $this->wsRequestDomain = $wsRequestDomain;
    }

    /**
     * @return mixed
     */
    public function getUploadDomain()
    {
        return $this->uploadDomain;
    }

    /**
     * @param mixed $uploadDomain
     */
    public function setUploadDomain($uploadDomain)
    {
        $this->uploadDomain = $uploadDomain;
    }

    /**
     * @return mixed
     */
    public function getDownloadDomain()
    {
        return $this->downloadDomain;
    }

    /**
     * @param mixed $downloadDomain
     */
    public function setDownloadDomain($downloadDomain)
    {
        $this->downloadDomain = $downloadDomain;
    }

    /**
     * @return mixed
     */
    public function getUdpDomain()
    {
        return $this->udpDomain;
    }

    /**
     * @param mixed $udpDomain
     */
    public function setUdpDomain($udpDomain)
    {
        $this->udpDomain = $udpDomain;
    }

    /**
     * @return mixed
     */
    public function getTcpDomain()
    {
        return $this->tcpDomain;
    }

    /**
     * @param mixed $tcpDomain
     */
    public function setTcpDomain($tcpDomain)
    {
        $this->tcpDomain = $tcpDomain;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }



}