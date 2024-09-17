<?php

/*
 * Generated from FilterSql.g4 by ANTLR 4.13.2
 */

namespace Performing\FilterSql\Parser;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see FilterSqlParser}.
 */
interface FilterSqlListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see FilterSqlParser::filter()}.
	 * @param $context The parse tree.
	 */
	public function enterFilter(Context\FilterContext $context): void;
	/**
	 * Exit a parse tree produced by {@see FilterSqlParser::filter()}.
	 * @param $context The parse tree.
	 */
	public function exitFilter(Context\FilterContext $context): void;
	/**
	 * Enter a parse tree produced by the `orExpression`
	 * labeled alternative in {@see FilterSqlParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterOrExpression(Context\OrExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `orExpression` labeled alternative
	 * in {@see FilterSqlParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitOrExpression(Context\OrExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `conditionExpression`
	 * labeled alternative in {@see FilterSqlParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterConditionExpression(Context\ConditionExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `conditionExpression` labeled alternative
	 * in {@see FilterSqlParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitConditionExpression(Context\ConditionExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `andExpression`
	 * labeled alternative in {@see FilterSqlParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterAndExpression(Context\AndExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `andExpression` labeled alternative
	 * in {@see FilterSqlParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitAndExpression(Context\AndExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `parenthesisExpression`
	 * labeled alternative in {@see FilterSqlParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterParenthesisExpression(Context\ParenthesisExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `parenthesisExpression` labeled alternative
	 * in {@see FilterSqlParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitParenthesisExpression(Context\ParenthesisExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see FilterSqlParser::condition()}.
	 * @param $context The parse tree.
	 */
	public function enterCondition(Context\ConditionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see FilterSqlParser::condition()}.
	 * @param $context The parse tree.
	 */
	public function exitCondition(Context\ConditionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see FilterSqlParser::simpleCompare()}.
	 * @param $context The parse tree.
	 */
	public function enterSimpleCompare(Context\SimpleCompareContext $context): void;
	/**
	 * Exit a parse tree produced by {@see FilterSqlParser::simpleCompare()}.
	 * @param $context The parse tree.
	 */
	public function exitSimpleCompare(Context\SimpleCompareContext $context): void;
	/**
	 * Enter a parse tree produced by {@see FilterSqlParser::columnCompare()}.
	 * @param $context The parse tree.
	 */
	public function enterColumnCompare(Context\ColumnCompareContext $context): void;
	/**
	 * Exit a parse tree produced by {@see FilterSqlParser::columnCompare()}.
	 * @param $context The parse tree.
	 */
	public function exitColumnCompare(Context\ColumnCompareContext $context): void;
	/**
	 * Enter a parse tree produced by {@see FilterSqlParser::emptyCompare()}.
	 * @param $context The parse tree.
	 */
	public function enterEmptyCompare(Context\EmptyCompareContext $context): void;
	/**
	 * Exit a parse tree produced by {@see FilterSqlParser::emptyCompare()}.
	 * @param $context The parse tree.
	 */
	public function exitEmptyCompare(Context\EmptyCompareContext $context): void;
	/**
	 * Enter a parse tree produced by {@see FilterSqlParser::filledCompare()}.
	 * @param $context The parse tree.
	 */
	public function enterFilledCompare(Context\FilledCompareContext $context): void;
	/**
	 * Exit a parse tree produced by {@see FilterSqlParser::filledCompare()}.
	 * @param $context The parse tree.
	 */
	public function exitFilledCompare(Context\FilledCompareContext $context): void;
	/**
	 * Enter a parse tree produced by {@see FilterSqlParser::operator()}.
	 * @param $context The parse tree.
	 */
	public function enterOperator(Context\OperatorContext $context): void;
	/**
	 * Exit a parse tree produced by {@see FilterSqlParser::operator()}.
	 * @param $context The parse tree.
	 */
	public function exitOperator(Context\OperatorContext $context): void;
	/**
	 * Enter a parse tree produced by {@see FilterSqlParser::value()}.
	 * @param $context The parse tree.
	 */
	public function enterValue(Context\ValueContext $context): void;
	/**
	 * Exit a parse tree produced by {@see FilterSqlParser::value()}.
	 * @param $context The parse tree.
	 */
	public function exitValue(Context\ValueContext $context): void;
	/**
	 * Enter a parse tree produced by {@see FilterSqlParser::decimal()}.
	 * @param $context The parse tree.
	 */
	public function enterDecimal(Context\DecimalContext $context): void;
	/**
	 * Exit a parse tree produced by {@see FilterSqlParser::decimal()}.
	 * @param $context The parse tree.
	 */
	public function exitDecimal(Context\DecimalContext $context): void;
}