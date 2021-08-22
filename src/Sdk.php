<?php

/**
 *
 * User: ZhangYaTing
 * Date: 2021-08-22 15:41
 * Desc: 木头云SDK管理
 *
 */

namespace MuTouCloud;

/**
 * Class SDK.
 *
 * @method static \MuTouCloud\RongBangPay\Application     rongBangPay(array $config)
 *
 */
class Sdk
{
    /**
     * @param string $name
     * @param array $config
     *
     * @return \MuTouCloud\Kernel\ServiceContainer
     */
    public static function make($name, array $config)
    {
        var_dump($name);
        var_dump($config);
        $namespace   = Core\Support\Str::studly($name);
        $application = "\\MuTouCloud\\{$namespace}\\Application";
        return new $application($config);
    }

    /**
     * Dynamically pass methods to the application.
     *
     * @param string $name
     * @param array $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }
}
