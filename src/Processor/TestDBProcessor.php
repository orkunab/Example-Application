<?php

namespace Fabstract\ExampleApplication\Processor;

use Fabstract\ExampleApplication\Model\TestUpdateChildResponseModel;
use Fabstract\ExampleApplication\Model\TestUpdateResponseModel;

class TestDBProcessor extends ProcessorBase
{
    public function save($test_update_model, $id)
    {
        $test_response_model = new TestUpdateResponseModel();
        $test_response_model->id = $id;
        $test_response_model->name = $test_update_model->name;
        $test_response_model->children = [];
        foreach ($test_update_model->children as $test_child_update_model) {
            $test_child_response_model = new TestUpdateChildResponseModel();
            $test_child_response_model->child_name = $test_child_update_model->child_name;
            $test_child_response_model->child_price = $test_child_update_model->child_price;
            $test_response_model->children[] = $test_child_response_model;
        }

        return $test_response_model;
    }
}
