<?php

namespace Fabstract\ExampleApplication\Model;

use Fabstract\Component\REST\RequestBodyModelBase;
use Fabstract\Component\Serializer\Normalizer\NormalizationMetadata;
use Fabstract\Component\Validator\Validation\StringValidation;
use Fabstract\Component\Validator\ValidationMetadata;
use Fabstract\ExampleApplication\Validation\MyCustomValidation;

class TestChildUpdateModel extends RequestBodyModelBase
{
    /** @var string */
    public $child_name = null;
    /** @var float */
    public $child_price = 0.0;

    /**
     * @param NormalizationMetadata $normalization_metadata
     * @return void
     */
    public function configureNormalizationMetadata($normalization_metadata)
    {
        // no normalization data
    }

    /**
     * @param ValidationMetadata $validation_metadata
     * @return void
     */
    public function configureValidationMetadata($validation_metadata)
    {
        $validation_metadata
            ->addValidation('child_name', StringValidation::create()->setMinLength(3)->setAllowNull(true))
            ->addValidation('child_price', MyCustomValidation::create()->setAllowNull(true));
    }
}
