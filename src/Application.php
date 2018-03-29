<?php

namespace Fabstract\ExampleApplication;

use Fabstract\Component\Http\Bag\ModuleBag;
use Fabstract\Component\REST\RestApplication;

class Application extends RestApplication
{

    /**
     * @param ModuleBag $module_bag
     * @return void
     */
    protected function configureModuleBag($module_bag)
    {
        $module_bag->create('/', Module::class);
    }
}
