# Host: localhost  (Version: 5.5.34)
# Date: 2014-01-13 19:25:15
# Generator: MySQL-Front 5.3  (Build 4.43)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "db_antistop"
#

CREATE TABLE `db_antistop` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='关键词表';

#
# Data for table "db_antistop"
#


#
# Structure for table "db_list"
#

CREATE TABLE `db_list` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='游戏大类表';

#
# Data for table "db_list"
#


#
# Structure for table "db_list_small"
#

CREATE TABLE `db_list_small` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='游戏小类表';

#
# Data for table "db_list_small"
#


#
# Structure for table "game_cheats"
#

CREATE TABLE `game_cheats` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='游戏秘籍表';

#
# Data for table "game_cheats"
#


#
# Structure for table "grade_name"
#

CREATE TABLE `grade_name` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `garde_id` varchar(255) DEFAULT NULL COMMENT '等级编号',
  `garde_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='等级称号表';

#
# Data for table "grade_name"
#

INSERT INTO `grade_name` VALUES (1,'1','新兵'),(2,'2','士兵'),(3,'3','弓兵'),(4,'4','重甲'),(5,'5','骑兵'),(6,'6','将领'),(7,'7','统帅'),(8,'8','男爵'),(9,'9','子爵'),(10,'10','伯爵'),(11,'11','侯爵'),(12,'12','公爵'),(13,'13','亲王'),(14,'14','王储'),(15,'15','国王');

#
# Structure for table "post_main"
#

CREATE TABLE `post_main` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='帖子表';

#
# Data for table "post_main"
#


#
# Structure for table "post_repaly"
#

CREATE TABLE `post_repaly` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='回帖表';

#
# Data for table "post_repaly"
#


#
# Structure for table "user_information"
#

CREATE TABLE `user_information` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(12) NOT NULL DEFAULT '' COMMENT '用户名',
  `photo` blob COMMENT '头像',
  `nickname` varchar(15) NOT NULL DEFAULT '' COMMENT '昵称',
  `sex` varchar(2) NOT NULL DEFAULT '' COMMENT '性别',
  `age` int(11) DEFAULT '0' COMMENT '年龄',
  `birthday` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '出生年月',
  `nation` varchar(10) DEFAULT NULL COMMENT '民族',
  `ID_number` varchar(19) DEFAULT NULL COMMENT '身份证号',
  `e-mail` varchar(50) NOT NULL DEFAULT '' COMMENT '电子邮箱',
  `qq` varchar(12) DEFAULT NULL COMMENT 'QQ',
  `address` varchar(255) DEFAULT NULL COMMENT '家庭住址',
  `signature` text COMMENT '个人签名',
  `integration` int(11) NOT NULL DEFAULT '0' COMMENT '积分',
  `grade_id` int(11) NOT NULL DEFAULT '1' COMMENT '等级编号',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户信息表';

#
# Data for table "user_information"
#


#
# Structure for table "user_logn"
#

CREATE TABLE `user_logn` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(12) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(255) NOT NULL DEFAULT '' COMMENT '加密密码',
  `truepass` varchar(16) NOT NULL DEFAULT '' COMMENT '真实密码',
  `authority` int(11) NOT NULL DEFAULT '0' COMMENT '权限',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户登录表';

#
# Data for table "user_logn"
#

