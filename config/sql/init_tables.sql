# ************************************************************
# Sequel Pro SQL dump
# バージョン 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# ホスト: 127.0.0.1 (MySQL 5.5.29)
# データベース: rent
# 作成時刻: 2015-04-03 07:31:14 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# テーブルのダンプ property_conditions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `property_conditions`;

CREATE TABLE `property_conditions` (
  `id` varchar(36) NOT NULL DEFAULT '',
  `rental_property_id` varchar(36) NOT NULL DEFAULT '',
  `rent` int(11) unsigned NOT NULL COMMENT '賃料',
  `common_fee` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '共益費',
  `parking` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '駐車場料金',
  `bicycle` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '駐輪場料金',
  `annual_guarantee_charge` float unsigned NOT NULL DEFAULT '0' COMMENT '年間保証料',
  `renewal_fee` float unsigned NOT NULL DEFAULT '0' COMMENT '更新料',
  `renewal_extra_fee` float unsigned NOT NULL DEFAULT '0' COMMENT '更新事務手数料',
  `insurance_fee` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '火災保険料',
  `deposit` float unsigned NOT NULL DEFAULT '0' COMMENT '敷金',
  `thanx_fee` float unsigned NOT NULL DEFAULT '0' COMMENT '礼金',
  `initial_guarantee_charge` float unsigned NOT NULL DEFAULT '0' COMMENT '保証料',
  `broker_commission` float unsigned NOT NULL DEFAULT '0' COMMENT '仲介手数料',
  `key_replacement_cost` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '鍵交換料',
  `free_rent` float unsigned NOT NULL DEFAULT '0' COMMENT 'フリーレント',
  `remarks` varchar(255) DEFAULT NULL,
  `on_sale` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rental_property_key` (`rental_property_id`),
  CONSTRAINT `property_conditions_ibfk_1` FOREIGN KEY (`rental_property_id`) REFERENCES `rental_properties` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# テーブルのダンプ rental_properties
# ------------------------------------------------------------

DROP TABLE IF EXISTS `rental_properties`;

CREATE TABLE `rental_properties` (
  `id` varchar(36) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `extent` int(11) unsigned DEFAULT NULL,
  `arrangement` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `room` varchar(255) DEFAULT NULL,
  `built` date DEFAULT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
