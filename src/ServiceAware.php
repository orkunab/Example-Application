<?php

namespace Fabstract\ExampleApplication;

use Fabstract\ExampleApplication\Service\HelloWorldService;
use Fabstract\ExampleApplication\Service\ProcessorContainer;

/**
 * Interface ServiceAware
 * @package Fabstract\ExampleApplication
 *
 * @property HelloWorldService hello_world
 * @property ProcessorContainer processor
 */
interface ServiceAware extends \Fabstract\Component\REST\ServiceAware
{

}
