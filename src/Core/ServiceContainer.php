<?php
/**
 *
 * Author: ZhangYaTing
 * Date: 2021/8/22
 * Desc: 容器管理
 *
 */

namespace MuTouCloud\Core;

use Pimple\Container;

class ServiceContainer extends Container
{
    /**
     * @var array
     */
    protected $providers = [];


    /**
     * Constructor.
     *
     * @param array $config
     * @param array $prepends
     * @param string|null $id
     */
    public function __construct(array $config = [], array $prepends = [], string $id = null)
    {

        parent::__construct($prepends);
        $this->registerProviders($this->getProviders());

    }

    /**
     * @param array $providers
     */
    public function registerProviders(array $providers)
    {
        foreach ($providers as $provider) {
            parent::register(new $provider());
        }
    }

    /**
     * Return all providers.
     *
     * @return array
     */
    public function getProviders()
    {
        return array_merge([
//            ConfigServiceProvider::class,
            LogServiceProvider::class,
            RequestServiceProvider::class,
            HttpClientServiceProvider::class,
//            ExtensionServiceProvider::class,
            EventDispatcherServiceProvider::class,
        ], $this->providers);
    }
}