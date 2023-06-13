<?php
namespace Fangjia\Miniapps;

/**
 * 审核结果枚举类
 */
class Errorcode {


    /** 审核成功 */
    const STATUS_SUCCESS = 0;

    /** 审核被拒绝 */
    const STATUS_ERROR  = 1;

    /** 审核中 */
    const STATUS_WAIT   = 2;

    /** 已撤回 */
    const STATUS_RECALL = 3;

    /** 审核延后 */
    const STATUS_DELAY  = 4;

}