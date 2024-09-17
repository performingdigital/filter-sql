<?php

/*
 * Generated from FilterSql.g4 by ANTLR 4.13.2
 */

namespace Performing\FilterSql\Parser;

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see FilterSqlParser}.
 */
interface FilterSqlVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by {@see FilterSqlParser::filter()}.
	 *
	 * @param Context\FilterContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFilter(Context\FilterContext $context);

	/**
	 * Visit a parse tree produced by the `orExpression` labeled alternative
	 * in {@see FilterSqlParser::expression()}.
	 *
	 * @param Context\OrExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOrExpression(Context\OrExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `conditionExpression` labeled alternative
	 * in {@see FilterSqlParser::expression()}.
	 *
	 * @param Context\ConditionExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConditionExpression(Context\ConditionExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `andExpression` labeled alternative
	 * in {@see FilterSqlParser::expression()}.
	 *
	 * @param Context\AndExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAndExpression(Context\AndExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `parenthesisExpression` labeled alternative
	 * in {@see FilterSqlParser::expression()}.
	 *
	 * @param Context\ParenthesisExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParenthesisExpression(Context\ParenthesisExpressionContext $context);

	/**
	 * Visit a parse tree produced by {@see FilterSqlParser::condition()}.
	 *
	 * @param Context\ConditionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCondition(Context\ConditionContext $context);

	/**
	 * Visit a parse tree produced by {@see FilterSqlParser::simpleCompare()}.
	 *
	 * @param Context\SimpleCompareContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSimpleCompare(Context\SimpleCompareContext $context);

	/**
	 * Visit a parse tree produced by {@see FilterSqlParser::columnCompare()}.
	 *
	 * @param Context\ColumnCompareContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitColumnCompare(Context\ColumnCompareContext $context);

	/**
	 * Visit a parse tree produced by {@see FilterSqlParser::emptyCompare()}.
	 *
	 * @param Context\EmptyCompareContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEmptyCompare(Context\EmptyCompareContext $context);

	/**
	 * Visit a parse tree produced by {@see FilterSqlParser::filledCompare()}.
	 *
	 * @param Context\FilledCompareContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFilledCompare(Context\FilledCompareContext $context);

	/**
	 * Visit a parse tree produced by {@see FilterSqlParser::operator()}.
	 *
	 * @param Context\OperatorContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOperator(Context\OperatorContext $context);

	/**
	 * Visit a parse tree produced by {@see FilterSqlParser::value()}.
	 *
	 * @param Context\ValueContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitValue(Context\ValueContext $context);

	/**
	 * Visit a parse tree produced by {@see FilterSqlParser::decimal()}.
	 *
	 * @param Context\DecimalContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDecimal(Context\DecimalContext $context);
}