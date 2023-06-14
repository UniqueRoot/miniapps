<?php
namespace Fangjia\Miniapps;

/**
 * 撤回代码审核
 * 单个帐号每天审核撤回次数最多不超过 5 次（每天的额度从0点开始生效），一个月不超过 10 次。
 * 文档：https://developers.weixin.qq.com/doc/oplatform/openApi/OpenApiDoc/miniprogram-management/code-management/undoAudit.html
 */
Class Undocodeaudit extends Base
{
    // API名
    protected $methodName = "wxa/undocodeaudit";

    protected $isTrue = true;
    protected $isGet  = true;


    protected function buildParams()
    {
        $params = array();

        $this->param_json = $params;
    }
}