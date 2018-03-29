<?php

namespace Fabstract\ExampleApplication\Resource;

use Fabstract\Component\Http\Bag\EndpointBag;
use Fabstract\Component\Http\Exception\StatusCodeException\NotFoundException;
use Fabstract\Component\Http\Exception\StatusCodeException\UnauthorizedException;
use Fabstract\Component\Http\ResourceBase;
use Fabstract\Component\REST\Action;
use Fabstract\ExampleApplication\Model\TestUpdateModel;
use Fabstract\ExampleApplication\ServiceAware;

class TestResource extends ResourceBase implements ServiceAware
{

    /**
     * @param EndpointBag $endpoint_bag
     * @return void
     */
    public function configureEndpointBag($endpoint_bag)
    {
        $endpoint_bag->create('/')
            ->addGET('hello')
            ->addPOST('create');

        $endpoint_bag->create('/{id}')
            ->addPUT(Action::create($this, 'handleUpdateRequest')
                ->setRequestBodyModel(TestUpdateModel::class));
    }

    public function hello()
    {
        return $this->hello_world->getMessage();
    }

    public function create()
    {
        $error_details = 'you are not authorized for this action';
        throw new UnauthorizedException($error_details);
    }

    public function handleUpdateRequest($id)
    {
        if ($id !== '1') {
            throw new NotFoundException();
        }

        /** @var TestUpdateModel $test_update_model */
        $test_update_model = $this->request->getBody();

        $test_response_model = $this->processor->test_db->save($test_update_model, $id);

        return $test_response_model;
    }
}
