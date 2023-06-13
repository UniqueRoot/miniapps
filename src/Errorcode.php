<?php
namespace Fangjia\Miniapps;

/**
 * 枚举类
 */
class Errorcode {



    /** 小程序审核结果 */
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