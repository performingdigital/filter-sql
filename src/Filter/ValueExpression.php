<?php

declare(strict_types=1);

namespace Performing\FilterSql\Filter;

class ValueExpression implements Expression
{
    public function __construct(
        public ?string $value,
    ) {
    }

    public function __toString(): string
    {
        return "{this->value}";
    }
}
