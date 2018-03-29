<?php

namespace Fabstract\ExampleApplication\Validation;

use Fabstract\Component\Validator\Validation\ValidationBase;

class ArrayValidation extends ValidationBase
{

    /**
     * @param array $non_null_value
     * @return bool
     */
    protected function isValidated($non_null_value)
    {
        if (!is_array($non_null_value)) {
            $this->setErrorMessage('value must be array');
            return false;
        }

        if (count($non_null_value) === 0) {
            $this->setErrorMessage('value should have at least 1 element');
            return false;
        }

        return true;
    }
}
