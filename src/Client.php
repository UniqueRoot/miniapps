<?php
namespace Fangjia\Miniapps;

use Fangjia\Miniapps\Http\Request;

/**
 * 客户端类
 * 开发文档：https://developers.weixin.qq.com/doc/oplatform/openApi/OpenApiDoc/
 */
class Client extends Base {

    /**
     * 微信请求地址
     * @var string
     */
    private $_url           = "https://api.weixin.qq.com/";

    /**
     * - 授权回调 URI(填写格式为https://xxx)。（插件版无该参数）
     * - 管理员授权确认之后会自动跳转进入回调 URI，并在 URL 参数中返回授权码和过期时间(redirect_url?auth_code=xxx&expires_in=600)
     * @var
     */
    private $redirect_uri;

    /**
     * @var Request
     */
    private $_request;

    /**
     * 第三方平台接口调用凭证component_access_token，该参数为 URL 参数，非 Body 参数。
     * @var
     */
    private $_accessToken;

    /**
     * 预授权码
     * @var
     */
    private $_pre_auth_code;

    /**
     * 小程序APPID
     * @var
     */
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


    /**
     * 获取授权地址
     * @param $appId
     * - 指定授权唯一的小程序或公众号 。
     * - 如果指定了appid，则只能是该appid的管理员进行授权，其他用户扫码会出现报错。
     * - auth_type、biz_appid 两个字段如果设置的信息冲突，则biz_appid生效的优先级更高。
     * - 例如，auth_type=1，但是biz_appid是小程序的appid，则会按照auth_type=2来处理，即以biz_appid的类型为准去拉出来对应的权限集列表
     * @return string
     */
    public function getAuthorizeUrl($appId)
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
     * 设置响应地址
     * @param mixed $redirect_uri
     */
    public function setRedirectUri($redirect_uri)
    {
        $this->redirect_uri = $redirect_uri;
    }






}