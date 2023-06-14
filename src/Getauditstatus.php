<?php
namespace Fangjia\Miniapps;

/**
 * 查询审核单状态
 * 文档：https://developers.weixin.qq.com/doc/oplatform/openApi/OpenApiDoc/miniprogram-management/code-management/getAuditStatus.html
 */
Class Getauditstatus extends Base
{

    // API名
    protected $methodName = "wxa/get_auditstatus";

    protected $isTrue = true;

    public function buildParams()
    {
        $params = array();
        if(isNotNull($this->getAuditId())) {
            $params['auditid'] = $this->getAuditId() ;
        }
        $this->param_json = $params;
    }
}