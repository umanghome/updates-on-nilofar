SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `nilofar`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `district` int(10) unsigned NOT NULL,
  `info` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` VALUES(7, 13, 'Hello, world!', '2014-12-14 22:08:03');
