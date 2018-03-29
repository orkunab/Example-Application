<?php

namespace Fabstract\ExampleApplication\Service;

use Fabstract\Component\DependencyInjection\SubContainer;
use Fabstract\Component\Http\Bag\ServiceBag;
use Fabstract\ExampleApplication\Processor\ProcessorProvider;
use Fabstract\ExampleApplication\Processor\TestDBProcessor;

/**
 * Class ProcessorContainer
 * @package Fabstract\ExampleApplication\Service
 *
 * @property TestDBProcessor test_db
 */
class ProcessorContainer extends SubContainer
{
    /** @var bool */
    private $initialized = false;

    private function initialize()
    {
        if ($this->initialized) {
            return;
        }

        $processor_provider = new ProcessorProvider();
        $processor_bag = new ServiceBag();
        $processor_provider->configureServiceBag($processor_bag);
        $processor_definition_list = $processor_bag->getAll();
        foreach ($processor_definition_list as $processor_definition) {
            $this->add($processor_definition);
        }

        $this->initialized = true;
    }

    public function setContainer($container)
    {
        parent::setContainer($container);

        $this->initialize();
        return $this;
    }
}
