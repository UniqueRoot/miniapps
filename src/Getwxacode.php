<?php
namespace Fangjia\Miniapps;

Class Getwxacode extends Base
{
    // API名
    protected $methodName = "wxa/getwxacode";

    protected $isTrue = true;

    public $path       = null;
    public $width      = null;
    public $auto_color = null;
    public $line_color = null;
    public $is_hyaline = null;

    protected function buildParams()
    {
        $params = array();

        if(isNotNull($this->path)) {
            $params['path'] = $this->path;
        }

        if(isNotNull($this->width)) {
            $params['width'] = $this->width;
        }

        if(isNotNull($this->auto_color)) {
            $params['auto_color'] = $this->auto_color;
        }

        if(isNotNull($this->line_color)) {
            $params['line_color'] = $this->line_color;
        }

        if(isNotNull($this->is_hyaline)) {
            $params['is_hyaline'] = $this->is_hyaline;
        }

        $this->param_json = $params;
    }
}