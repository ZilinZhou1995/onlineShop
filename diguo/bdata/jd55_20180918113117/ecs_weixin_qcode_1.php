<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_qcode`;");
E_C("CREATE TABLE `ecs_weixin_qcode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) NOT NULL,
  `content` varchar(100) NOT NULL,
  `qcode` varchar(200) NOT NULL,
  `qr_path` varchar(256) NOT NULL COMMENT '图片二维码路径',
  `user_name` varchar(256) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nickname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>