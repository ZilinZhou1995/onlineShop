<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_postman`;");
E_C("CREATE TABLE `ecs_postman` (
  `postman_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `postman_name` varchar(60) NOT NULL,
  `region_id` int(10) unsigned NOT NULL DEFAULT '0',
  `mobile` varchar(20) NOT NULL,
  PRIMARY KEY (`postman_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_postman` values('1','陈光','1870','18530181714');");

require("../../inc/footer.php");
?>