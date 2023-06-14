<?php
namespace Fangjia\Miniapps;

/**
 * 提交代码审核
 * 在调用commit为小程序上传代码后，可以调用本接口，将上传的代码提交审核
 * 文档：https://developers.weixin.qq.com/doc/oplatform/openApi/OpenApiDoc/miniprogram-management/code-management/submitAudit.html
 */
Class Submitaudit extends Base
{
    // API名
    protected $methodName = "wxa/submit_audit";

    protected $isTrue = true;

    protected function buildParams()
    {
        $params = array();

        if(isNotNull($this->getFeedbackInfo())) {
            $params['feedback_info'] = $this->getFeedbackInfo();
        }

        if(isNotNull($this->getFeedbackStuff())) {
            $params['feedback_stuff'] = $this->getFeedbackStuff();
        }


        $this->param_json = $params;
    }
}