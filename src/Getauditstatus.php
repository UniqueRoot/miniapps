<?php
namespace Fangjia\Miniapps;

Class Getauditstatus extends Base
{

    // API名
    protected $methodName = "wxa/get_auditstatus";

    protected $isTrue = true;

    public $auditid       = null;

    public function buildParams()
    {
        $params = array();

        if(isNotNull($this->auditid )) {
            $params['auditid'] = $this->auditid ;
        }

        $this->param_json = $params;
    }
}