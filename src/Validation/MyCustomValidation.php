<?php

namespace Fabstract\ExampleApplication\Validation;

use Fabstract\Component\Validator\Validation\ValidationBase;

class MyCustomValidation extends ValidationBase
{

    /**
     * @param string $non_null_value
     * @return bool
     */
    protected function isValidated($non_null_value)
    {
        if ($non_null_value > 5) {
            return true;
        }

        $this->setErrorMessage('value must be  greater than 5');
        return false;
    }
}
