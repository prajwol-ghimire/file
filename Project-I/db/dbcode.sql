
CREATE DATABASE IF NOT EXISTS `booksdata` ;
USE `booksdata`;

CREATE TABLE IF NOT EXISTS `udata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT 'empty',
  `usname` varchar(50) DEFAULT NULL,
  `upassword` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `uname` (`uname`)
) ENGINE=MyISAM AUTO_INCREMENT=5211 DEFAULT CHARSET=latin1;
