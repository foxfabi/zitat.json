CREATE VIEW missingSequenceNumbers AS 
  SELECT l.ID + 1 AS start 
  FROM citation AS l 
  LEFT OUTER JOIN citation AS r ON l.ID + 1 = r.ID 
  WHERE r.ID is null 
  ORDER BY start;