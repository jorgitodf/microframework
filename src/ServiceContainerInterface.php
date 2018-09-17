<?php
declare(strict_types=1);

namespace App\Framework;

interface ServiceContainerInterface
{
    public function addService(string $name, $service);

    public function addLazyService(string $name, callable $callable);

    public function getService(string $name);

    public function hasService(string $name);    
}