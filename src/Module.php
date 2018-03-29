<?php

namespace Fabstract\ExampleApplication;

use Fabstract\Component\Http\ModuleBase;
use Fabstract\Component\Http\ResourceProviderInterface;
use Fabstract\Component\Http\ServiceProviderInterface;
use Fabstract\ExampleApplication\Resource\ResourceProvider;
use Fabstract\ExampleApplication\Service\ServiceProvider;

class Module extends ModuleBase
{

    /**
     * @return ResourceProviderInterface|string
     */
    public function getResourceProvider()
    {
        return ResourceProvider::class;
    }

    /**
     * @return ServiceProviderInterface|string|null
     */
    public function getServiceProvider()
    {
        return ServiceProvider::class;
    }
}
