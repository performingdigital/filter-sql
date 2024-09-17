<?php

declare(strict_types=1);

namespace Performing\FilterSql\Filter;

readonly class OrExpression implements Expression
{
    public function __construct(
        public Expression $left,
        public Expression $right
    ) {
    }

    public function __toString(): string
    {
        return "({$this->left} OR {$this->right})";
    }
}
