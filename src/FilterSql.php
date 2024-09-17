<?php

declare(strict_types=1);

namespace Performing\FilterSql;

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Error\BailErrorStrategy;
use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\Tree\AbstractParseTreeVisitor;
use Performing\FilterSql\Parser\Context\AndExpressionContext;
use Performing\FilterSql\Parser\Context\ColumnCompareContext;
use Performing\FilterSql\Parser\Context\ConditionContext;
use Performing\FilterSql\Parser\Context\ConditionExpressionContext;
use Performing\FilterSql\Parser\Context\DecimalContext;
use Performing\FilterSql\Parser\Context\EmptyCompareContext;
use Performing\FilterSql\Parser\Context\FilledCompareContext;
use Performing\FilterSql\Parser\Context\FilterContext;
use Performing\FilterSql\Parser\Context\OperatorContext;
use Performing\FilterSql\Parser\Context\OrExpressionContext;
use Performing\FilterSql\Parser\Context\ParenthesisExpressionContext;
use Performing\FilterSql\Parser\Context\SimpleCompareContext;
use Performing\FilterSql\Parser\Context\ValueContext;
use Performing\FilterSql\Parser\FilterSqlLexer;
use Performing\FilterSql\Parser\FilterSqlParser;
use Performing\FilterSql\Parser\FilterSqlVisitor;
use Performing\FilterSql\Filter\AndExpression;
use Performing\FilterSql\Filter\Condition;
use Performing\FilterSql\Filter\OrExpression;
use Performing\FilterSql\Filter\ValueExpression;
use Performing\FilterSql\Parser\Context\BoolContext;
use Performing\FilterSql\Parser\Context\StringContext;
use Performing\FilterSql\Parser\Context\IntegerContext;

class FilterSql extends AbstractParseTreeVisitor implements FilterSqlVisitor
{
    public static function parse(string $source)
    {
        $input = InputStream::fromString($source);
        $lexer = new FilterSqlLexer($input);
        $tokens = new CommonTokenStream($lexer);
        $parser = new FilterSqlParser($tokens);
        $parser->setErrorHandler(new BailErrorStrategy());
        $parser->setBuildParseTree(true);
        $tree = $parser->filter();
        return (new static())->visit($tree);
    }

    public function visitFilter(FilterContext $context)
    {
        return $this->visit($context->expression());
    }

    public function visitOrExpression(OrExpressionContext $context)
    {
        return new OrExpression(
            $this->visit($context->expression(0)),
            $this->visit($context->expression(1))
        );
    }

    public function visitConditionExpression(ConditionExpressionContext $context)
    {
        return $this->visit($context->condition());
    }

    public function visitAndExpression(AndExpressionContext $context)
    {
        return new AndExpression(
            $this->visit($context->expression(0)),
            $this->visit($context->expression(1))
        );
    }

    public function visitParenthesisExpression(ParenthesisExpressionContext $context)
    {
        return $this->visit($context->expression());
    }

    public function visitCondition(ConditionContext $context)
    {
        if ($context->simpleCompare()) {
            return $this->visit($context->simpleCompare());
        } elseif ($context->columnCompare()) {
            return $this->visit($context->columnCompare());
        } elseif ($context->emptyCompare()) {
            return $this->visit($context->emptyCompare());
        } elseif ($context->filledCompare()) {
            return $this->visit($context->filledCompare());
        }
    }

    public function visitSimpleCompare(SimpleCompareContext $context)
    {
        return new Condition(
            $context->FIELD()->getText(),
            $context->operator()->getText(),
            $this->visit($context->value())->value
        );
    }

    public function visitColumnCompare(ColumnCompareContext $context)
    {
        return new Condition(
            $context->FIELD(0)->getText(),
            $context->operator()->getText(),
            $context->FIELD(1)->getText(),
            isColumn: true
        );
    }

    public function visitEmptyCompare(EmptyCompareContext $context)
    {
        return new Condition(
            $context->FIELD()->getText(),
            'is',
            null
        );
    }

    public function visitFilledCompare(FilledCompareContext $context)
    {
        return new Condition(
            $context->FIELD()->getText(),
            'is not',
            null
        );
    }

    public function visitOperator(OperatorContext $context)
    {
        return new ValueExpression($context->getText());
    }

    public function visitValue(ValueContext $context)
    {
        if ($context->string()) {
            return $this->visit($context->string());
        } elseif ($context->integer()) {
            return $this->visit($context->integer());
        } elseif ($context->decimal()) {
            return $this->visit($context->decimal());
        } elseif ($context->bool()) {
            return $this->visit($context->bool());
        }
    }

    public function visitBool(BoolContext $context)
    {
        return new ValueExpression((bool) $context->BOOL());
    }

    public function visitString(StringContext $context)
    {
        return new ValueExpression(trim($context->getText(), '\''));
    }

    public function visitInteger(IntegerContext $context)
    {
        return new ValueExpression(intval($context->getText()));
    }

    public function visitDecimal(DecimalContext $context)
    {
        return new ValueExpression(floatval($context->getText()));
    }
}
