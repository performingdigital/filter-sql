<?php

declare(strict_types=1);

namespace Performing\FilterSql\Filter;

readonly class ValueExpression implements Expression
{
    public function __construct(
        public mixed $value,
    ) {
    }
}
