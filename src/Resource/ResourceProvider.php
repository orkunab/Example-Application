<?php

namespace Fabstract\ExampleApplication\Resource;

use Fabstract\Component\Http\Bag\ResourceBag;
use Fabstract\Component\Http\ResourceProviderBase;

class ResourceProvider extends ResourceProviderBase
{

    /**
     * @param ResourceBag $resource_bag
     * @return void
     */
    public function configureResourceBag($resource_bag)
    {
        $resource_bag->create('/test', TestResource::class);
    }
}
