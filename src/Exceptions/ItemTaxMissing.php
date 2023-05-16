<?php

namespace Freshbitsweb\LaravelCartManager\Exceptions;

use InvalidArgumentException;

class ItemTaxMissing extends InvalidArgumentException
{
    public static function for($modelName)
    {
        return new static("The tax for the item of the model '$modelName' could not be obtained. There should be tax column or getTax() method available on the model.");
    }
}
