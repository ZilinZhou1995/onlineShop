<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ad`;");
E_C("CREATE TABLE `ecs_ad` (
  `ad_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `position_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `media_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ad_name` varchar(60) NOT NULL DEFAULT '',
  `ad_link` varchar(255) NOT NULL DEFAULT '',
  `ad_code` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(11) NOT NULL DEFAULT '0',
  `link_man` varchar(60) NOT NULL DEFAULT '',
  `link_email` varchar(60) NOT NULL DEFAULT '',
  `link_phone` varchar(60) NOT NULL DEFAULT '',
  `click_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `enabled` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`ad_id`),
  KEY `position_id` (`position_id`),
  KEY `enabled` (`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=104 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ad` values('67','37','0','首页-分类ID3通栏广告','#','1476084844495321534.jpg','1451548800','1625846400','','','','6','1');");
E_D("replace into `ecs_ad` values('82','11','0','首页-分类ID1-左侧图片1','','1476339411142443769.jpg','1451548800','1625846400','','','','29','1');");
E_D("replace into `ecs_ad` values('83','11','0','首页-分类ID1-左侧图片3','','1476339353290107972.jpg','1451548800','1625846400','','','','33','1');");
E_D("replace into `ecs_ad` values('6','6','0','首页店铺展示广告','#','1453531168427720925.jpg','1435564800','1625846400','','','','13','1');");
E_D("replace into `ecs_ad` values('8','8','0','首页幻灯片-小图下1','','1476332375490870904.jpg','1435651200','1625846400','','','','20','1');");
E_D("replace into `ecs_ad` values('9','8','0','首页幻灯片-小图下2','','1476332471704421280.jpg','1435564800','1625846400','','','','21','1');");
E_D("replace into `ecs_ad` values('10','8','0','首页幻灯片-小图下3','','1476332854580611059.jpg','1435564800','1625846400','','','','11','1');");
E_D("replace into `ecs_ad` values('89','65','0','首页-分类ID4通栏广告','','1476692343712128828.jpg','1474272000','1625846400','','','','0','1');");
E_D("replace into `ecs_ad` values('90','35','0','首页-分类ID1通栏广告','','1502143681038514661.jpg','1474272000','1625817600','','','','1','1');");
E_D("replace into `ecs_ad` values('18','12','0','首页-分类ID2-左侧图片1','','1453713115766629987.jpg','1435564800','1625846400','','','','7','1');");
E_D("replace into `ecs_ad` values('73','12','0','首页-分类ID2-左侧图片2','','1476691621133754062.jpg','1451548800','1625846400','','','','34','1');");
E_D("replace into `ecs_ad` values('74','15','0','首页-分类ID5-左侧图片2','#','1453770036067182149.jpg','1451548800','1625846400','','','','3','1');");
E_D("replace into `ecs_ad` values('75','11','0','首页-分类ID1-左侧图片2','','1476339459240477093.jpg','1451548800','1625846400','','','','2','1');");
E_D("replace into `ecs_ad` values('97','63','0','首页-分类ID25通栏广告','','1476940019483070502.jpg','1476864000','1625846400','','','','0','1');");
E_D("replace into `ecs_ad` values('37','36','0','首页-分类ID2通栏广告','','1476690580162544793.jpg','1435651200','1625846400','','','','14','1');");
E_D("replace into `ecs_ad` values('38','38','0','频道页-分类ID1-图片1','','1437584516643169695.jpg','1435651200','1625846400','','','','3','1');");
E_D("replace into `ecs_ad` values('39','39','0','频道页-分类ID1-图片2','','1437584779944154716.jpg','1435651200','1625846400','','','','3','1');");
E_D("replace into `ecs_ad` values('40','40','0','频道页-分类ID1-图片3','','1437584814283655281.jpg','1435651200','1625846400','','','','0','1');");
E_D("replace into `ecs_ad` values('41','41','0','频道页-分类ID2-图片1','','1437586917638435203.jpg','1435651200','1625846400','','','','1','1');");
E_D("replace into `ecs_ad` values('42','42','0','频道页-分类ID2-图片2','','1437587341931566910.jpg','1435651200','1625846400','','','','1','1');");
E_D("replace into `ecs_ad` values('43','43','0','频道页-分类ID2-图片3-1','','1437587416620218714.jpg','1435651200','1625846400','','','','3','1');");
E_D("replace into `ecs_ad` values('44','43','0','频道页-分类ID2-图片3-2','','1437587434007231369.jpg','1435651200','1625846400','','','','3','1');");
E_D("replace into `ecs_ad` values('45','43','0','频道页-分类ID2-图片3-3','','1437587451977920522.jpg','1435651200','1625846400','','','','2','1');");
E_D("replace into `ecs_ad` values('46','43','0','频道页-分类ID2-图片3-4','','1437587464965488644.jpg','1435651200','1625846400','','','','0','1');");
E_D("replace into `ecs_ad` values('47','43','0','频道页-分类ID2-图片3-5','','1437587487479959687.jpg','1435651200','1625846400','','','','2','1');");
E_D("replace into `ecs_ad` values('48','43','0','频道页-分类ID2-图片3-6','','1437587523208947162.jpg','1435651200','1625846400','','','','2','1');");
E_D("replace into `ecs_ad` values('49','44','0','积分商城banner广告1','','1437589745077253266.jpg','1437552000','1625846400','','','','2','1');");
E_D("replace into `ecs_ad` values('50','45','0','积分商城banner广告2','','1437589866930988718.jpg','1437552000','1625846400','','','','2','1');");
E_D("replace into `ecs_ad` values('51','46','0','积分商城banner广告3','','1437589886385874800.jpg','1437552000','1625846400','','','','2','1');");
E_D("replace into `ecs_ad` values('52','47','0','积分商城banner广告4','','1437589904563695475.jpg','1437552000','1625846400','','','','1','1');");
E_D("replace into `ecs_ad` values('53','49','0','积分商城通栏广告','','1437590460468432807.jpg','1437552000','1625846400','','','','2','1');");
E_D("replace into `ecs_ad` values('54','48','0','频道页面-小分类ID55-广告','','1437591187278384298.jpg','1437552000','1625846400','','','','1','1');");
E_D("replace into `ecs_ad` values('55','50','0','频道页面-小分类ID57-广告','','1437591331330793568.jpg','1435651200','1625846400','','','','0','1');");
E_D("replace into `ecs_ad` values('56','51','0','拍卖列表banner广告1','','1437591936766548819.jpg','1437552000','1625846400','','','','5','1');");
E_D("replace into `ecs_ad` values('57','52','0','拍卖列表banner广告2','','1437591968113037089.jpg','1437552000','1625846400','','','','2','1');");
E_D("replace into `ecs_ad` values('58','53','0','拍卖列表banner广告3','','1437592138548361031.jpg','1437552000','1625846400','','','','4','1');");
E_D("replace into `ecs_ad` values('59','54','0','拍卖列表banner广告4','','1437592268836563576.jpg','1437552000','1625846400','','','','3','1');");
E_D("replace into `ecs_ad` values('60','55','0','频道页面-小分类ID56-广告','','1437592348952430337.jpg','1435651200','1625846400','','','','2','1');");
E_D("replace into `ecs_ad` values('61','58','0','导航菜单-分类ID2-促销专题','ww','1448838783928640954.jpg','1446105600','1625846400','','','','0','1');");
E_D("replace into `ecs_ad` values('62','59','0','导航菜单-分类ID5-促销专题1','#','1471309289456487333.jpg','1451548800','1625846400','','','','13','1');");
E_D("replace into `ecs_ad` values('63','59','0','导航菜单-分类ID5-促销专题2','#','1471309275842091351.jpg','1453276800','1625846400','','','','18','1');");
E_D("replace into `ecs_ad` values('64','8','0','首页幻灯片-小图下4','#','1476332998123810392.jpg','1421827200','1625846400','','','','8','1');");
E_D("replace into `ecs_ad` values('65','8','0','首页幻灯片-小图下5','','1476083885514610682.jpg','1451548800','1625846400','','','','7','1');");
E_D("replace into `ecs_ad` values('66','8','0','首页幻灯片-小图下6','#','1476083782340304905.jpg','1451635200','1625846400','','','','7','1');");
E_D("replace into `ecs_ad` values('84','64','0','首页生活的橱窗1','http://www.chaligou.com/category.php?id=1020','1476081752205304167.jpg','1457251200','1625846400','','','','60','1');");
E_D("replace into `ecs_ad` values('85','64','0','首页生活的橱窗2','http://www.chaligou.com/category.php?id=907','1476082034925090612.jpg','1457251200','1625846400','','','','80','1');");
E_D("replace into `ecs_ad` values('86','64','0','首页生活的橱窗3','http://www.chaligou.com/category.php?id=1036','1476082083721268936.jpg','1457251200','1625846400','','','','58','1');");
E_D("replace into `ecs_ad` values('87','64','0','首页生活的橱窗4','','1476082123857738613.jpg','1474099200','1625846400','','','','1','1');");
E_D("replace into `ecs_ad` values('88','64','0','首页生活的橱窗5','','1476082187779350349.jpg','1474185600','1625846400','','','','0','1');");
E_D("replace into `ecs_ad` values('91','15','0','首页-分类ID5-左侧图片3','','1475477917762617721.jpg','1475395200','1625846400','','','','0','1');");
E_D("replace into `ecs_ad` values('92','15','0','首页-分类ID5-左侧图片1','','1476691719648976971.jpg','1475395200','1625846400','','','','0','1');");
E_D("replace into `ecs_ad` values('93','14','0','首页-分类ID4-左侧图片','','1502133582125072183.jpg','1475395200','1625817600','','','','0','1');");
E_D("replace into `ecs_ad` values('94','14','0','首页-分类ID4-左侧图片2','','1502133569036805801.jpg','1475395200','1625817600','','','','0','1');");
E_D("replace into `ecs_ad` values('95','14','0','首页-分类ID4-左侧图片3','','1502133558616319730.jpg','1475395200','1625817600','','','','0','1');");
E_D("replace into `ecs_ad` values('96','12','0','首页-分类ID2-左侧图片3','','1476691781246747947.jpg','1476691200','1625846400','','','','0','1');");
E_D("replace into `ecs_ad` values('98','13','0','首页-分类ID3-左侧图片1','','1502133939121286727.jpg','1502006400','1630915200','','','','0','1');");
E_D("replace into `ecs_ad` values('99','13','0','首页-分类ID3通栏广告2','','1502133971411798671.jpg','1407398400','1599379200','','','','0','1');");
E_D("replace into `ecs_ad` values('100','13','0','首页-分类ID3-左侧图片3','','1502134014644077487.jpg','1494144000','1599379200','','','','0','1');");
E_D("replace into `ecs_ad` values('101','67','0','首页-分类ID6-左侧图片1','','1502139541421664546.jpg','1499414400','1599379200','','','','0','1');");
E_D("replace into `ecs_ad` values('102','67','0','首页-分类ID6-左侧图片2','','1502139585759575747.jpg','1501833600','1599379200','','','','0','1');");
E_D("replace into `ecs_ad` values('103','67','0','首页-分类ID6-左侧图片3','','1502139630986085481.jpg','1502006400','1599379200','','','','0','1');");

require("../../inc/footer.php");
?>