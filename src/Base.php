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
    // 判断是不是GET请求，否则为POST
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
    // 微信号
    private $wechatId;
    // 代码库中的代码模板 ID，可通过getTemplateList接口获取代码模板template_id。注意，如果该模板id为标准模板库的模板id，则ext_json可支持的参数为：{"extAppid":" ", "ext": {}, "window": {}}
    private $templateId;
    // 代码版本号，开发者可自定义（长度不要超过 64 个字符）
    private $userVersion;
    // 代码描述，开发者可自定义
    private $userDesc;
    // 为了方便第三方平台的开发者引入 extAppid 的开发调试工作，引入ext.json配置文件概念，该参数则是用于控制ext.json配置文件的内容。关于该参数的补充说明请查看下方的"ext_json补充说明"。
    private $extJson;
    // 第三方平台 appid
    private $componentAppid;
    // 第三方平台 appsecret
    private $componentAppSecret;
    // 微信后台推送的 ticket
    private $componentVerifyTicket;
    // 授权码, 会在授权成功时返回给第三方平台
    private $authorizationCode;
    // 用户隐私保护指引的版本，1表示现网版本；2表示开发版。默认是2开发版。
    private $privacyVer;
    // 指定二维码扫码后直接进入指定页面并可同时带上参数
    private $path;
    // 授权方 appid
    private $authorizerAppid;
    // 刷新令牌，获取授权信息时得到
    private $authorizerRefreshToken;
    // 提交审核时获得的审核 id
    private $auditId;
    // 二维码的宽度，单位 px。默认值为430，最小 280px，最大 1280px
    private $width;
    // 默认值false；自动配置线条颜色，如果颜色依然是黑色，则说明不建议配置主色调
    private $autoColor;
    // 默认值{"r":0,"g":0,"b":0} ；auto_color 为 false 时生效，使用 rgb 设置颜色 例如 {"r":"xxx","g":"xxx","b":"xxx"} 十进制表示
    private $lineColor;
    // 默认值false；是否需要透明底色，为 true 时，生成透明底色的小程序码
    private $isHyaLine;
    // 要打开的小程序版本。正式版为 "release"，体验版为 "trial"，开发版为 "develop"。默认是正式版。
    private $envVersion;
    // 收集方（开发者）信息配置
    private $ownerSetting;
    // 要收集的用户信息配置，可选择的用户信息类型参考下方详情。当privacy_ver传2或者不传是必填；当privacy_ver传1时，该参数不可传，否则会报错
    private $settingList;
    // 小程序业务域名，当 action 参数是 get 时不需要此字段
    private $webViewDomain;
    private $feedback_info;
    private $feedback_stuff;

    // 是否需求AccessToken
    public function isNeedAccessToken()
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
    public function getFeedbackInfo()
    {
        return $this->feedback_info;
    }

    /**
     * @param mixed $feedback_info
     */
    public function setFeedbackInfo($feedback_info)
    {
        $this->feedback_info = $feedback_info;
    }

    /**
     * @return mixed
     */
    public function getFeedbackStuff()
    {
        return $this->feedback_stuff;
    }

    /**
     * @param mixed $feedback_stuff
     */
    public function setFeedbackStuff($feedback_stuff)
    {
        $this->feedback_stuff = $feedback_stuff;
    }



    /**
     * @return mixed
     */
    public function getWebViewDomain()
    {
        return $this->webViewDomain;
    }

    /**
     * @param mixed $webViewDomain
     */
    public function setWebViewDomain($webViewDomain)
    {
        $this->webViewDomain = $webViewDomain;
    }



    /**
     * @return mixed
     */
    public function getOwnerSetting()
    {
        return $this->ownerSetting;
    }

    /**
     * @param mixed $ownerSetting
     */
    public function setOwnerSetting($ownerSetting)
    {
        $this->ownerSetting = $ownerSetting;
    }

    /**
     * @return mixed
     */
    public function getSettingList()
    {
        return $this->settingList;
    }

    /**
     * @param mixed $settingList
     */
    public function setSettingList($settingList)
    {
        $this->settingList = $settingList;
    }



    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getAutoColor()
    {
        return $this->autoColor;
    }

    /**
     * @param mixed $autoColor
     */
    public function setAutoColor($autoColor)
    {
        $this->autoColor = $autoColor;
    }

    /**
     * @return mixed
     */
    public function getLineColor()
    {
        return $this->lineColor;
    }

    /**
     * @param mixed $lineColor
     */
    public function setLineColor($lineColor)
    {
        $this->lineColor = $lineColor;
    }

    /**
     * @return mixed
     */
    public function getIsHyaLine()
    {
        return $this->isHyaLine;
    }

    /**
     * @param mixed $isHyaLine
     */
    public function setIsHyaLine($isHyaLine)
    {
        $this->isHyaLine = $isHyaLine;
    }

    /**
     * @return mixed
     */
    public function getEnvVersion()
    {
        return $this->envVersion;
    }

    /**
     * @param mixed $envVersion
     */
    public function setEnvVersion($envVersion)
    {
        $this->envVersion = $envVersion;
    }



    /**
     * @return mixed
     */
    public function getAuditId()
    {
        return $this->auditId;
    }

    /**
     * @param mixed $auditId
     */
    public function setAuditId($auditId)
    {
        $this->auditId = $auditId;
    }



    /**
     * @return mixed
     */
    public function getAuthorizerAppid()
    {
        return $this->authorizerAppid;
    }

    /**
     * @param mixed $authorizerAppid
     */
    public function setAuthorizerAppid($authorizerAppid)
    {
        $this->authorizerAppid = $authorizerAppid;
    }

    /**
     * @return mixed
     */
    public function getAuthorizerRefreshToken()
    {
        return $this->authorizerRefreshToken;
    }

    /**
     * @param mixed $authorizerRefreshToken
     */
    public function setAuthorizerRefreshToken($authorizerRefreshToken)
    {
        $this->authorizerRefreshToken = $authorizerRefreshToken;
    }



    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }



    /**
     * @return mixed
     */
    public function getAuthorizationCode()
    {
        return $this->authorizationCode;
    }

    /**
     * @param mixed $authorizationCode
     */
    public function setAuthorizationCode($authorizationCode)
    {
        $this->authorizationCode = $authorizationCode;
    }

    /**
     * @return mixed
     */
    public function getPrivacyVer()
    {
        return $this->privacyVer;
    }

    /**
     * @param mixed $privacyVer
     */
    public function setPrivacyVer($privacyVer)
    {
        $this->privacyVer = $privacyVer;
    }

    /**
     * @return mixed
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * @param mixed $templateId
     */
    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;
    }

    /**
     * @return mixed
     */
    public function getUserVersion()
    {
        return $this->userVersion;
    }

    /**
     * @param mixed $userVersion
     */
    public function setUserVersion($userVersion)
    {
        $this->userVersion = $userVersion;
    }

    /**
     * @return mixed
     */
    public function getUserDesc()
    {
        return $this->userDesc;
    }

    /**
     * @param mixed $userDesc
     */
    public function setUserDesc($userDesc)
    {
        $this->userDesc = $userDesc;
    }

    /**
     * @return mixed
     */
    public function getExtJson()
    {
        return $this->extJson;
    }

    /**
     * @param mixed $extJson
     */
    public function setExtJson($extJson)
    {
        $this->extJson = $extJson;
    }

    /**
     * @return mixed
     */
    public function getComponentAppid()
    {
        return $this->componentAppid;
    }

    /**
     * @param mixed $componentAppid
     */
    public function setComponentAppid($componentAppid)
    {
        $this->componentAppid = $componentAppid;
    }

    /**
     * @return mixed
     */
    public function getComponentAppSecret()
    {
        return $this->componentAppSecret;
    }

    /**
     * @param mixed $componentAppSecret
     */
    public function setComponentAppSecret($componentAppSecret)
    {
        $this->componentAppSecret = $componentAppSecret;
    }

    /**
     * @return mixed
     */
    public function getComponentVerifyTicket()
    {
        return $this->componentVerifyTicket;
    }

    /**
     * @param mixed $componentVerifyTicket
     */
    public function setComponentVerifyTicket($componentVerifyTicket)
    {
        $this->componentVerifyTicket = $componentVerifyTicket;
    }




    /**
     * @return mixed
     */
    public function getWechatId()
    {
        return $this->wechatId;
    }

    /**
     * @param mixed $wechatId
     */
    public function setWechatId($wechatId)
    {
        $this->wechatId = $wechatId;
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