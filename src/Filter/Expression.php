<?php

declare(strict_types=1);

namespace Performing\FilterSql\Filter;

interface Expression
{
    public function __toString(): string;
}
