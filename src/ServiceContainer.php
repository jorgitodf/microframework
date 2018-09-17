<?php

namespace App\Controllers;

use App\Framework\ServiceContainerInterface;
use Xtreamwayz\Pimple\Container;


class ServiceContainer implements ServiceContainerInterface
{
    private $container;

    public function __construct()
    {
        $this->container = new Container();
    }

    public function addService(string $name, $service)
    {
        $this->container[$name] = $service;
    }

    public function addLazyService(string $name, callable $callable)
    {
        $this->container[$name] = $this->container->factory($callable);
    }

    public function getService(string $name)
    {
        return $this->container->get($name);
    }

    public function hasService(string $name)
    {
        return $this->container->has($name);
    }
}