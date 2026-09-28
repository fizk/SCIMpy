<?php

/*
 * Generated from ./lib/Filter/Grammar/ScimFilter.g4 by ANTLR 4.13.2
 */

namespace Scimpy\Filter\Syntax {
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

	final class ScimFilterParser extends Parser
	{
		public const EQ = 1, NE = 2, CO = 3, SW = 4, EW = 5, GT = 6, LT = 7, GE = 8, 
               LE = 9, AND = 10, OR = 11, NOT = 12, PRESENT = 13, TRUE = 14, 
               FALSE = 15, NULL = 16, LPAREN = 17, RPAREN = 18, LBRACK = 19, 
               RBRACK = 20, DOT = 21, COLON = 22, URN = 23, ATTRNAME = 24, 
               STRING = 25, NUMBER = 26, BOOLEAN = 27, WS = 28;

		public const RULE_filter = 0, RULE_logExpr = 1, RULE_attrExp = 2, RULE_valuePath = 3, 
               RULE_valFilter = 4, RULE_attrPath = 5, RULE_compValue = 6, 
               RULE_compareOp = 7;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'filter', 'logExpr', 'attrExp', 'valuePath', 'valFilter', 'attrPath', 
			'compValue', 'compareOp'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, "'('", "')'", "'['", "']'", "'.'", 
		    "':'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, "EQ", "NE", "CO", "SW", "EW", "GT", "LT", "GE", "LE", "AND", 
		    "OR", "NOT", "PRESENT", "TRUE", "FALSE", "NULL", "LPAREN", "RPAREN", 
		    "LBRACK", "RBRACK", "DOT", "COLON", "URN", "ATTRNAME", "STRING", "NUMBER", 
		    "BOOLEAN", "WS"
		];

		private const SERIALIZED_ATN =
			[4, 1, 28, 89, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 1, 0, 1, 0, 1, 0, 1, 1, 
		    1, 1, 1, 1, 1, 1, 3, 1, 24, 8, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 1, 30, 
		    8, 1, 1, 1, 1, 1, 1, 1, 5, 1, 35, 8, 1, 10, 1, 12, 1, 38, 9, 1, 1, 
		    2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 3, 2, 47, 8, 2, 1, 3, 1, 3, 
		    1, 3, 1, 3, 1, 3, 1, 4, 1, 4, 1, 4, 3, 4, 57, 8, 4, 1, 4, 1, 4, 1, 
		    4, 1, 4, 3, 4, 63, 8, 4, 1, 4, 1, 4, 1, 4, 5, 4, 68, 8, 4, 10, 4, 
		    12, 4, 71, 9, 4, 1, 5, 1, 5, 3, 5, 75, 8, 5, 1, 5, 1, 5, 1, 5, 5, 
		    5, 80, 8, 5, 10, 5, 12, 5, 83, 9, 5, 1, 6, 1, 6, 1, 7, 1, 7, 1, 7, 
		    0, 2, 2, 8, 8, 0, 2, 4, 6, 8, 10, 12, 14, 0, 3, 1, 0, 10, 11, 2, 0, 
		    16, 16, 25, 27, 1, 0, 1, 9, 90, 0, 16, 1, 0, 0, 0, 2, 29, 1, 0, 0, 
		    0, 4, 46, 1, 0, 0, 0, 6, 48, 1, 0, 0, 0, 8, 62, 1, 0, 0, 0, 10, 74, 
		    1, 0, 0, 0, 12, 84, 1, 0, 0, 0, 14, 86, 1, 0, 0, 0, 16, 17, 3, 2, 
		    1, 0, 17, 18, 5, 0, 0, 1, 18, 1, 1, 0, 0, 0, 19, 20, 6, 1, -1, 0, 
		    20, 30, 3, 4, 2, 0, 21, 30, 3, 6, 3, 0, 22, 24, 5, 12, 0, 0, 23, 22, 
		    1, 0, 0, 0, 23, 24, 1, 0, 0, 0, 24, 25, 1, 0, 0, 0, 25, 26, 5, 17, 
		    0, 0, 26, 27, 3, 2, 1, 0, 27, 28, 5, 18, 0, 0, 28, 30, 1, 0, 0, 0, 
		    29, 19, 1, 0, 0, 0, 29, 21, 1, 0, 0, 0, 29, 23, 1, 0, 0, 0, 30, 36, 
		    1, 0, 0, 0, 31, 32, 10, 1, 0, 0, 32, 33, 7, 0, 0, 0, 33, 35, 3, 2, 
		    1, 2, 34, 31, 1, 0, 0, 0, 35, 38, 1, 0, 0, 0, 36, 34, 1, 0, 0, 0, 
		    36, 37, 1, 0, 0, 0, 37, 3, 1, 0, 0, 0, 38, 36, 1, 0, 0, 0, 39, 40, 
		    3, 10, 5, 0, 40, 41, 5, 13, 0, 0, 41, 47, 1, 0, 0, 0, 42, 43, 3, 10, 
		    5, 0, 43, 44, 3, 14, 7, 0, 44, 45, 3, 12, 6, 0, 45, 47, 1, 0, 0, 0, 
		    46, 39, 1, 0, 0, 0, 46, 42, 1, 0, 0, 0, 47, 5, 1, 0, 0, 0, 48, 49, 
		    3, 10, 5, 0, 49, 50, 5, 19, 0, 0, 50, 51, 3, 8, 4, 0, 51, 52, 5, 20, 
		    0, 0, 52, 7, 1, 0, 0, 0, 53, 54, 6, 4, -1, 0, 54, 63, 3, 4, 2, 0, 
		    55, 57, 5, 12, 0, 0, 56, 55, 1, 0, 0, 0, 56, 57, 1, 0, 0, 0, 57, 58, 
		    1, 0, 0, 0, 58, 59, 5, 17, 0, 0, 59, 60, 3, 8, 4, 0, 60, 61, 5, 18, 
		    0, 0, 61, 63, 1, 0, 0, 0, 62, 53, 1, 0, 0, 0, 62, 56, 1, 0, 0, 0, 
		    63, 69, 1, 0, 0, 0, 64, 65, 10, 1, 0, 0, 65, 66, 7, 0, 0, 0, 66, 68, 
		    3, 8, 4, 2, 67, 64, 1, 0, 0, 0, 68, 71, 1, 0, 0, 0, 69, 67, 1, 0, 
		    0, 0, 69, 70, 1, 0, 0, 0, 70, 9, 1, 0, 0, 0, 71, 69, 1, 0, 0, 0, 72, 
		    73, 5, 23, 0, 0, 73, 75, 5, 22, 0, 0, 74, 72, 1, 0, 0, 0, 74, 75, 
		    1, 0, 0, 0, 75, 76, 1, 0, 0, 0, 76, 81, 5, 24, 0, 0, 77, 78, 5, 21, 
		    0, 0, 78, 80, 5, 24, 0, 0, 79, 77, 1, 0, 0, 0, 80, 83, 1, 0, 0, 0, 
		    81, 79, 1, 0, 0, 0, 81, 82, 1, 0, 0, 0, 82, 11, 1, 0, 0, 0, 83, 81, 
		    1, 0, 0, 0, 84, 85, 7, 1, 0, 0, 85, 13, 1, 0, 0, 0, 86, 87, 7, 2, 
		    0, 0, 87, 15, 1, 0, 0, 0, 9, 23, 29, 36, 46, 56, 62, 69, 74, 81];
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
			return "ScimFilter.g4";
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
		        $this->setState(16);
		        $this->recursiveLogExpr(0);
		        $this->setState(17);
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
		public function logExpr(): Context\LogExprContext
		{
			return $this->recursiveLogExpr(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveLogExpr(int $precedence): Context\LogExprContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\LogExprContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 2;
			$this->enterRecursionRule($localContext, 2, self::RULE_logExpr, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(29);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 1, $this->ctx)) {
					case 1:
					    $this->setState(20);
					    $this->attrExp();
					break;

					case 2:
					    $this->setState(21);
					    $this->valuePath();
					break;

					case 3:
					    $this->setState(23);
					    $this->errorHandler->sync($this);
					    $_la = $this->input->LA(1);

					    if ($_la === self::NOT) {
					    	$this->setState(22);
					    	$this->match(self::NOT);
					    }
					    $this->setState(25);
					    $this->match(self::LPAREN);
					    $this->setState(26);
					    $this->recursiveLogExpr(0);
					    $this->setState(27);
					    $this->match(self::RPAREN);
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(36);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 2, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\LogExprContext($parentContext, $parentState);
						$localContext->left = $previousContext;

						$this->pushNewRecursionContext($localContext, $startState, self::RULE_logExpr);
						$this->setState(31);

						if (!($this->precpred($this->ctx, 1))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 1)");
						}
						$this->setState(32);

						$_la = $this->input->LA(1);

						if (!($_la === self::AND || $_la === self::OR)) {
						$this->errorHandler->recoverInline($this);
						} else {
							if ($this->input->LA(1) === Token::EOF) {
							    $this->matchedEOF = true;
						    }

							$this->errorHandler->reportMatch($this);
							$this->consume();
						}
						$this->setState(33);
						$localContext->right = $this->recursiveLogExpr(2); 
					}

					$this->setState(38);
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
		public function attrExp(): Context\AttrExpContext
		{
		    $localContext = new Context\AttrExpContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_attrExp);

		    try {
		        $this->setState(46);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 3, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(39);
		        	    $this->attrPath();
		        	    $this->setState(40);
		        	    $this->match(self::PRESENT);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(42);
		        	    $this->attrPath();
		        	    $this->setState(43);
		        	    $this->compareOp();
		        	    $this->setState(44);
		        	    $this->compValue();
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
		public function valuePath(): Context\ValuePathContext
		{
		    $localContext = new Context\ValuePathContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_valuePath);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(48);
		        $this->attrPath();
		        $this->setState(49);
		        $this->match(self::LBRACK);
		        $this->setState(50);
		        $this->recursiveValFilter(0);
		        $this->setState(51);
		        $this->match(self::RBRACK);
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
		public function valFilter(): Context\ValFilterContext
		{
			return $this->recursiveValFilter(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveValFilter(int $precedence): Context\ValFilterContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\ValFilterContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 8;
			$this->enterRecursionRule($localContext, 8, self::RULE_valFilter, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(62);
				$this->errorHandler->sync($this);

				switch ($this->input->LA(1)) {
				    case self::URN:
				    case self::ATTRNAME:
				    	$this->setState(54);
				    	$this->attrExp();
				    	break;

				    case self::NOT:
				    case self::LPAREN:
				    	$this->setState(56);
				    	$this->errorHandler->sync($this);
				    	$_la = $this->input->LA(1);

				    	if ($_la === self::NOT) {
				    		$this->setState(55);
				    		$this->match(self::NOT);
				    	}
				    	$this->setState(58);
				    	$this->match(self::LPAREN);
				    	$this->setState(59);
				    	$this->recursiveValFilter(0);
				    	$this->setState(60);
				    	$this->match(self::RPAREN);
				    	break;

				default:
					throw new NoViableAltException($this);
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(69);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 6, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\ValFilterContext($parentContext, $parentState);
						$localContext->left = $previousContext;

						$this->pushNewRecursionContext($localContext, $startState, self::RULE_valFilter);
						$this->setState(64);

						if (!($this->precpred($this->ctx, 1))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 1)");
						}
						$this->setState(65);

						$_la = $this->input->LA(1);

						if (!($_la === self::AND || $_la === self::OR)) {
						$this->errorHandler->recoverInline($this);
						} else {
							if ($this->input->LA(1) === Token::EOF) {
							    $this->matchedEOF = true;
						    }

							$this->errorHandler->reportMatch($this);
							$this->consume();
						}
						$this->setState(66);
						$localContext->right = $this->recursiveValFilter(2); 
					}

					$this->setState(71);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 6, $this->ctx);
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
		public function attrPath(): Context\AttrPathContext
		{
		    $localContext = new Context\AttrPathContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_attrPath);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(74);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::URN) {
		        	$this->setState(72);
		        	$this->match(self::URN);
		        	$this->setState(73);
		        	$this->match(self::COLON);
		        }
		        $this->setState(76);
		        $this->match(self::ATTRNAME);
		        $this->setState(81);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::DOT) {
		        	$this->setState(77);
		        	$this->match(self::DOT);
		        	$this->setState(78);
		        	$this->match(self::ATTRNAME);
		        	$this->setState(83);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
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
		public function compValue(): Context\CompValueContext
		{
		    $localContext = new Context\CompValueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_compValue);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(84);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 234946560) !== 0))) {
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
		public function compareOp(): Context\CompareOpContext
		{
		    $localContext = new Context\CompareOpContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_compareOp);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(86);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1022) !== 0))) {
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

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex): bool
		{
			switch ($ruleIndex) {
					case 1:
						return $this->sempredLogExpr($localContext, $predicateIndex);

					case 4:
						return $this->sempredValFilter($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredLogExpr(?Context\LogExprContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 1);
			}

			return true;
		}

		private function sempredValFilter(?Context\ValFilterContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 1:
			        return $this->precpred($this->ctx, 1);
			}

			return true;
		}
	}
}

namespace Scimpy\Filter\Syntax\Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use Scimpy\Filter\Syntax\ScimFilterParser;
	use Scimpy\Filter\Syntax\ScimFilterVisitor;

	class FilterContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScimFilterParser::RULE_filter;
	    }

	    public function logExpr(): ?LogExprContext
	    {
	    	return $this->getTypedRuleContext(LogExprContext::class, 0);
	    }

	    public function EOF(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::EOF, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScimFilterVisitor) {
			    return $visitor->visitFilter($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LogExprContext extends ParserRuleContext
	{
		/**
		 * @var LogExprContext|null $left
		 */
		public $left;

		/**
		 * @var LogExprContext|null $right
		 */
		public $right;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScimFilterParser::RULE_logExpr;
	    }

	    public function attrExp(): ?AttrExpContext
	    {
	    	return $this->getTypedRuleContext(AttrExpContext::class, 0);
	    }

	    public function valuePath(): ?ValuePathContext
	    {
	    	return $this->getTypedRuleContext(ValuePathContext::class, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::LPAREN, 0);
	    }

	    /**
	     * @return array<LogExprContext>|LogExprContext|null
	     */
	    public function logExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(LogExprContext::class);
	    	}

	        return $this->getTypedRuleContext(LogExprContext::class, $index);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::RPAREN, 0);
	    }

	    public function NOT(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::NOT, 0);
	    }

	    public function AND(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::AND, 0);
	    }

	    public function OR(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::OR, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScimFilterVisitor) {
			    return $visitor->visitLogExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AttrExpContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScimFilterParser::RULE_attrExp;
	    }

	    public function attrPath(): ?AttrPathContext
	    {
	    	return $this->getTypedRuleContext(AttrPathContext::class, 0);
	    }

	    public function PRESENT(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::PRESENT, 0);
	    }

	    public function compareOp(): ?CompareOpContext
	    {
	    	return $this->getTypedRuleContext(CompareOpContext::class, 0);
	    }

	    public function compValue(): ?CompValueContext
	    {
	    	return $this->getTypedRuleContext(CompValueContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScimFilterVisitor) {
			    return $visitor->visitAttrExp($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ValuePathContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScimFilterParser::RULE_valuePath;
	    }

	    public function attrPath(): ?AttrPathContext
	    {
	    	return $this->getTypedRuleContext(AttrPathContext::class, 0);
	    }

	    public function LBRACK(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::LBRACK, 0);
	    }

	    public function valFilter(): ?ValFilterContext
	    {
	    	return $this->getTypedRuleContext(ValFilterContext::class, 0);
	    }

	    public function RBRACK(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::RBRACK, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScimFilterVisitor) {
			    return $visitor->visitValuePath($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ValFilterContext extends ParserRuleContext
	{
		/**
		 * @var ValFilterContext|null $left
		 */
		public $left;

		/**
		 * @var ValFilterContext|null $right
		 */
		public $right;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScimFilterParser::RULE_valFilter;
	    }

	    public function attrExp(): ?AttrExpContext
	    {
	    	return $this->getTypedRuleContext(AttrExpContext::class, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::LPAREN, 0);
	    }

	    /**
	     * @return array<ValFilterContext>|ValFilterContext|null
	     */
	    public function valFilter(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ValFilterContext::class);
	    	}

	        return $this->getTypedRuleContext(ValFilterContext::class, $index);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::RPAREN, 0);
	    }

	    public function NOT(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::NOT, 0);
	    }

	    public function AND(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::AND, 0);
	    }

	    public function OR(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::OR, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScimFilterVisitor) {
			    return $visitor->visitValFilter($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AttrPathContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScimFilterParser::RULE_attrPath;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function ATTRNAME(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(ScimFilterParser::ATTRNAME);
	    	}

	        return $this->getToken(ScimFilterParser::ATTRNAME, $index);
	    }

	    public function URN(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::URN, 0);
	    }

	    public function COLON(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::COLON, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function DOT(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(ScimFilterParser::DOT);
	    	}

	        return $this->getToken(ScimFilterParser::DOT, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScimFilterVisitor) {
			    return $visitor->visitAttrPath($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class CompValueContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScimFilterParser::RULE_compValue;
	    }

	    public function STRING(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::STRING, 0);
	    }

	    public function NUMBER(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::NUMBER, 0);
	    }

	    public function BOOLEAN(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::BOOLEAN, 0);
	    }

	    public function NULL(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::NULL, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScimFilterVisitor) {
			    return $visitor->visitCompValue($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class CompareOpContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScimFilterParser::RULE_compareOp;
	    }

	    public function EQ(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::EQ, 0);
	    }

	    public function NE(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::NE, 0);
	    }

	    public function CO(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::CO, 0);
	    }

	    public function SW(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::SW, 0);
	    }

	    public function EW(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::EW, 0);
	    }

	    public function GT(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::GT, 0);
	    }

	    public function LT(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::LT, 0);
	    }

	    public function GE(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::GE, 0);
	    }

	    public function LE(): ?TerminalNode
	    {
	        return $this->getToken(ScimFilterParser::LE, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScimFilterVisitor) {
			    return $visitor->visitCompareOp($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}