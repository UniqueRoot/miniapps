<?php
namespace Fangjia\Miniapps\Code;

use Fangjia\Miniapps\Base;
Class Submitaudit extends Base
{
    // API名
    protected $methodName = "wxa/submit_audit";

    protected $isTrue = true;

    public $feedback_info       = null;
    public $feedback_stuff      = null;

    protected function buildParams()
    {
        $params = array();

        if($this->isNotNull($this->feedback_info )) {
            $params['feedback_info'] = $this->feedback_info ;
        }

        if($this->isNotNull($this->feedback_stuff)) {
            $params['feedback_stuff'] = $this->feedback_stuff;
        }


        $this->param_json = $params;
    }
}