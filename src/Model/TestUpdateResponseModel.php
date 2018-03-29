<?php

namespace Fabstract\ExampleApplication\Model;

use Fabstract\Component\Serializer\Normalizer\ArrayType;
use Fabstract\Component\Serializer\Normalizer\NormalizableInterface;
use Fabstract\Component\Serializer\Normalizer\NormalizationMetadata;

class TestUpdateResponseModel implements NormalizableInterface
{
    /** @var int */
    public $id = null;
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
            ->registerType('children', new ArrayType(TestUpdateChildResponseModel::class));
    }
}
