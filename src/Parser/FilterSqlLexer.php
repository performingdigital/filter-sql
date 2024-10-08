<?php

/*
 * Generated from FilterSql.g4 by ANTLR 4.13.2
 */

namespace Performing\FilterSql\Parser {
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\LexerATNSimulator;
	use Antlr\Antlr4\Runtime\Lexer;
	use Antlr\Antlr4\Runtime\CharStream;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\VocabularyImpl;

	final class FilterSqlLexer extends Lexer
	{
		public const EQ = 1, GT = 2, GTE = 3, LT = 4, LTE = 5, NEQ = 6, NOTLIKE = 7, 
               LIKE = 8, NOTCONTAINS = 9, CONTAINS = 10, STARTSWITH = 11, 
               ENDSWITH = 12, STARTS = 13, ENDS = 14, WITH = 15, BOOL = 16, 
               STRING = 17, AND = 18, OR = 19, IS = 20, NULL = 21, NOT = 22, 
               OPEN_PAR = 23, CLOSE_PAR = 24, INT = 25, DOT = 26, FIELD = 27, 
               WS = 28;

		/**
		 * @var array<string>
		 */
		public const CHANNEL_NAMES = [
			'DEFAULT_TOKEN_CHANNEL', 'HIDDEN'
		];

		/**
		 * @var array<string>
		 */
		public const MODE_NAMES = [
			'DEFAULT_MODE'
		];

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'EQ', 'GT', 'GTE', 'LT', 'LTE', 'NEQ', 'NOTLIKE', 'LIKE', 'NOTCONTAINS', 
			'CONTAINS', 'STARTSWITH', 'ENDSWITH', 'STARTS', 'ENDS', 'WITH', 'BOOL', 
			'STRING', 'AND', 'OR', 'IS', 'NULL', 'NOT', 'OPEN_PAR', 'CLOSE_PAR', 
			'INT', 'DOT', 'FIELD', 'LOWERCASE', 'UPPERCASE', 'DIGIT', 'WS'
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
			[4, 0, 28, 274, 6, -1, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 
		    2, 4, 7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 
		    7, 9, 2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 
		    7, 14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 
		    19, 7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 
		    2, 24, 7, 24, 2, 25, 7, 25, 2, 26, 7, 26, 2, 27, 7, 27, 2, 28, 7, 
		    28, 2, 29, 7, 29, 2, 30, 7, 30, 1, 0, 1, 0, 1, 1, 1, 1, 1, 2, 1, 2, 
		    1, 2, 1, 3, 1, 3, 1, 4, 1, 4, 1, 4, 1, 5, 1, 5, 1, 5, 1, 5, 3, 5, 
		    80, 8, 5, 1, 6, 1, 6, 5, 6, 84, 8, 6, 10, 6, 12, 6, 87, 9, 6, 1, 6, 
		    1, 6, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 3, 7, 99, 8, 
		    7, 1, 8, 1, 8, 5, 8, 103, 8, 8, 10, 8, 12, 8, 106, 9, 8, 1, 8, 1, 
		    8, 1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 1, 
		    9, 1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 3, 9, 126, 8, 9, 1, 10, 1, 10, 5, 
		    10, 130, 8, 10, 10, 10, 12, 10, 133, 9, 10, 1, 10, 1, 10, 1, 11, 1, 
		    11, 5, 11, 139, 8, 11, 10, 11, 12, 11, 142, 9, 11, 1, 11, 1, 11, 1, 
		    12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 
		    1, 12, 1, 12, 3, 12, 158, 8, 12, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 
		    1, 13, 1, 13, 1, 13, 3, 13, 168, 8, 13, 1, 14, 1, 14, 1, 14, 1, 14, 
		    1, 14, 1, 14, 1, 14, 1, 14, 3, 14, 178, 8, 14, 1, 15, 1, 15, 1, 15, 
		    1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 3, 15, 189, 8, 15, 1, 16, 
		    1, 16, 1, 16, 1, 16, 4, 16, 195, 8, 16, 11, 16, 12, 16, 196, 1, 16, 
		    1, 16, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 3, 17, 207, 8, 17, 
		    1, 18, 1, 18, 1, 18, 1, 18, 3, 18, 213, 8, 18, 1, 19, 1, 19, 1, 19, 
		    1, 19, 3, 19, 219, 8, 19, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 
		    1, 20, 1, 20, 3, 20, 229, 8, 20, 1, 21, 1, 21, 1, 21, 1, 21, 1, 21, 
		    1, 21, 3, 21, 237, 8, 21, 1, 22, 1, 22, 1, 23, 1, 23, 1, 24, 4, 24, 
		    244, 8, 24, 11, 24, 12, 24, 245, 1, 25, 1, 25, 1, 26, 1, 26, 1, 26, 
		    1, 26, 5, 26, 254, 8, 26, 10, 26, 12, 26, 257, 9, 26, 1, 26, 3, 26, 
		    260, 8, 26, 1, 27, 1, 27, 1, 28, 1, 28, 1, 29, 1, 29, 1, 30, 4, 30, 
		    269, 8, 30, 11, 30, 12, 30, 270, 1, 30, 1, 30, 0, 0, 31, 1, 1, 3, 
		    2, 5, 3, 7, 4, 9, 5, 11, 6, 13, 7, 15, 8, 17, 9, 19, 10, 21, 11, 23, 
		    12, 25, 13, 27, 14, 29, 15, 31, 16, 33, 17, 35, 18, 37, 19, 39, 20, 
		    41, 21, 43, 22, 45, 23, 47, 24, 49, 25, 51, 26, 53, 27, 55, 0, 57, 
		    0, 59, 0, 61, 28, 1, 0, 5, 1, 0, 39, 39, 1, 0, 97, 122, 1, 0, 65, 
		    90, 1, 0, 48, 57, 3, 0, 9, 10, 13, 13, 32, 32, 294, 0, 1, 1, 0, 0, 
		    0, 0, 3, 1, 0, 0, 0, 0, 5, 1, 0, 0, 0, 0, 7, 1, 0, 0, 0, 0, 9, 1, 
		    0, 0, 0, 0, 11, 1, 0, 0, 0, 0, 13, 1, 0, 0, 0, 0, 15, 1, 0, 0, 0, 
		    0, 17, 1, 0, 0, 0, 0, 19, 1, 0, 0, 0, 0, 21, 1, 0, 0, 0, 0, 23, 1, 
		    0, 0, 0, 0, 25, 1, 0, 0, 0, 0, 27, 1, 0, 0, 0, 0, 29, 1, 0, 0, 0, 
		    0, 31, 1, 0, 0, 0, 0, 33, 1, 0, 0, 0, 0, 35, 1, 0, 0, 0, 0, 37, 1, 
		    0, 0, 0, 0, 39, 1, 0, 0, 0, 0, 41, 1, 0, 0, 0, 0, 43, 1, 0, 0, 0, 
		    0, 45, 1, 0, 0, 0, 0, 47, 1, 0, 0, 0, 0, 49, 1, 0, 0, 0, 0, 51, 1, 
		    0, 0, 0, 0, 53, 1, 0, 0, 0, 0, 61, 1, 0, 0, 0, 1, 63, 1, 0, 0, 0, 
		    3, 65, 1, 0, 0, 0, 5, 67, 1, 0, 0, 0, 7, 70, 1, 0, 0, 0, 9, 72, 1, 
		    0, 0, 0, 11, 79, 1, 0, 0, 0, 13, 81, 1, 0, 0, 0, 15, 98, 1, 0, 0, 
		    0, 17, 100, 1, 0, 0, 0, 19, 125, 1, 0, 0, 0, 21, 127, 1, 0, 0, 0, 
		    23, 136, 1, 0, 0, 0, 25, 157, 1, 0, 0, 0, 27, 167, 1, 0, 0, 0, 29, 
		    177, 1, 0, 0, 0, 31, 188, 1, 0, 0, 0, 33, 190, 1, 0, 0, 0, 35, 206, 
		    1, 0, 0, 0, 37, 212, 1, 0, 0, 0, 39, 218, 1, 0, 0, 0, 41, 228, 1, 
		    0, 0, 0, 43, 236, 1, 0, 0, 0, 45, 238, 1, 0, 0, 0, 47, 240, 1, 0, 
		    0, 0, 49, 243, 1, 0, 0, 0, 51, 247, 1, 0, 0, 0, 53, 249, 1, 0, 0, 
		    0, 55, 261, 1, 0, 0, 0, 57, 263, 1, 0, 0, 0, 59, 265, 1, 0, 0, 0, 
		    61, 268, 1, 0, 0, 0, 63, 64, 5, 61, 0, 0, 64, 2, 1, 0, 0, 0, 65, 66, 
		    5, 62, 0, 0, 66, 4, 1, 0, 0, 0, 67, 68, 5, 62, 0, 0, 68, 69, 5, 61, 
		    0, 0, 69, 6, 1, 0, 0, 0, 70, 71, 5, 60, 0, 0, 71, 8, 1, 0, 0, 0, 72, 
		    73, 5, 60, 0, 0, 73, 74, 5, 61, 0, 0, 74, 10, 1, 0, 0, 0, 75, 76, 
		    5, 60, 0, 0, 76, 80, 5, 62, 0, 0, 77, 78, 5, 33, 0, 0, 78, 80, 5, 
		    61, 0, 0, 79, 75, 1, 0, 0, 0, 79, 77, 1, 0, 0, 0, 80, 12, 1, 0, 0, 
		    0, 81, 85, 3, 43, 21, 0, 82, 84, 5, 32, 0, 0, 83, 82, 1, 0, 0, 0, 
		    84, 87, 1, 0, 0, 0, 85, 83, 1, 0, 0, 0, 85, 86, 1, 0, 0, 0, 86, 88, 
		    1, 0, 0, 0, 87, 85, 1, 0, 0, 0, 88, 89, 3, 15, 7, 0, 89, 14, 1, 0, 
		    0, 0, 90, 91, 5, 108, 0, 0, 91, 92, 5, 105, 0, 0, 92, 93, 5, 107, 
		    0, 0, 93, 99, 5, 101, 0, 0, 94, 95, 5, 76, 0, 0, 95, 96, 5, 73, 0, 
		    0, 96, 97, 5, 75, 0, 0, 97, 99, 5, 69, 0, 0, 98, 90, 1, 0, 0, 0, 98, 
		    94, 1, 0, 0, 0, 99, 16, 1, 0, 0, 0, 100, 104, 3, 43, 21, 0, 101, 103, 
		    5, 32, 0, 0, 102, 101, 1, 0, 0, 0, 103, 106, 1, 0, 0, 0, 104, 102, 
		    1, 0, 0, 0, 104, 105, 1, 0, 0, 0, 105, 107, 1, 0, 0, 0, 106, 104, 
		    1, 0, 0, 0, 107, 108, 3, 19, 9, 0, 108, 18, 1, 0, 0, 0, 109, 110, 
		    5, 99, 0, 0, 110, 111, 5, 111, 0, 0, 111, 112, 5, 110, 0, 0, 112, 
		    113, 5, 116, 0, 0, 113, 114, 5, 97, 0, 0, 114, 115, 5, 105, 0, 0, 
		    115, 116, 5, 110, 0, 0, 116, 126, 5, 115, 0, 0, 117, 118, 5, 67, 0, 
		    0, 118, 119, 5, 79, 0, 0, 119, 120, 5, 78, 0, 0, 120, 121, 5, 84, 
		    0, 0, 121, 122, 5, 65, 0, 0, 122, 123, 5, 73, 0, 0, 123, 124, 5, 78, 
		    0, 0, 124, 126, 5, 83, 0, 0, 125, 109, 1, 0, 0, 0, 125, 117, 1, 0, 
		    0, 0, 126, 20, 1, 0, 0, 0, 127, 131, 3, 25, 12, 0, 128, 130, 5, 32, 
		    0, 0, 129, 128, 1, 0, 0, 0, 130, 133, 1, 0, 0, 0, 131, 129, 1, 0, 
		    0, 0, 131, 132, 1, 0, 0, 0, 132, 134, 1, 0, 0, 0, 133, 131, 1, 0, 
		    0, 0, 134, 135, 3, 29, 14, 0, 135, 22, 1, 0, 0, 0, 136, 140, 3, 27, 
		    13, 0, 137, 139, 5, 32, 0, 0, 138, 137, 1, 0, 0, 0, 139, 142, 1, 0, 
		    0, 0, 140, 138, 1, 0, 0, 0, 140, 141, 1, 0, 0, 0, 141, 143, 1, 0, 
		    0, 0, 142, 140, 1, 0, 0, 0, 143, 144, 3, 29, 14, 0, 144, 24, 1, 0, 
		    0, 0, 145, 146, 5, 115, 0, 0, 146, 147, 5, 116, 0, 0, 147, 148, 5, 
		    97, 0, 0, 148, 149, 5, 114, 0, 0, 149, 150, 5, 116, 0, 0, 150, 158, 
		    5, 115, 0, 0, 151, 152, 5, 83, 0, 0, 152, 153, 5, 84, 0, 0, 153, 154, 
		    5, 65, 0, 0, 154, 155, 5, 82, 0, 0, 155, 156, 5, 84, 0, 0, 156, 158, 
		    5, 83, 0, 0, 157, 145, 1, 0, 0, 0, 157, 151, 1, 0, 0, 0, 158, 26, 
		    1, 0, 0, 0, 159, 160, 5, 101, 0, 0, 160, 161, 5, 110, 0, 0, 161, 162, 
		    5, 100, 0, 0, 162, 168, 5, 115, 0, 0, 163, 164, 5, 69, 0, 0, 164, 
		    165, 5, 78, 0, 0, 165, 166, 5, 68, 0, 0, 166, 168, 5, 83, 0, 0, 167, 
		    159, 1, 0, 0, 0, 167, 163, 1, 0, 0, 0, 168, 28, 1, 0, 0, 0, 169, 170, 
		    5, 119, 0, 0, 170, 171, 5, 105, 0, 0, 171, 172, 5, 116, 0, 0, 172, 
		    178, 5, 104, 0, 0, 173, 174, 5, 87, 0, 0, 174, 175, 5, 73, 0, 0, 175, 
		    176, 5, 84, 0, 0, 176, 178, 5, 72, 0, 0, 177, 169, 1, 0, 0, 0, 177, 
		    173, 1, 0, 0, 0, 178, 30, 1, 0, 0, 0, 179, 180, 5, 116, 0, 0, 180, 
		    181, 5, 114, 0, 0, 181, 182, 5, 117, 0, 0, 182, 189, 5, 101, 0, 0, 
		    183, 184, 5, 102, 0, 0, 184, 185, 5, 97, 0, 0, 185, 186, 5, 108, 0, 
		    0, 186, 187, 5, 115, 0, 0, 187, 189, 5, 101, 0, 0, 188, 179, 1, 0, 
		    0, 0, 188, 183, 1, 0, 0, 0, 189, 32, 1, 0, 0, 0, 190, 194, 5, 39, 
		    0, 0, 191, 195, 8, 0, 0, 0, 192, 193, 5, 39, 0, 0, 193, 195, 5, 39, 
		    0, 0, 194, 191, 1, 0, 0, 0, 194, 192, 1, 0, 0, 0, 195, 196, 1, 0, 
		    0, 0, 196, 194, 1, 0, 0, 0, 196, 197, 1, 0, 0, 0, 197, 198, 1, 0, 
		    0, 0, 198, 199, 5, 39, 0, 0, 199, 34, 1, 0, 0, 0, 200, 201, 5, 97, 
		    0, 0, 201, 202, 5, 110, 0, 0, 202, 207, 5, 100, 0, 0, 203, 204, 5, 
		    65, 0, 0, 204, 205, 5, 78, 0, 0, 205, 207, 5, 68, 0, 0, 206, 200, 
		    1, 0, 0, 0, 206, 203, 1, 0, 0, 0, 207, 36, 1, 0, 0, 0, 208, 209, 5, 
		    111, 0, 0, 209, 213, 5, 114, 0, 0, 210, 211, 5, 79, 0, 0, 211, 213, 
		    5, 82, 0, 0, 212, 208, 1, 0, 0, 0, 212, 210, 1, 0, 0, 0, 213, 38, 
		    1, 0, 0, 0, 214, 215, 5, 105, 0, 0, 215, 219, 5, 115, 0, 0, 216, 217, 
		    5, 73, 0, 0, 217, 219, 5, 83, 0, 0, 218, 214, 1, 0, 0, 0, 218, 216, 
		    1, 0, 0, 0, 219, 40, 1, 0, 0, 0, 220, 221, 5, 110, 0, 0, 221, 222, 
		    5, 117, 0, 0, 222, 223, 5, 108, 0, 0, 223, 229, 5, 108, 0, 0, 224, 
		    225, 5, 78, 0, 0, 225, 226, 5, 85, 0, 0, 226, 227, 5, 76, 0, 0, 227, 
		    229, 5, 76, 0, 0, 228, 220, 1, 0, 0, 0, 228, 224, 1, 0, 0, 0, 229, 
		    42, 1, 0, 0, 0, 230, 231, 5, 110, 0, 0, 231, 232, 5, 111, 0, 0, 232, 
		    237, 5, 116, 0, 0, 233, 234, 5, 78, 0, 0, 234, 235, 5, 79, 0, 0, 235, 
		    237, 5, 84, 0, 0, 236, 230, 1, 0, 0, 0, 236, 233, 1, 0, 0, 0, 237, 
		    44, 1, 0, 0, 0, 238, 239, 5, 40, 0, 0, 239, 46, 1, 0, 0, 0, 240, 241, 
		    5, 41, 0, 0, 241, 48, 1, 0, 0, 0, 242, 244, 3, 59, 29, 0, 243, 242, 
		    1, 0, 0, 0, 244, 245, 1, 0, 0, 0, 245, 243, 1, 0, 0, 0, 245, 246, 
		    1, 0, 0, 0, 246, 50, 1, 0, 0, 0, 247, 248, 5, 46, 0, 0, 248, 52, 1, 
		    0, 0, 0, 249, 259, 3, 55, 27, 0, 250, 254, 3, 55, 27, 0, 251, 254, 
		    5, 95, 0, 0, 252, 254, 3, 51, 25, 0, 253, 250, 1, 0, 0, 0, 253, 251, 
		    1, 0, 0, 0, 253, 252, 1, 0, 0, 0, 254, 257, 1, 0, 0, 0, 255, 253, 
		    1, 0, 0, 0, 255, 256, 1, 0, 0, 0, 256, 258, 1, 0, 0, 0, 257, 255, 
		    1, 0, 0, 0, 258, 260, 3, 55, 27, 0, 259, 255, 1, 0, 0, 0, 259, 260, 
		    1, 0, 0, 0, 260, 54, 1, 0, 0, 0, 261, 262, 7, 1, 0, 0, 262, 56, 1, 
		    0, 0, 0, 263, 264, 7, 2, 0, 0, 264, 58, 1, 0, 0, 0, 265, 266, 7, 3, 
		    0, 0, 266, 60, 1, 0, 0, 0, 267, 269, 7, 4, 0, 0, 268, 267, 1, 0, 0, 
		    0, 269, 270, 1, 0, 0, 0, 270, 268, 1, 0, 0, 0, 270, 271, 1, 0, 0, 
		    0, 271, 272, 1, 0, 0, 0, 272, 273, 6, 30, 0, 0, 273, 62, 1, 0, 0, 
		    0, 24, 0, 79, 85, 98, 104, 125, 131, 140, 157, 167, 177, 188, 194, 
		    196, 206, 212, 218, 228, 236, 245, 253, 255, 259, 270, 1, 6, 0, 0];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;
		public function __construct(CharStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new LexerATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
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

		public static function vocabulary(): Vocabulary
		{
			static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
		}

		public function getGrammarFileName(): string
		{
			return 'FilterSql.g4';
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		/**
		 * @return array<string>
		 */
		public function getChannelNames(): array
		{
			return self::CHANNEL_NAMES;
		}

		/**
		 * @return array<string>
		 */
		public function getModeNames(): array
		{
			return self::MODE_NAMES;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
		{
			return self::vocabulary();
		}
	}
}