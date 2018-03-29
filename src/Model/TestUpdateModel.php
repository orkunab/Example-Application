<?php

namespace Fabstract\ExampleApplication\Model;

use Fabstract\Component\REST\RequestBodyModelBase;
use Fabstract\Component\Serializer\Normalizer\ArrayType;
use Fabstract\Component\Serializer\Normalizer\NormalizationMetadata;
use Fabstract\Component\Validator\Validation\StringValidation;
use Fabstract\Component\Validator\ValidationMetadata;
use Fabstract\ExampleApplication\Validation\ArrayValidation;
use Fabstract\ExampleApplication\Validation\MyCustomValidation;

class TestUpdateModel extends RequestBodyModelBase
{
    /** @var string */
    public $name = null;
    /** @var float */
    public $price = 0.0;
    /** @var TestChildUpdateModel[] */
    public $children = [];

    /**
     * @param NormalizationMetadata $normalization_metadata
     * @return void
     */
    public function configureNormalizationMetadata($normalization_metadata)
    {
        $normalization_metadata
            ->registerType('children', new ArrayType(TestChildUpdateModel::class));
    }

    /**
     * @param ValidationMetadata $validation_metadata
     * @return void
     */
    public function configureValidationMetadata($validation_metadata)
    {
        $validation_metadata
            ->addValidation('name', StringValidation::create()->setMinLength(3))
            ->addValidation('price', MyCustomValidation::create())
            ->addValidation('children', ArrayValidation::create());
    }
}
