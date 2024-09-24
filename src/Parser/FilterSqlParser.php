<?php

/*
 * Generated from FilterSql.g4 by ANTLR 4.13.2
 */

namespace Performing\FilterSql\Parser {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class FilterSqlParser extends Parser
	{
		public const EQ = 1, GT = 2, GTE = 3, LT = 4, LTE = 5, NEQ = 6, NOTLIKE = 7, 
               LIKE = 8, NOTCONTAINS = 9, CONTAINS = 10, STARTSWITH = 11, 
               ENDSWITH = 12, STARTS = 13, ENDS = 14, WITH = 15, BOOL = 16, 
               STRING = 17, AND = 18, OR = 19, IS = 20, NULL = 21, NOT = 22, 
               OPEN_PAR = 23, CLOSE_PAR = 24, INT = 25, DOT = 26, FIELD = 27, 
               WS = 28;

		public const RULE_filter = 0, RULE_expression = 1, RULE_condition = 2, 
               RULE_simpleCompare = 3, RULE_columnCompare = 4, RULE_emptyCompare = 5, 
               RULE_filledCompare = 6, RULE_operator = 7, RULE_value = 8, 
               RULE_bool = 9, RULE_string = 10, RULE_integer = 11, RULE_decimal = 12;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'filter', 'expression', 'condition', 'simpleCompare', 'columnCompare', 
			'emptyCompare', 'filledCompare', 'operator', 'value', 'bool', 'string', 
			'integer', 'decimal'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'='", "'>'", "'>='", "'<'", "'<='", null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, "'('", "')'", null, "'.'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, "EQ", "GT", "GTE", "LT", "LTE", "NEQ", "NOTLIKE", "LIKE", "NOTCONTAINS", 
		    "CONTAINS", "STARTSWITH", "ENDSWITH", "STARTS", "ENDS", "WITH", "BOOL", 
		    "STRING", "AND", "OR", "IS", "NULL", "NOT", "OPEN_PAR", "CLOSE_PAR", 
		    "INT", "DOT", "FIELD", "WS"
		];

		private const SERIALIZED_ATN =
			[4, 1, 28, 93, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 1, 0, 1, 0, 1, 0, 1, 1, 
		    1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 1, 36, 8, 1, 1, 1, 1, 1, 1, 1, 1, 
		    1, 1, 1, 1, 1, 5, 1, 44, 8, 1, 10, 1, 12, 1, 47, 9, 1, 1, 2, 1, 2, 
		    1, 2, 1, 2, 3, 2, 53, 8, 2, 1, 3, 1, 3, 1, 3, 1, 3, 1, 4, 1, 4, 1, 
		    4, 1, 4, 1, 5, 1, 5, 1, 5, 1, 5, 1, 6, 1, 6, 1, 6, 1, 6, 3, 6, 71, 
		    8, 6, 1, 6, 1, 6, 1, 7, 1, 7, 1, 8, 1, 8, 1, 8, 1, 8, 3, 8, 81, 8, 
		    8, 1, 9, 1, 9, 1, 10, 1, 10, 1, 11, 1, 11, 1, 12, 1, 12, 1, 12, 1, 
		    12, 1, 12, 0, 1, 2, 13, 0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 
		    24, 0, 2, 2, 0, 1, 1, 20, 20, 1, 0, 1, 12, 89, 0, 26, 1, 0, 0, 0, 
		    2, 35, 1, 0, 0, 0, 4, 52, 1, 0, 0, 0, 6, 54, 1, 0, 0, 0, 8, 58, 1, 
		    0, 0, 0, 10, 62, 1, 0, 0, 0, 12, 66, 1, 0, 0, 0, 14, 74, 1, 0, 0, 
		    0, 16, 80, 1, 0, 0, 0, 18, 82, 1, 0, 0, 0, 20, 84, 1, 0, 0, 0, 22, 
		    86, 1, 0, 0, 0, 24, 88, 1, 0, 0, 0, 26, 27, 3, 2, 1, 0, 27, 28, 5, 
		    0, 0, 1, 28, 1, 1, 0, 0, 0, 29, 30, 6, 1, -1, 0, 30, 36, 3, 4, 2, 
		    0, 31, 32, 5, 23, 0, 0, 32, 33, 3, 2, 1, 0, 33, 34, 5, 24, 0, 0, 34, 
		    36, 1, 0, 0, 0, 35, 29, 1, 0, 0, 0, 35, 31, 1, 0, 0, 0, 36, 45, 1, 
		    0, 0, 0, 37, 38, 10, 2, 0, 0, 38, 39, 5, 18, 0, 0, 39, 44, 3, 2, 1, 
		    3, 40, 41, 10, 1, 0, 0, 41, 42, 5, 19, 0, 0, 42, 44, 3, 2, 1, 2, 43, 
		    37, 1, 0, 0, 0, 43, 40, 1, 0, 0, 0, 44, 47, 1, 0, 0, 0, 45, 43, 1, 
		    0, 0, 0, 45, 46, 1, 0, 0, 0, 46, 3, 1, 0, 0, 0, 47, 45, 1, 0, 0, 0, 
		    48, 53, 3, 6, 3, 0, 49, 53, 3, 8, 4, 0, 50, 53, 3, 10, 5, 0, 51, 53, 
		    3, 12, 6, 0, 52, 48, 1, 0, 0, 0, 52, 49, 1, 0, 0, 0, 52, 50, 1, 0, 
		    0, 0, 52, 51, 1, 0, 0, 0, 53, 5, 1, 0, 0, 0, 54, 55, 5, 27, 0, 0, 
		    55, 56, 3, 14, 7, 0, 56, 57, 3, 16, 8, 0, 57, 7, 1, 0, 0, 0, 58, 59, 
		    5, 27, 0, 0, 59, 60, 3, 14, 7, 0, 60, 61, 5, 27, 0, 0, 61, 9, 1, 0, 
		    0, 0, 62, 63, 5, 27, 0, 0, 63, 64, 7, 0, 0, 0, 64, 65, 5, 21, 0, 0, 
		    65, 11, 1, 0, 0, 0, 66, 70, 5, 27, 0, 0, 67, 71, 5, 6, 0, 0, 68, 69, 
		    5, 20, 0, 0, 69, 71, 5, 22, 0, 0, 70, 67, 1, 0, 0, 0, 70, 68, 1, 0, 
		    0, 0, 71, 72, 1, 0, 0, 0, 72, 73, 5, 21, 0, 0, 73, 13, 1, 0, 0, 0, 
		    74, 75, 7, 1, 0, 0, 75, 15, 1, 0, 0, 0, 76, 81, 3, 18, 9, 0, 77, 81, 
		    3, 20, 10, 0, 78, 81, 3, 22, 11, 0, 79, 81, 3, 24, 12, 0, 80, 76, 
		    1, 0, 0, 0, 80, 77, 1, 0, 0, 0, 80, 78, 1, 0, 0, 0, 80, 79, 1, 0, 
		    0, 0, 81, 17, 1, 0, 0, 0, 82, 83, 5, 16, 0, 0, 83, 19, 1, 0, 0, 0, 
		    84, 85, 5, 17, 0, 0, 85, 21, 1, 0, 0, 0, 86, 87, 5, 25, 0, 0, 87, 
		    23, 1, 0, 0, 0, 88, 89, 5, 25, 0, 0, 89, 90, 5, 26, 0, 0, 90, 91, 
		    5, 25, 0, 0, 91, 25, 1, 0, 0, 0, 6, 35, 43, 45, 52, 70, 80];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize(): void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.13.2', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName(): string
		{
			return "FilterSql.g4";
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function filter(): Context\FilterContext
		{
		    $localContext = new Context\FilterContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_filter);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(26);
		        $this->recursiveExpression(0);
		        $this->setState(27);
		        $this->match(self::EOF);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expression(): Context\ExpressionContext
		{
			return $this->recursiveExpression(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveExpression(int $precedence): Context\ExpressionContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\ExpressionContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 2;
			$this->enterRecursionRule($localContext, 2, self::RULE_expression, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(35);
				$this->errorHandler->sync($this);

				switch ($this->input->LA(1)) {
				    case self::FIELD:
				    	$localContext = new Context\ConditionExpressionContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;

				    	$this->setState(30);
				    	$this->condition();
				    	break;

				    case self::OPEN_PAR:
				    	$localContext = new Context\ParenthesisExpressionContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(31);
				    	$this->match(self::OPEN_PAR);
				    	$this->setState(32);
				    	$this->recursiveExpression(0);
				    	$this->setState(33);
				    	$this->match(self::CLOSE_PAR);
				    	break;

				default:
					throw new NoViableAltException($this);
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(45);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 2, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(43);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 1, $this->ctx)) {
							case 1:
							    $localContext = new Context\AndExpressionContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(37);

							    if (!($this->precpred($this->ctx, 2))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
							    }
							    $this->setState(38);
							    $this->match(self::AND);
							    $this->setState(39);
							    $this->recursiveExpression(3);
							break;

							case 2:
							    $localContext = new Context\OrExpressionContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(40);

							    if (!($this->precpred($this->ctx, 1))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 1)");
							    }
							    $this->setState(41);
							    $this->match(self::OR);
							    $this->setState(42);
							    $this->recursiveExpression(2);
							break;
						} 
					}

					$this->setState(47);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 2, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function condition(): Context\ConditionContext
		{
		    $localContext = new Context\ConditionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_condition);

		    try {
		        $this->setState(52);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 3, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(48);
		        	    $this->simpleCompare();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(49);
		        	    $this->columnCompare();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(50);
		        	    $this->emptyCompare();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(51);
		        	    $this->filledCompare();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function simpleCompare(): Context\SimpleCompareContext
		{
		    $localContext = new Context\SimpleCompareContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_simpleCompare);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(54);
		        $this->match(self::FIELD);
		        $this->setState(55);
		        $this->operator();
		        $this->setState(56);
		        $this->value();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function columnCompare(): Context\ColumnCompareContext
		{
		    $localContext = new Context\ColumnCompareContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_columnCompare);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(58);
		        $this->match(self::FIELD);
		        $this->setState(59);
		        $this->operator();
		        $this->setState(60);
		        $this->match(self::FIELD);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function emptyCompare(): Context\EmptyCompareContext
		{
		    $localContext = new Context\EmptyCompareContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_emptyCompare);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(62);
		        $this->match(self::FIELD);
		        $this->setState(63);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::EQ || $_la === self::IS)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		        $this->setState(64);
		        $this->match(self::NULL);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function filledCompare(): Context\FilledCompareContext
		{
		    $localContext = new Context\FilledCompareContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_filledCompare);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(66);
		        $this->match(self::FIELD);
		        $this->setState(70);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::NEQ:
		            	$this->setState(67);
		            	$this->match(self::NEQ);
		            	break;

		            case self::IS:
		            	$this->setState(68);
		            	$this->match(self::IS);
		            	$this->setState(69);
		            	$this->match(self::NOT);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		        $this->setState(72);
		        $this->match(self::NULL);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function operator(): Context\OperatorContext
		{
		    $localContext = new Context\OperatorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_operator);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(74);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 8190) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function value(): Context\ValueContext
		{
		    $localContext = new Context\ValueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_value);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(80);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 5, $this->ctx)) {
		        	case 1:
		        	    $this->setState(76);
		        	    $this->bool();
		        	break;

		        	case 2:
		        	    $this->setState(77);
		        	    $this->string();
		        	break;

		        	case 3:
		        	    $this->setState(78);
		        	    $this->integer();
		        	break;

		        	case 4:
		        	    $this->setState(79);
		        	    $this->decimal();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function bool(): Context\BoolContext
		{
		    $localContext = new Context\BoolContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_bool);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(82);
		        $this->match(self::BOOL);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function string(): Context\StringContext
		{
		    $localContext = new Context\StringContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_string);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(84);
		        $this->match(self::STRING);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function integer(): Context\IntegerContext
		{
		    $localContext = new Context\IntegerContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_integer);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(86);
		        $this->match(self::INT);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function decimal(): Context\DecimalContext
		{
		    $localContext = new Context\DecimalContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_decimal);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(88);
		        $this->match(self::INT);
		        $this->setState(89);
		        $this->match(self::DOT);
		        $this->setState(90);
		        $this->match(self::INT);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex): bool
		{
			switch ($ruleIndex) {
					case 1:
						return $this->sempredExpression($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredExpression(?Context\ExpressionContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 2);

			    case 1:
			        return $this->precpred($this->ctx, 1);
			}

			return true;
		}
	}
}

namespace Performing\FilterSql\Parser\Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use Performing\FilterSql\Parser\FilterSqlParser;
	use Performing\FilterSql\Parser\FilterSqlVisitor;
	use Performing\FilterSql\Parser\FilterSqlListener;

	class FilterContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return FilterSqlParser::RULE_filter;
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function EOF(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::EOF, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->enterFilter($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->exitFilter($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof FilterSqlVisitor) {
			    return $visitor->visitFilter($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return FilterSqlParser::RULE_expression;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class OrExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function OR(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::OR, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->enterOrExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->exitOrExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof FilterSqlVisitor) {
			    return $visitor->visitOrExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ConditionExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function condition(): ?ConditionContext
	    {
	    	return $this->getTypedRuleContext(ConditionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->enterConditionExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->exitConditionExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof FilterSqlVisitor) {
			    return $visitor->visitConditionExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class AndExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function AND(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::AND, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->enterAndExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->exitAndExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof FilterSqlVisitor) {
			    return $visitor->visitAndExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ParenthesisExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function OPEN_PAR(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::OPEN_PAR, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function CLOSE_PAR(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::CLOSE_PAR, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->enterParenthesisExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->exitParenthesisExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof FilterSqlVisitor) {
			    return $visitor->visitParenthesisExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ConditionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return FilterSqlParser::RULE_condition;
	    }

	    public function simpleCompare(): ?SimpleCompareContext
	    {
	    	return $this->getTypedRuleContext(SimpleCompareContext::class, 0);
	    }

	    public function columnCompare(): ?ColumnCompareContext
	    {
	    	return $this->getTypedRuleContext(ColumnCompareContext::class, 0);
	    }

	    public function emptyCompare(): ?EmptyCompareContext
	    {
	    	return $this->getTypedRuleContext(EmptyCompareContext::class, 0);
	    }

	    public function filledCompare(): ?FilledCompareContext
	    {
	    	return $this->getTypedRuleContext(FilledCompareContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->enterCondition($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->exitCondition($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof FilterSqlVisitor) {
			    return $visitor->visitCondition($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SimpleCompareContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return FilterSqlParser::RULE_simpleCompare;
	    }

	    public function FIELD(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::FIELD, 0);
	    }

	    public function operator(): ?OperatorContext
	    {
	    	return $this->getTypedRuleContext(OperatorContext::class, 0);
	    }

	    public function value(): ?ValueContext
	    {
	    	return $this->getTypedRuleContext(ValueContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->enterSimpleCompare($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->exitSimpleCompare($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof FilterSqlVisitor) {
			    return $visitor->visitSimpleCompare($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ColumnCompareContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return FilterSqlParser::RULE_columnCompare;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function FIELD(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(FilterSqlParser::FIELD);
	    	}

	        return $this->getToken(FilterSqlParser::FIELD, $index);
	    }

	    public function operator(): ?OperatorContext
	    {
	    	return $this->getTypedRuleContext(OperatorContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->enterColumnCompare($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->exitColumnCompare($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof FilterSqlVisitor) {
			    return $visitor->visitColumnCompare($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class EmptyCompareContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return FilterSqlParser::RULE_emptyCompare;
	    }

	    public function FIELD(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::FIELD, 0);
	    }

	    public function NULL(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::NULL, 0);
	    }

	    public function EQ(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::EQ, 0);
	    }

	    public function IS(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::IS, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->enterEmptyCompare($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->exitEmptyCompare($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof FilterSqlVisitor) {
			    return $visitor->visitEmptyCompare($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FilledCompareContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return FilterSqlParser::RULE_filledCompare;
	    }

	    public function FIELD(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::FIELD, 0);
	    }

	    public function NULL(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::NULL, 0);
	    }

	    public function NEQ(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::NEQ, 0);
	    }

	    public function IS(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::IS, 0);
	    }

	    public function NOT(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::NOT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->enterFilledCompare($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->exitFilledCompare($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof FilterSqlVisitor) {
			    return $visitor->visitFilledCompare($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class OperatorContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return FilterSqlParser::RULE_operator;
	    }

	    public function EQ(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::EQ, 0);
	    }

	    public function GT(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::GT, 0);
	    }

	    public function GTE(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::GTE, 0);
	    }

	    public function LT(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::LT, 0);
	    }

	    public function LTE(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::LTE, 0);
	    }

	    public function NEQ(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::NEQ, 0);
	    }

	    public function NOTLIKE(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::NOTLIKE, 0);
	    }

	    public function LIKE(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::LIKE, 0);
	    }

	    public function NOTCONTAINS(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::NOTCONTAINS, 0);
	    }

	    public function CONTAINS(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::CONTAINS, 0);
	    }

	    public function STARTSWITH(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::STARTSWITH, 0);
	    }

	    public function ENDSWITH(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::ENDSWITH, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->enterOperator($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->exitOperator($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof FilterSqlVisitor) {
			    return $visitor->visitOperator($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ValueContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return FilterSqlParser::RULE_value;
	    }

	    public function bool(): ?BoolContext
	    {
	    	return $this->getTypedRuleContext(BoolContext::class, 0);
	    }

	    public function string(): ?StringContext
	    {
	    	return $this->getTypedRuleContext(StringContext::class, 0);
	    }

	    public function integer(): ?IntegerContext
	    {
	    	return $this->getTypedRuleContext(IntegerContext::class, 0);
	    }

	    public function decimal(): ?DecimalContext
	    {
	    	return $this->getTypedRuleContext(DecimalContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->enterValue($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->exitValue($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof FilterSqlVisitor) {
			    return $visitor->visitValue($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BoolContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return FilterSqlParser::RULE_bool;
	    }

	    public function BOOL(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::BOOL, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->enterBool($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->exitBool($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof FilterSqlVisitor) {
			    return $visitor->visitBool($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class StringContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return FilterSqlParser::RULE_string;
	    }

	    public function STRING(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::STRING, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->enterString($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->exitString($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof FilterSqlVisitor) {
			    return $visitor->visitString($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IntegerContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return FilterSqlParser::RULE_integer;
	    }

	    public function INT(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::INT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->enterInteger($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->exitInteger($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof FilterSqlVisitor) {
			    return $visitor->visitInteger($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DecimalContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return FilterSqlParser::RULE_decimal;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function INT(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(FilterSqlParser::INT);
	    	}

	        return $this->getToken(FilterSqlParser::INT, $index);
	    }

	    public function DOT(): ?TerminalNode
	    {
	        return $this->getToken(FilterSqlParser::DOT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->enterDecimal($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FilterSqlListener) {
			    $listener->exitDecimal($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof FilterSqlVisitor) {
			    return $visitor->visitDecimal($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}