<?php

namespace Fabstract\ExampleApplication\Service;

use Fabstract\Component\Http\Bag\ServiceBag;
use Fabstract\Component\Http\ServiceProviderBase;

class ServiceProvider extends ServiceProviderBase
{

    /**
     * @param ServiceBag $service_bag
     * @return void
     */
    public function configureServiceBag($service_bag)
    {
        $service_bag->create('processor', ProcessorContainer::class);
        $service_bag->create('hello_world', HelloWorldService::class);
    }
}
