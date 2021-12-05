<?php

namespace App\BaseClasses;

use App\Utils\Hydrator;

abstract class BaseEntity
{
    use Hydrator;

    public function __construct(array $data = [])
    {
        $this->hydrate($data);
    }
}