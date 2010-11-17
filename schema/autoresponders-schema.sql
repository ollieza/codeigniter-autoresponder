DROP TABLE IF EXISTS `autoresponders`;
CREATE TABLE IF NOT EXISTS `autoresponders` (
  `id` int(11) NOT NULL auto_increment,
  `label` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `last_update` timestamp NOT NULL default '0000-00-00 00:00:00' on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
