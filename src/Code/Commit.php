<?php
namespace Fangjia\Miniapps\Code;
use Fangjia\Miniapps\Base;

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

        if($this->isNotNull($this->template_id )) {
            $params['template_id'] = $this->template_id ;
        }

        if($this->isNotNull($this->user_version)) {
            $params['user_version'] = $this->user_version;
        }

        if($this->isNotNull($this->user_desc)) {
            $params['user_desc'] = $this->user_desc;
        }

        if($this->isNotNull($this->ext_json)) {
            $params['ext_json'] = $this->ext_json;
        }
        $this->param_json = $params;
    }
}