<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2008
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dw_user_amount`;");
E_C("CREATE TABLE `dw_user_amount` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '�����ָ����',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `credit` decimal(11,2) NOT NULL DEFAULT '0.00',
  `credit_use` decimal(11,2) NOT NULL DEFAULT '0.00',
  `credit_nouse` decimal(11,2) NOT NULL DEFAULT '0.00',
  `borrow_vouch` decimal(11,2) NOT NULL DEFAULT '0.00',
  `borrow_vouch_use` decimal(11,2) NOT NULL DEFAULT '0.00',
  `borrow_vouch_nouse` decimal(11,2) NOT NULL DEFAULT '0.00',
  `tender_vouch` decimal(11,2) NOT NULL DEFAULT '0.00',
  `tender_vouch_use` decimal(11,2) NOT NULL DEFAULT '0.00',
  `tender_vouch_nouse` decimal(11,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=108 DEFAULT CHARSET=gbk");
E_D("replace into `dw_user_amount` values('1','1','3000.00','3000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('2','48','3000.00','3000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('3','2','3000.00','3000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('4','3','3000.00','3000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('5','4','500000.00','502820.46','-2820.46','100000.00','100000.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('6','5','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('7','6','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('8','7','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('9','8','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('10','9','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('11','10','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('12','11','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('13','12','20000.00','20177.20','-177.20','0.00','0.00','0.00','100000.00','100000.00','0.00');");
E_D("replace into `dw_user_amount` values('14','13','100000.00','60.00','99940.00','100000.00','100000.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('15','14','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('16','15','5000.00','5.00','4995.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('17','16','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('18','17','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('19','18','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('20','19','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('21','20','20000.00','20037.00','-37.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('22','21','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('23','22','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('24','23','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('25','24','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('26','25','5000.00','5015.18','-15.18','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('27','26','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('28','27','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('29','28','5000.00','5063.54','-63.54','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('30','29','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('31','30','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('32','31','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('33','32','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('34','33','5000.00','5018.33','-18.33','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('35','34','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('36','35','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('37','36','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('38','37','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('39','38','10000.00','6118.25','3881.75','15000000.00','15000000.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('40','39','10000.00','10065.92','-65.92','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('41','40','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('42','41','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('43','42','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('44','43','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('45','44','15000.00','15050.00','-50.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('46','45','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('47','46','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('48','47','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('49','49','50000.00','50050.00','-50.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('50','50','8000.00','8036.17','-36.17','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('51','51','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('52','52','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('53','53','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('54','54','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('55','55','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('56','56','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('57','57','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('58','58','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('59','59','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('60','60','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('61','61','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('62','62','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('63','63','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('64','64','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('65','65','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('66','66','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('67','67','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('68','68','5000.00','5000.00','0.00','0.00','0.00','0.00','50000.00','50000.00','0.00');");
E_D("replace into `dw_user_amount` values('69','69','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('70','70','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('71','71','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('72','72','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('73','73','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('74','74','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('75','75','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('76','76','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('77','77','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('78','78','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('79','79','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('80','80','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('81','81','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('82','82','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('83','83','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('84','84','2000.00','2000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('85','85','2000.00','2000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('86','86','10000.00','10038.24','-38.24','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('87','87','2000.00','2000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('88','88','1000.00','1000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('89','89','1000.00','1000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('90','90','51000.00','51000.00','0.00','50000.00','50000.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('91','91','1000.00','1000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('92','92','1000.00','0.00','1000.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('93','93','1000.00','1000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('94','94','1000.00','1000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('95','95','1000.00','1000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('96','96','2000.00','2000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('97','97','2000.00','2000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('98','98','2000.00','2000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('99','99','2000.00','2000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('100','100','2000.00','2000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('101','101','2000.00','2000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('102','102','5000.00','5000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('103','103','2000.00','2000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('104','104','2000.00','2000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('105','105','2000.00','2000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('106','106','2000.00','2000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");
E_D("replace into `dw_user_amount` values('107','107','2000.00','2000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00');");

@include("../../inc/footer.php");
?>