DELIMITER //
CREATE TRIGGER calculateQuoteLength_on_insert
BEFORE INSERT
   ON citation FOR EACH ROW
BEGIN
  SET NEW.length = quoteLength(concatQuoteAuthor(NEW.quote, NEW.author));
  SET NEW.created = NOW();
  SET NEW.updated = NOW();
END;//
delimiter ;

DELIMITER //
CREATE TRIGGER calculateQuoteLength_on_update
BEFORE UPDATE
   ON citation FOR EACH ROW
BEGIN
  SET NEW.length = quoteLength(concatQuoteAuthor(NEW.quote, NEW.author));
  SET NEW.updated = NOW();
END;//
delimiter ;
