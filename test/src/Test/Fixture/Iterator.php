<?php

/*
 * This file is part of the Pops package.
 *
 * Copyright © 2014 Erin Millard
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

namespace Eloquent\Pops\Test\Fixture;

use ArrayIterator;
use Iterator as IteratorInterface;

class Iterator extends Obj implements IteratorInterface
{
    public function __construct(array $values)
    {
        $this->values = $values;
        $this->iterator = new ArrayIterator($this->values);
    }

    public function current(): mixed
    {
        return $this->iterator->current();
    }

    public function key(): mixed
    {
        return $this->iterator->key();
    }

    public function next(): void
    {
        $this->iterator->next();
    }

    public function rewind(): void
    {
        $this->iterator->rewind();
    }

    public function valid(): bool
    {
        return $this->iterator->valid();
    }

    public $iterator;
    public $values;
}
