<?php

namespace Fabstract\ExampleApplication\Processor;

use Fabstract\Component\Http\Bag\ServiceBag;
use Fabstract\Component\Http\ServiceProviderInterface;

class ProcessorProvider implements ServiceProviderInterface
{

    /**
     * @param ServiceBag $service_bag
     * @return void
     */
    public function configureServiceBag($service_bag)
    {
        $service_bag->create('test_db', TestDBProcessor::class);
    }
}
