<?php

namespace Fabstract\ExampleApplication\Service;

use Fabstract\Component\Http\Injectable;

/**
 * Class HelloWorldService
 * @package Fabstract\ExampleApplication\Service
 *
 * Must extend Injectable if this class needs to access service container.
 *
 * @see Injectable
 */
class HelloWorldService extends Injectable
{
    public function getMessage()
    {
        return 'hello world';
    }
}
