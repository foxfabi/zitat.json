CREATE FUNCTION concatQuoteAuthor (q VARCHAR(255), a VARCHAR(255)) 
RETURNS VARCHAR(255)
RETURN CONCAT(q, ' (', a,')');


CREATE FUNCTION quoteLength (s VARCHAR(255))
RETURNS INT(11)
RETURN LENGTH(CONVERT(s USING utf8));