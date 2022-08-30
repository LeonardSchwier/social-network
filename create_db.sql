CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) COLLATE latin1_german2_ci NOT NULL,
  `password` varchar(40) COLLATE latin1_german2_ci NOT NULL,
  `email` varchar(70) COLLATE latin1_german2_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `punkte` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci AUTO_INCREMENT=1 ;
