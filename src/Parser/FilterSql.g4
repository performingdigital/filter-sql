grammar FilterSql;

filter: expression EOF;

expression:
	condition						# conditionExpression
	| OPEN_PAR expression CLOSE_PAR	# parenthesisExpression
	| expression AND expression		# andExpression
	| expression OR expression		# orExpression;

condition:
	simpleCompare	
	| columnCompare	
	| emptyCompare
	| filledCompare;

simpleCompare: FIELD operator value;
columnCompare: FIELD operator FIELD;
emptyCompare: FIELD (EQ | IS) NULL;
filledCompare: FIELD (NEQ | IS NOT) NULL;

operator: EQ | GT | GTE | LT | LTE | NEQ | NOTLIKE | LIKE | NOTCONTAINS | CONTAINS | STARTSWITH | ENDSWITH;
value: (bool | string | integer | decimal);
bool: BOOL;
string: STRING;
integer: INT;
decimal: INT DOT INT;

/*
 * Lexer Rules
 */

EQ: '=';
GT: '>';
GTE: '>=';
LT: '<';
LTE: '<=';
NEQ: ('<>' | '!=');

NOTLIKE: NOT ' '* LIKE;
LIKE: ('like' | 'LIKE');
NOTCONTAINS: NOT ' '* CONTAINS; 
CONTAINS: ('contains' | 'CONTAINS');
STARTSWITH: STARTS ' '* WITH;
ENDSWITH: ENDS ' '* WITH;

STARTS: ('starts' | 'STARTS');
ENDS: ('ends' | 'ENDS');
WITH: ('with' | 'WITH');

BOOL: ('true' | 'false');
STRING: '\'' ( ~'\'' | '\'\'')+ '\'';

AND: ('and' | 'AND');
OR: ('or' | 'OR');

IS: ('is' | 'IS');
NULL: ('null' | 'NULL');
NOT: ('not' | 'NOT');

OPEN_PAR: '(';
CLOSE_PAR: ')';

INT: (DIGIT)+;

DOT: '.';

FIELD: LOWERCASE (( LOWERCASE | '_' | DOT)* LOWERCASE)?;

fragment LOWERCASE: [a-z];
fragment UPPERCASE: [A-Z];
fragment DIGIT: [0-9];

WS: [ \t\r\n]+ -> skip;