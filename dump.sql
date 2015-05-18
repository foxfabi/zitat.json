CREATE TABLE IF NOT EXISTS `citation` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `quote` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `views` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `quote` (`quote`,`author`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

INSERT INTO `citation` (`ID`, `quote`, `author`, `updated`, `created`, `views`) VALUES
(21, 'Finde das, was du liebst. Und begnüge dich niemals mit etwas Geringerem.', 'Steve Jobs', '2014-07-01 11:38:59', '2014-07-01 11:38:59', 404),
(22, 'Zeit hat man nur, wenn man sie sich nimmt.', 'Karl Heinrich Waggerl', '2014-07-01 11:40:07', '2014-07-01 11:40:07', 387),
(23, 'Wer in den Fussstapfen eines anderen wandelt, hinterlässt keine eigenen Spuren.', 'Wilhelm Busch', '2014-07-01 11:46:27', '2014-07-01 11:46:27', 387),
(24, 'Wer nichts weiss, muss alles glauben.', 'Marie von Ebner-Eschenbach', '2014-07-01 11:47:32', '2014-07-01 11:47:32', 339);

