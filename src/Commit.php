<?php
namespace Fangjia\Miniapps;

/**
 * 上传代码并生成体验版
 * 文档：https://developers.weixin.qq.com/doc/oplatform/openApi/OpenApiDoc/miniprogram-management/code-management/commit.html
 */
Class Commit extends Base
{
    // API名
    protected $methodName = "wxa/commit";

    protected $isTrue = true;

    public $template_id       = null;
    public $user_version      = null;
    public $user_desc         = null;
    public $ext_json         = null;

    protected function buildParams()
    {
        $params = array();

        if(isNotNull($this->template_id )) {
            $params['template_id'] = $this->template_id ;
        }

        if(isNotNull($this->user_version)) {
            $params['user_version'] = $this->user_version;
        }

        if(isNotNull($this->user_desc)) {
            $params['user_desc'] = $this->user_desc;
        }

        if(isNotNull($this->ext_json)) {
            $params['ext_json'] = $this->ext_json;
        }
        $this->param_json = $params;
    }
}