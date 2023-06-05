<?php
namespace Fangjia\Miniapps\Base;

use Fangjia\Miniapps\Base;

Class Modifydomain extends Base
{
    // API名
    protected $methodName = "wxa/modify_domain";

    protected $isTrue = true;

    public $requestdomain    = null;
    public $wsrequestdomain  = null;
    public $uploaddomain     = null;
    public $downloaddomain   = null;
    public $action           = null;

    protected function buildParams()
    {
        $params = array();

        if($this->isNotNull($this->action)) {
            $params['action'] = $this->action ;
        }

        if($this->isNotNull($this->requestdomain )) {
            $params['requestdomain'] = $this->requestdomain ;
        }

        if($this->isNotNull($this->wsrequestdomain)) {
            $params['wsrequestdomain'] = $this->wsrequestdomain;
        }

        if($this->isNotNull($this->uploaddomain)) {
            $params['uploaddomain'] = $this->uploaddomain;
        }

        if($this->isNotNull($this->downloaddomain)) {
            $params['downloaddomain'] = $this->downloaddomain;
        }
        $this->param_json = $params;
    }
}