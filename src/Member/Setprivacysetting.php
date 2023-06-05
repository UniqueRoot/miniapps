<?php
namespace Fangjia\Miniapps\Member;
use Fangjia\Miniapps\Base;

Class Setprivacysetting extends Base
{
    // API名
    protected $methodName = "cgi-bin/component/setprivacysetting";

    protected $isTrue = true;

    // 用户隐私保护指引的版本，1表示现网版本；2表示开发版。默认是2开发版。
    public $privacy_ver   = null;
    // 收集方（开发者）信息配置
    public $owner_setting = null;
    // 要收集的用户信息配置，可选择的用户信息类型参考下方详情。当privacy_ver传2或者不传是必填；当privacy_ver传1时，该参数不可传，否则会报错
    public $setting_list  = null;

    protected function buildParams()
    {
        $params = array();

        if($this->isNotNull($this->privacy_ver )) {
            $params['privacy_ver'] = $this->privacy_ver ;
        }

        if($this->isNotNull($this->owner_setting )) {
            $params['owner_setting'] = $this->owner_setting ;
        }

        if($this->isNotNull($this->setting_list )) {
            $params['setting_list'] = $this->setting_list ;
        }

        $this->param_json = $params;
    }
}