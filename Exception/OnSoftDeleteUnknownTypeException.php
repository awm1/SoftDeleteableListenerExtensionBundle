<?php

namespace Evence\Bundle\SoftDeleteableExtensionBundle\Exception;

class OnSoftDeleteUnknownTypeException extends \Exception
{
    public function __construct($type)
    {
        parent::__construct('Type '.$type.' for onSoftDelete attribute does not exist.');
    }
}
