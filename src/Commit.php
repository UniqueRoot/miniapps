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


    protected function buildParams()
    {
        $params = array();

        if(isNotNull($this->getTemplateId())) {
            $params['template_id'] = $this->getTemplateId();
        }

        if(isNotNull($this->getUserVersion())) {
            $params['user_version'] = $this->getUserVersion();
        }

        if(isNotNull($this->getUserDesc())) {
            $params['user_desc'] = $this->getUserDesc();
        }

        if(isNotNull($this->getExtJson())) {
            $params['ext_json'] = $this->getExtJson();
        }
        $this->param_json = $params;
    }
}