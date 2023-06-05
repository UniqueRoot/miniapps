<?php
namespace Fangjia\Miniapps\Qrcode;

use Fangjia\Miniapps\Base;

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

        if($this->isNotNull($this->path)) {
            $params['path'] = $this->path;
        }

        if($this->isNotNull($this->width)) {
            $params['width'] = $this->width;
        }

        if($this->isNotNull($this->auto_color)) {
            $params['auto_color'] = $this->auto_color;
        }

        if($this->isNotNull($this->line_color)) {
            $params['line_color'] = $this->line_color;
        }

        if($this->isNotNull($this->is_hyaline)) {
            $params['is_hyaline'] = $this->is_hyaline;
        }

        $this->param_json = $params;
    }
}