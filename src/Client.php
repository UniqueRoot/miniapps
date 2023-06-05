<?php
namespace Fangjia\Miniapps;

use Fangjia\Miniapps\Http\Request;

class Client extends Base {

    private $_url           = "https://api.weixin.qq.com/";
    private $redirect_uri;
    private $_request;
    private $_accessToken;
    private $_pre_auth_code;
    private $appId;


    public function __construct($appId)
    {
        $this->appId = $appId;
        $this->_request = new Request();
    }

    /**
     * 获取accessToken
     */
    public function getAccessToken()
    {
        return $this->_accessToken;
    }

    /**
     * 设定access token
     *
     * @param string $accessToken
     */
    public function setAccessToken($accessToken)
    {
        $this->_accessToken = $accessToken;
    }

    /**
     * 设定预授权码
     *
     * @param string $pre_auth_code
     */
    public function setPreAuthCode($pre_auth_code)
    {
        $this->_pre_auth_code = $pre_auth_code;
    }

    public function setState($state)
    {
        $this->_state = $state;
    }

    /**
     * 获取授权地址
     * @param string $appId
     * @return string
     */
    public function getAuthorizeUrl()
    {
        $redirect_uri = str_replace('$APPID$', $this->appId, $this->redirect_uri);
        return "https://mp.weixin.qq.com/safe/bindcomponent?action=bindcomponent&no_scan=1&component_appid={$this->appId}&pre_auth_code={$this->_pre_auth_code}&redirect_uri={$redirect_uri}&auth_type=2&biz_appid={$appId}";
    }

    public function sendRequest() {
        $param_json = $this->getParams();
        $apiMethodName = $this->getApiMethodName();
        $url = $this->_url.$apiMethodName;

        if(isset($param_json['component_verify_ticket'])) {
            $response =$this->_request->http_post_data($url, $param_json);
        }else if($this->isGetAccessToken()){
            $url = $url."?access_token=".$this->getAccessToken();
            if($this->isGetRequesst()) {
                $response = $this->_request->httpGet($url);
            } else {
                $response = $this->_request->http_post_data($url, $param_json);
            }

        } else {
            $url = $url."?component_access_token=".$this->getAccessToken();
            $response = $this->_request->http_post_data($url, $param_json);
        }

        return $response;
    }

    /**
     * @return mixed
     */
    public function getRedirectUri()
    {
        return $this->redirect_uri;
    }

    /**
     * @param mixed $redirect_uri
     */
    public function setRedirectUri($redirect_uri): void
    {
        $this->redirect_uri = $redirect_uri;
    }






}