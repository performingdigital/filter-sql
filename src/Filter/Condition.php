<?php

declare(strict_types=1);

namespace Performing\FilterSql\Filter;

readonly final class Condition implements Expression
{
    public function __construct(
        public string $field1,
        public string $op,
        public ?string $value,
        public bool $isColumn = false
    ) {
    }

    public function __toString(): string
    {
        return "{$this->field1} {$this->op} {$this->value}";
    }
}
