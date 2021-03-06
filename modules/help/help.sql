CREATE TABLE IF NOT EXISTS `{help}` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `smallname` varchar(200) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `litpic` varchar(255) NOT NULL DEFAULT '',
  `flag` varchar(50) default NULL ,
  `publish` varchar(50) default NULL ,
  `is_jump` int(1)  default NULL ,
  `author` varchar(50)  default NULL ,
  `source` varchar(50)  default NULL ,
  `summary` varchar(255)  DEFAULT NULL ,
  `province` varchar(20) default NULL COMMENT '省份',
  `city` varchar(20) default NULL COMMENT '城市',
  `area` varchar(20) default NULL COMMENT '区',
  `jumpurl` varchar(255) NOT NULL DEFAULT '',
  `content` text  NULL,
  `order` int(11)  NULL DEFAULT '0',
  `hits` int(11)  NULL DEFAULT '0',
  `comment` int(11) NULL DEFAULT '0',
  `is_comment` int(1) NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `addtime` varchar(50) NOT NULL DEFAULT '',
  `addip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
			) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `{help_type}` (
  `type_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `nid` varchar(50) NOT NULL,
  `pid` int(2) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `content` text NOT NULL,
  `list_name` varchar(200) NOT NULL,
  `content_name` varchar(200) NOT NULL,
  `index_tpl` varchar(250) NOT NULL,
  `list_tpl` varchar(250) NOT NULL,
  `content_tpl` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `keywords` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL,
  `addtime` varchar(50) NOT NULL,
  `addip` varchar(50) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM