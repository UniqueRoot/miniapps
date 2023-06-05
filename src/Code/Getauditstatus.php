<?php
namespace Fangjia\Miniapps\Code;
use Fangjia\Miniapps\Base;

Class Getauditstatus extends Base
{

    // API名
    protected $methodName = "wxa/get_auditstatus";

    protected $isTrue = true;

    public $auditid       = null;

    public function buildParams()
    {
        $params = array();

        if($this->isNotNull($this->auditid )) {
            $params['auditid'] = $this->auditid ;
        }

        $this->param_json = $params;
    }
}