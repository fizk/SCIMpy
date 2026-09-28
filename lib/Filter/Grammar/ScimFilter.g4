grammar ScimFilter;

// Parser Rules
filter
    : logExpr EOF
    ;

logExpr
    : attrExp
    | valuePath
    | NOT? LPAREN logExpr RPAREN

    | left=logExpr (AND | OR) right=logExpr
    ;

attrExp
    : attrPath PRESENT
    | attrPath compareOp compValue
    ;

valuePath
    : attrPath LBRACK valFilter RBRACK
    ;

valFilter
    : attrExp
    | NOT? LPAREN valFilter RPAREN

    | left=valFilter (AND | OR) right=valFilter
    ;

attrPath
    : (URN COLON)? ATTRNAME (DOT ATTRNAME)*
    ;

compValue
    : STRING
    | NUMBER
    | BOOLEAN
    | NULL
    ;

compareOp
    : EQ | NE | CO | SW | EW | GT | LT | GE | LE
    ;

// Lexer Rules
EQ  : [eE][qQ];
NE  : [nN][eE];
CO  : [cC][oO];
SW  : [sS][wW];
EW  : [eW][wW];
GT  : [gG][tT];
LT  : [lL][tT];
GE  : [gG][eE];
LE  : [lL][eE];

AND : [aA][nN][dD];
OR  : [oO][rR];
NOT : [nN][oO][tT];

PRESENT : [pP][rR];

TRUE    : [tT][rR][uU][eE];
FALSE   : [fF][aA][lL][sS][eE];
NULL    : [nN][uU][lL][lL];

LPAREN  : '(';
RPAREN  : ')';
LBRACK  : '[';
RBRACK  : ']';
DOT     : '.';
COLON   : ':';

URN     : 'urn:' [a-zA-Z0-9-.]+;

ATTRNAME: [a-zA-Z] [a-zA-Z0-9-_]*;

STRING  : '"' (~["\\] | '\\' .)* '"';

NUMBER  : '-'? [0-9]+ ('.' [0-9]+)? ([eE] [+-]? [0-9]+)?;

BOOLEAN : TRUE | FALSE;

WS      : [ \t\r\n]+ -> skip;