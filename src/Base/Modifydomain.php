<?php
namespace Fangjia\Miniapps\Base;

use Fangjia\Miniapps\Base;

Class Modifydomain extends Base
{
    // API名
    protected $methodName = "wxa/modify_domain";

    protected $isTrue = true;

    protected function buildParams()
    {
        $params = array();

        if(isNotNull($this->getAction())) {
            $params['action'] = $this->getAction();
        }

        if($this->isNotNull($this->getRequestdomain())) {
            $params['requestdomain'] = $this->getRequestdomain() ;
        }

        if($this->isNotNull($this->getWsrequestdomain())) {
            $params['wsrequestdomain'] = $this->getWsrequestdomain();
        }

        if($this->isNotNull($this->getUploaddomain())) {
            $params['uploaddomain'] = $this->getUploaddomain();
        }

        if($this->isNotNull($this->getDownloaddomain())) {
            $params['downloaddomain'] = $this->getDownloaddomain();
        }
        $this->param_json = $params;
    }


}