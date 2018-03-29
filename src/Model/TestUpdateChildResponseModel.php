<?php

namespace Fabstract\ExampleApplication\Model;

use Fabstract\Component\Serializer\Normalizer\NormalizableInterface;
use Fabstract\Component\Serializer\Normalizer\NormalizationMetadata;

class TestUpdateChildResponseModel implements NormalizableInterface
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
}
