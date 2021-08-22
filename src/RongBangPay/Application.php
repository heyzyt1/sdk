<?php
/**
 *
 * Author: ZhangYaTing
 * Date: 2021/8/22
 * Desc: 荣邦支付
 *
 */

namespace MuTouCloud\RongBangPay;

use MuTouCloud\Core\ServiceContainer;


class Application extends ServiceContainer
{

    /**
     * @var array
     */
    protected $providers = [
        Test\ServiceProvider::class,
    ];
}

