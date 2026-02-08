<?php

/*
 * This file is part of the Pops package.
 *
 * Copyright © 2014 Erin Millard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eloquent\Pops;

use Eloquent\Pops\ProxyObject;

class UppercaseProxyObject extends ProxyObject
{
    public function popsCall(string $method, array &$arguments): mixed
    {
        return strtoupper(parent::popsCall($method, $arguments));
    }

    public function __get(string $property): mixed
    {
        return strtoupper(parent::__get($property));
    }
}
