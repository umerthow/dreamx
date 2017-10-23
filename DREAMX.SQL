/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.21-MariaDB : Database - dreamx
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dreamx` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dreamx`;

/*Table structure for table `artikel` */

DROP TABLE IF EXISTS `artikel`;

CREATE TABLE `artikel` (
  `artikel_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `artikel_judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikel_isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikel_kategori` bigint(20) unsigned NOT NULL DEFAULT '0',
  `artikel_tags` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikel_foto` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikel_sbg_headline` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `artikel_tgl_posting` datetime NOT NULL,
  `artikel_id_user` bigint(20) NOT NULL,
  `artikel_tgl_last_edit` datetime NOT NULL,
  `artikel_editable` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `artikel_id_user_last_edit` int(11) NOT NULL,
  `artikel_seo_url` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikel_meta_description` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikel_meta_author` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikel_meta_keyword` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikel_og_image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikel_og_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikel_og_description` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikel_in_draft` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `artikel_aktif` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `artikel_terhapus` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `artikel_status` enum('publish','draft','deleted') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `artikel_was_published` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `artikel_sesi_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikel_dibaca` bigint(20) unsigned NOT NULL DEFAULT '0',
  `artikel_courtesy` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`artikel_id`),
  UNIQUE KEY `artikel_id` (`artikel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `artikel` */

insert  into `artikel`(`artikel_id`,`artikel_judul`,`artikel_isi`,`artikel_kategori`,`artikel_tags`,`artikel_foto`,`artikel_sbg_headline`,`artikel_tgl_posting`,`artikel_id_user`,`artikel_tgl_last_edit`,`artikel_editable`,`artikel_id_user_last_edit`,`artikel_seo_url`,`artikel_meta_description`,`artikel_meta_author`,`artikel_meta_keyword`,`artikel_og_image`,`artikel_og_title`,`artikel_og_description`,`artikel_in_draft`,`artikel_aktif`,`artikel_terhapus`,`artikel_status`,`artikel_was_published`,`artikel_sesi_id`,`artikel_dibaca`,`artikel_courtesy`) values (1,'Vestibulum molestie, tellus nec luctus tempor','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac metus arcu. Vestibulum tristique ante tellus, rutrum elementum purus ultricies eu. Vestibulum molestie, tellus nec luctus tempor, justo diam venenatis purus, at auctor ipsum nulla a ipsum. Vestibulum accumsan faucibus fermentum. Proin pretium finibus ex ac tempor. Etiam euismod lorem vitae massa lacinia, non venenatis magna consequat. Quisque mattis condimentum mollis. Nulla mollis, orci quis viverra tempus, libero risus laoreet tellus, nec facilisis arcu lectus convallis ex. Mauris semper justo eget tellus fringilla venenatis. Etiam a augue varius, tincidunt nulla et, laoreet ligula. Mauris lacus libero, pretium eget efficitur ut, porta non felis. Nulla sit amet mollis lacus.</p>\n<p>Vestibulum quis lectus dui. Nulla enim mi, malesuada at efficitur vitae, varius eget odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec lacus eu neque varius eleifend sit amet sit amet turpis. Aliquam pellentesque maximus libero. Nunc dictum turpis quis justo fermentum accumsan. Aliquam porta egestas libero, at elementum ligula malesuada sed. Duis molestie felis sed odio vulputate congue. Duis dapibus vehicula tortor nec tincidunt. Aliquam aliquet nibh arcu.</p>\n<p>Pellentesque in ligula condimentum, condimentum nibh at, facilisis quam. Sed feugiat suscipit erat, quis blandit nunc viverra eu. Maecenas eget eleifend dolor. Cras maximus porttitor augue, eget iaculis felis. Sed malesuada nunc vel auctor auctor. Quisque porta sapien vel ornare porttitor. Vestibulum imperdiet rutrum elit, quis consequat libero auctor at. Nunc ac dui lacus. Vivamus lacinia elit est, id interdum magna mollis eget. Vivamus ullamcorper magna non ipsum mollis, quis ornare lacus pulvinar. Donec metus quam, feugiat in ligula ac, interdum dignissim metus. Donec massa ex, ullamcorper vel posuere sit amet, auctor vel ex. Praesent porta, enim quis gravida vestibulum, nisi enim rutrum tellus, nec hendrerit odio orci eget metus.</p>',5,'5,2,1','','Y','2016-04-14 02:59:20',1,'2016-04-14 02:59:20','Y',1,'vestibulum-molestie-tellus-nec-luctus-tempor','','','','','','','N','Y','N','publish','Y','34340131604',18,NULL),(2,'Proin feugiat enim ut quam hendrerit elementum','<p>Sed feugiat suscipit erat, quis blandit nunc viverra eu. Maecenas eget eleifend dolor. Cras maximus porttitor augue, eget iaculis felis. Sed malesuada nunc vel auctor auctor. Quisque porta sapien vel ornare porttitor. Vestibulum imperdiet rutrum elit, quis consequat libero auctor at. Nunc ac dui lacus. Vivamus lacinia elit est, id interdum magna mollis eget. Vivamus ullamcorper magna non ipsum mollis, quis ornare lacus pulvinar. Donec metus quam, feugiat in ligula ac, interdum dignissim metus. Donec massa ex, ullamcorper vel posuere sit amet, auctor vel ex. Praesent porta, enim quis gravida vestibulum, nisi enim rutrum tellus, nec hendrerit odio orci eget metus.</p>\n<p>Suspendisse pellentesque dapibus ipsum sed malesuada. Proin feugiat enim ut quam hendrerit elementum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce consectetur molestie elementum. Fusce in dui ac elit volutpat accumsan sit amet quis nibh. Nam maximus rhoncus lorem, maximus mollis dui iaculis id. Morbi ut ligula nec sapien pharetra luctus quis at erat. Phasellus in ante dapibus, fermentum lorem ac, mollis enim. Proin non neque tellus. Nullam malesuada tincidunt augue ac fermentum. Donec pellentesque sit amet ex eu posuere. Cras lobortis tellus ac enim interdum, sit amet commodo dolor interdum. Pellentesque lobortis, sapien sed mattis vehicula, leo magna elementum turpis, a molestie risus diam eget libero. Proin pulvinar sapien augue, nec ornare orci bibendum ut. Suspendisse potenti. In lacus ante, viverra ac neque et, fringilla tincidunt libero.</p>\n<p>Cras vitae felis ut lacus auctor ultricies eu quis diam. Morbi ullamcorper nec neque ac vestibulum. Etiam in pellentesque leo. Morbi efficitur, orci eu aliquam fermentum, neque elit vestibulum dolor, sit amet aliquam nisl tellus sit amet tellus. Ut nec nisi placerat orci commodo ornare. Proin sed nibh maximus, dignissim massa nec, aliquet odio. Nullam ultricies diam pellentesque, tempor purus et, faucibus erat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis sed cursus orci. Sed bibendum justo non urna rutrum, non euismod sem ullamcorper. In imperdiet justo ex, nec feugiat magna aliquam dictum.</p>\n<p>Donec efficitur orci velit, interdum bibendum nulla vulputate eget. Nam dapibus eros eleifend, fringilla magna vitae, porttitor nibh. Fusce mollis nisl non tempus vulputate. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse vitae hendrerit arcu, sed feugiat velit. Pellentesque non tortor lectus. Sed vel urna lacus. Nunc sed magna id urna bibendum aliquam sed ac nibh. Nulla maximus pellentesque felis et ornare. Nunc placerat dui at tortor luctus rhoncus. Sed ut porttitor dolor, ut suscipit dui. Pellentesque imperdiet nulla risus, et porttitor lacus fringilla vitae. Integer eleifend nisl vitae dapibus dignissim. Suspendisse et mi eu dolor dapibus ullamcorper nec et mi.</p>',5,'4,2','','Y','2016-04-14 03:18:19',1,'0000-00-00 00:00:00','Y',0,'proin-feugiat-enim-ut-quam-hendrerit-elementum','','','','','','','N','Y','N','publish','Y','63108131604',1,NULL),(3,'Pellentesque consectetur nunc eget nisi gravida','<p>Donec efficitur orci velit, interdum bibendum nulla vulputate eget. Nam dapibus eros eleifend, fringilla magna vitae, porttitor nibh. Fusce mollis nisl non tempus vulputate. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse vitae hendrerit arcu, sed feugiat velit. Pellentesque non tortor lectus. Sed vel urna lacus. Nunc sed magna id urna bibendum aliquam sed ac nibh. Nulla maximus pellentesque felis et ornare. Nunc placerat dui at tortor luctus rhoncus. Sed ut porttitor dolor, ut suscipit dui. Pellentesque imperdiet nulla risus, et porttitor lacus fringilla vitae. Integer eleifend nisl vitae dapibus dignissim. Suspendisse et mi eu dolor dapibus ullamcorper nec et mi.</p>\n<p>Sed vulputate ex odio, vel sagittis arcu feugiat et. Curabitur feugiat elementum risus, non ultrices elit suscipit eget. Donec rutrum tempor dolor, id mattis ligula viverra et. Ut enim est, faucibus eget urna id, egestas ullamcorper lacus. Ut lacinia ex eu velit condimentum ultricies. Nam vehicula, ante id varius dictum, augue neque finibus nisi, hendrerit mattis erat nisl non enim. Sed lobortis accumsan eros a consectetur. Nulla porta pharetra eros, id eleifend mauris tincidunt id. Nulla massa tellus, posuere a lacus sit amet, vehicula pretium lacus.</p>\n<p>Nam fringilla posuere ex, ut euismod orci scelerisque id. Morbi eget orci vel dui sollicitudin suscipit facilisis eget odio. Pellentesque vehicula purus sed lacus bibendum, sed dictum libero molestie. Suspendisse molestie nibh tellus, et congue risus dictum a. Nulla semper, magna faucibus laoreet dignissim, nibh arcu dictum magna, sit amet condimentum orci elit sit amet risus. Curabitur mauris lorem, lacinia sit amet erat ut, gravida maximus justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum scelerisque quis dui sed pharetra. Proin aliquam consectetur est. Nunc egestas laoreet gravida.</p>',5,'2,5','','Y','2016-04-14 03:32:22',1,'0000-00-00 00:00:00','Y',0,'pellentesque-consectetur-nunc-eget-nisi-gravida','','','','','','','N','Y','N','publish','Y','30370131604',1,NULL),(4,' Cras molestie orci id lacus sodales hendrerit','<p>Nunc sed magna id urna bibendum aliquam sed ac nibh. Nulla maximus pellentesque felis et ornare. Nunc placerat dui at tortor luctus rhoncus. Sed ut porttitor dolor, ut suscipit dui. Pellentesque imperdiet nulla risus, et porttitor lacus fringilla vitae. Integer eleifend nisl vitae dapibus dignissim. Suspendisse et mi eu dolor dapibus ullamcorper nec et mi.</p>\n<p>Sed vulputate ex odio, vel sagittis arcu feugiat et. Curabitur feugiat elementum risus, non ultrices elit suscipit eget. Donec rutrum tempor dolor, id mattis ligula viverra et. Ut enim est, faucibus eget urna id, egestas ullamcorper lacus. Ut lacinia ex eu velit condimentum ultricies. Nam vehicula, ante id varius dictum, augue neque finibus nisi, hendrerit mattis erat nisl non enim. Sed lobortis accumsan eros a consectetur. Nulla porta pharetra eros, id eleifend mauris tincidunt id. Nulla massa tellus, posuere a lacus sit amet, vehicula pretium lacus.</p>\n<p>Nam fringilla posuere ex, ut euismod orci scelerisque id. Morbi eget orci vel dui sollicitudin suscipit facilisis eget odio. Pellentesque vehicula purus sed lacus bibendum, sed dictum libero molestie. Suspendisse molestie nibh tellus, et congue risus dictum a. Nulla semper, magna faucibus laoreet dignissim, nibh arcu dictum magna, sit amet condimentum orci elit sit amet risus. Curabitur mauris lorem, lacinia sit amet erat ut, gravida maximus justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum scelerisque quis dui sed pharetra. Proin aliquam consectetur est. Nunc egestas laoreet gravida.</p>\n<p>Pellentesque consectetur nunc eget nisi gravida, aliquam egestas diam sagittis. Fusce pulvinar porta facilisis. Sed viverra facilisis vulputate. Nunc non ipsum ac sapien sagittis aliquet a eget magna. Nulla fermentum finibus ipsum eget porta. Cras tempor est non suscipit fringilla. Nam efficitur nunc fermentum risus faucibus, non semper elit faucibus. Cras id nunc nulla.</p>\n<p>In hac habitasse platea dictumst. Cras molestie orci id lacus sodales hendrerit. Duis est mi, venenatis et iaculis eu, ultrices eu erat. Ut metus mauris, placerat sed purus vel, fringilla sollicitudin leo. Aliquam cursus turpis a est semper dictum. Integer vitae turpis in neque ullamcorper hendrerit. Nullam ut eros nec quam vestibulum semper. Nulla viverra euismod facilisis. Vestibulum sed diam nibh. Aliquam et nunc eu eros consectetur aliquet at vel ante. Sed sed ipsum viverra, pellentesque urna eget, convallis nisl. Nunc eu elit cursus leo vestibulum egestas vel id libero. Duis malesuada at velit a condimentum. Ut blandit orci enim, id viverra erat malesuada blandit</p>',5,'1,4,3','','Y','2016-04-14 03:38:45',1,'0000-00-00 00:00:00','Y',0,'cras-molestie-orci-id-lacus-sodales-hendrerit','','','','','','','N','Y','N','publish','Y','6363131604',5,NULL),(5,'Nam dapibus eros eleifend, fringilla magna vitae, porttitor nibh','<p>Nullam ultricies diam pellentesque, tempor purus et, faucibus erat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis sed cursus orci. Sed bibendum justo non urna rutrum, non euismod sem ullamcorper. In imperdiet justo ex, nec feugiat magna aliquam dictum.</p>\n<p>Donec efficitur orci velit, interdum bibendum nulla vulputate eget. Nam dapibus eros eleifend, fringilla magna vitae, porttitor nibh. Fusce mollis nisl non tempus vulputate. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse vitae hendrerit arcu, sed feugiat velit. Pellentesque non tortor lectus. Sed vel urna lacus. Nunc sed magna id urna bibendum aliquam sed ac nibh. Nulla maximus pellentesque felis et ornare. Nunc placerat dui at tortor luctus rhoncus. Sed ut porttitor dolor, ut suscipit dui. Pellentesque imperdiet nulla risus, et porttitor lacus fringilla vitae. Integer eleifend nisl vitae dapibus dignissim. Suspendisse et mi eu dolor dapibus ullamcorper nec et mi.</p>\n<p>Sed vulputate ex odio, vel sagittis arcu feugiat et. Curabitur feugiat elementum risus, non ultrices elit suscipit eget. Donec rutrum tempor dolor, id mattis ligula viverra et. Ut enim est, faucibus eget urna id, egestas ullamcorper lacus. Ut lacinia ex eu velit condimentum ultricies. Nam vehicula, ante id varius dictum, augue neque finibus nisi, hendrerit mattis erat nisl non enim. Sed lobortis accumsan eros a consectetur. Nulla porta pharetra eros, id eleifend mauris tincidunt id. Nulla massa tellus, posuere a lacus sit amet, vehicula pretium lacus.</p>\n<p>Nam fringilla posuere ex, ut euismod orci scelerisque id. Morbi eget orci vel dui sollicitudin suscipit facilisis eget odio. Pellentesque vehicula purus sed lacus bibendum, sed dictum libero molestie. Suspendisse molestie nibh tellus, et congue risus dictum a. Nulla semper, magna faucibus laoreet dignissim, nibh arcu dictum magna, sit amet condimentum orci elit sit amet risus. Curabitur mauris lorem, lacinia sit amet erat ut, gravida maximus justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum scelerisque quis dui sed pharetra. Proin aliquam consectetur est. Nunc egestas laoreet gravida.</p>',5,'3,1,2','','Y','2016-04-14 03:46:53',1,'0000-00-00 00:00:00','Y',0,'nam-dapibus-eros-eleifend-fringilla-magna-vitae-porttitor-nibh','','','','','','','N','Y','N','publish','Y','456131604',34,NULL);

/*Table structure for table `banner_depan` */

DROP TABLE IF EXISTS `banner_depan`;

CREATE TABLE `banner_depan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_href` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_text` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `banner_depan` */

insert  into `banner_depan`(`id`,`gambar`,`header`,`caption`,`link_href`,`link_text`) values (1,'http://localhost/dreamx/an-component/media/upload-gambar-pendukung/man-489744_1280.jpg','Starting a new journey!!','- Use one system across your entire company’s HC cycle -','#contact','Try Now'),(2,'http://localhost/dreamx/an-component/media/upload-gambar-pendukung/milky-way-1023340_1280.jpg','Our business model is to help others','- Giving complete and consistent employee <strong>experience</strong> -','#contact','Try Now'),(3,'http://localhost/dreamx/an-component/media/upload-gambar-pendukung/sparkler-677774_1280.jpg','Duis eu vehicula',' Integer augue enim, sollicitudin\nullamcorper mattis eget, aliquam in est','#','button'),(4,'http://localhost/dreamx/an-component/media/upload-gambar-pendukung/pen-581881_1280.jpg','Sed ut porttitor dolor, ut suscipit dui',' Ut enim est, faucibus eget urna id, egestas ullamcorper lacus. Ut lacinia ex eu velit condimentum ultricies','#','button');

/*Table structure for table `biodata` */

DROP TABLE IF EXISTS `biodata`;

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_singkat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_fb` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_insta` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_twitter` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_linkedin` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `biodata` */

insert  into `biodata`(`id`,`nama`,`foto`,`deskripsi_singkat`,`deskripsi`,`link_fb`,`link_insta`,`link_twitter`,`link_linkedin`,`alamat`,`email`,`telp`) values (1,'Dreamaxtion','http://localhost/dreamx/an-component/media/upload-gambar-pendukung/logo_1.png','Dreamaxtion is a Technology Solution’s company focusing on Human Capital Solutions especially HR Information System to improve company-employee well-being and engagement. ','<p>There is rarely a mention of “agile in the HR group” (HBR, 2014) although one of the core missions of HR in the coming years will likely involve establishing more flexible organizations and forms of employment</p>','https://facebook.com/dreamaxtion','https://instagram','https://twitter.com','https://linkdein','Jl. Kelapa Hibrida Raya Blok QG 10 No.9 (Piggabo’s Store ,2nd Floor), Jakarta Utara - 14250','cs@dreamaxtion.com','(021) 123456');

/*Table structure for table `foto_artikel` */

DROP TABLE IF EXISTS `foto_artikel`;

CREATE TABLE `foto_artikel` (
  `id_foto` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_artikel` bigint(20) unsigned NOT NULL,
  `nama_foto` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `token_foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_foto`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `foto_artikel` */

insert  into `foto_artikel`(`id_foto`,`id_artikel`,`nama_foto`,`featured`,`token_foto`) values (1,1,'easter-3.jpg','N','0.6678904311266203'),(2,1,'easter-2.jpg','N','0.41757979673928336'),(3,1,'easter-1.jpg','Y','0.5253016542715023'),(4,2,'fruit-4.jpg','N',''),(5,2,'fruit-3.jpg','Y',''),(6,2,'fruit-2.jpg','N',''),(7,2,'fruit-1.jpg','N',''),(8,3,'landscape-3.jpg','N',''),(9,3,'landscape-2.jpg','Y',''),(10,3,'landscape-1.jpg','N',''),(11,3,'landscape-4.jpg','N',''),(12,4,'cat-3.jpg','N',''),(13,4,'cat-4.jpg','N',''),(14,4,'cat-2.jpg','Y',''),(15,4,'cat-1.jpg','N',''),(16,5,'girl-4.jpg','N',''),(17,5,'girl-3.jpg','N',''),(18,5,'girl-2.jpg','N',''),(19,5,'girl-1.jpg','N','');

/*Table structure for table `foto_artikel_temp` */

DROP TABLE IF EXISTS `foto_artikel_temp`;

CREATE TABLE `foto_artikel_temp` (
  `id_foto` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_foto` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token_foto` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sesi_form` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id_foto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `foto_artikel_temp` */

/*Table structure for table `foto_galeri` */

DROP TABLE IF EXISTS `foto_galeri`;

CREATE TABLE `foto_galeri` (
  `id_foto` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_galeri` bigint(20) unsigned NOT NULL,
  `nama_foto` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token_foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_foto`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `foto_galeri` */

insert  into `foto_galeri`(`id_foto`,`id_galeri`,`nama_foto`,`token_foto`,`deskripsi_foto`) values (1,1,'girl-4.jpg','0.939550010234409',''),(2,1,'girl-3.jpg','0.4271409737155816',''),(3,1,'girl-2.jpg','0.46774954888371423',''),(4,1,'girl-1.jpg','0.3533645090137574',''),(5,1,'cat-4.jpg','0.22239919276915976',''),(6,1,'cat-3.jpg','0.7639180419177438',''),(7,1,'cat-2.jpg','0.7786234522803119',''),(8,1,'cat-1.jpg','0.539613783152344',''),(9,1,'landscape-4.jpg','0.4304041406796044',''),(10,2,'landscape-41.jpg','0.8595888335046369',''),(11,2,'landscape-2.jpg','0.6165677440719071',''),(12,2,'landscape-3.jpg','0.007538945937492381',''),(13,2,'landscape-1.jpg','0.07667537818479597','Cum sociis natoque penatibus et magnis dis\nparturient montes, nascetur ridiculus mus'),(14,2,'fruit-4.jpg','0.8091352027357575',''),(15,2,'fruit-3.jpg','0.4320605923752492','Maecenas urna elit, tincidunt in dapibus nec, vehicula eu dui');

/*Table structure for table `foto_galeri_temp` */

DROP TABLE IF EXISTS `foto_galeri_temp`;

CREATE TABLE `foto_galeri_temp` (
  `id_foto` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_foto` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token_foto` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sesi_form` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_foto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `foto_galeri_temp` */

/*Table structure for table `foto_user_tmp` */

DROP TABLE IF EXISTS `foto_user_tmp`;

CREATE TABLE `foto_user_tmp` (
  `id_foto` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_foto` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token_foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sesi_from` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_foto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `foto_user_tmp` */

/*Table structure for table `galeri` */

DROP TABLE IF EXISTS `galeri`;

CREATE TABLE `galeri` (
  `galeri_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kategori_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `galeri_nama` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `galeri_deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `galeri_feature_img` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `galeri_url` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `galeri_meta_keyword` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `galeri_meta_deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `galeri_og_image` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `galeri_og_deskripsi` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `galeri_date` datetime NOT NULL,
  `galeri_date_edit` datetime NOT NULL,
  `galeri_user` bigint(20) unsigned NOT NULL,
  `galeri_user_edit` bigint(20) unsigned NOT NULL,
  `galeri_status` enum('publish','draft') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  PRIMARY KEY (`galeri_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `galeri` */

insert  into `galeri`(`galeri_id`,`kategori_id`,`galeri_nama`,`galeri_deskripsi`,`galeri_feature_img`,`galeri_url`,`galeri_meta_keyword`,`galeri_meta_deskripsi`,`galeri_og_image`,`galeri_og_deskripsi`,`galeri_date`,`galeri_date_edit`,`galeri_user`,`galeri_user_edit`,`galeri_status`) values (1,2,'Ut consequat ultricies est, non rhoncus mauris congue porta','<p>Vestibulum mollis, arcu iaculis bibendum varius, velit sapien blandit metus, ac posuere lorem nulla ac dolor. Maecenas urna elit, tincidunt in dapibus nec, vehicula eu dui. Duis lacinia fringilla massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut consequat ultricies est, non rhoncus mauris congue porta. Vivamus viverra suscipit felis eget condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer bibendum sagittis ligula, non faucibus nulla volutpat vitae. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\n<p> </p>\n<p>In aliquet quam et velit bibendum accumsan. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum vitae ipsum nec arcu semper adipiscing at ac lacus. Praesent id pellentesque orci. Morbi congue viverra nisl nec rhoncus. Integer mattis, ipsum a tincidunt commodo, lacus arcu elementum elit, at mollis eros ante ac risus. In volutpat, ante at pretium ultricies, velit magna suscipit enim, aliquet blandit massa orci nec lorem. Nulla facilisi.</p>','','ut-consequat-ultricies-est-non-rhoncus-mauris-congue-porta','','','','','2016-04-14 09:05:08','2016-04-14 10:31:44',1,1,'publish'),(2,2,'Maecenas pellentesque volutpat felis','<p>Duis eu vehicula arcu. Nulla facilisi. Maecenas pellentesque volutpat felis, quis tristique ligula luctus vel. Sed nec mi eros. Integer augue enim, sollicitudin ullamcorper mattis eget, aliquam in est. Morbi sollicitudin libero nec augue dignissim ut consectetur dui volutpat. Nulla facilisi.</p>\n<p> </p>\n<p>Mauris egestas vestibulum neque cursus tincidunt. Donec sit amet pulvinar orci. Quisque volutpat pharetra tincidunt. Fusce sapien arcu, molestie eget varius egestas, faucibus ac urna. Sed at nisi in velit egestas aliquam ut a felis. Aenean malesuada iaculis nisl, ut tempor lacus egestas consequat. Nam nibh lectus, gravida sed egestas ut, feugiat quis dolor. Donec eu leo enim, non laoreet ante. Morbi dictum tempor vulputate. Phasellus ultricies risus vel augue sagittis euismod. Vivamus tincidunt placerat nisi in aliquam. Cras quis mi ac nunc pretium aliquam. Aenean elementum erat ac metus commodo rhoncus.</p>','','maecenas-pellentesque-volutpat-felis','test,keyword','test deskripsi','http://localhost/cms/an-component/media/upload-gambar-pendukung/sparkler-677774_1280.jpg','deskripsi fb','2016-04-14 10:39:15','2016-04-15 02:56:07',1,1,'publish');

/*Table structure for table `informasi` */

DROP TABLE IF EXISTS `informasi`;

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `disclaimer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `webprivacy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `termcondition` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_deskripsi` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail_media` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `develope_mode` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `logo` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `custom_css` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `width_thumb_artikel` int(10) unsigned NOT NULL DEFAULT '300',
  `width_thumb_galeri` int(10) unsigned NOT NULL DEFAULT '300',
  `width_thumb_produk` int(10) unsigned NOT NULL DEFAULT '500',
  `prefix_suffix_title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefix_suffix_sebagai` enum('prefix','suffix','none') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'prefix',
  `default_title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_populer_artikel` int(11) NOT NULL DEFAULT '10',
  `max_tampil_artikel` int(11) NOT NULL DEFAULT '10',
  `max_headline_artikel` int(11) NOT NULL DEFAULT '10',
  `max_headline_galeri` int(11) NOT NULL DEFAULT '10',
  `max_tampil_galeri` int(10) unsigned NOT NULL DEFAULT '10',
  `max_headline_produk` int(10) unsigned NOT NULL DEFAULT '10',
  `max_tampil_produk` int(10) unsigned NOT NULL DEFAULT '10',
  `sleep_mode` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `sleep_sampai` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `informasi` */

insert  into `informasi`(`id`,`nama`,`deskripsi`,`disclaimer`,`webprivacy`,`termcondition`,`meta_keyword`,`meta_deskripsi`,`featured_image`,`thumbnail_media`,`favicon`,`develope_mode`,`logo`,`custom_css`,`width_thumb_artikel`,`width_thumb_galeri`,`width_thumb_produk`,`prefix_suffix_title`,`prefix_suffix_sebagai`,`default_title`,`max_populer_artikel`,`max_tampil_artikel`,`max_headline_artikel`,`max_headline_galeri`,`max_tampil_galeri`,`max_headline_produk`,`max_tampil_produk`,`sleep_mode`,`sleep_sampai`) values (1,'Dreamaxtion','<p>Dreamaxtion is a Technology Solution&singlequote;s company focusing on Human Capital Solutions especially HR Information System to improve company-employee well-being and engagement. </p>','','','<p>term &amp; condition</p>','apricot, CMS','template default apricot CMS ','http://localhost/cms/an-component/media/upload-gambar-pendukung/footpath-691021_1280.jpg','','http://localhost/dreamx/an-component/media/upload-gambar-pendukung/favicon.ico','N','http://localhost/dreamx/an-component/media/upload-gambar-pendukung/dmx_logo.png','/*Masukan code CSS anda disini\nGunakan flag !important&singlequote;*/\n',300,300,500,'','prefix','',10,10,10,10,1,10,10,'N','2016-04-14 02:13:08');

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id_kategori` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_kategori` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_parent` bigint(20) NOT NULL DEFAULT '0',
  `aktif` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `terhapus` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id_kategori`),
  UNIQUE KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kategori` */

insert  into `kategori`(`id_kategori`,`nama_kategori`,`slug_kategori`,`id_parent`,`aktif`,`terhapus`) values (1,'Sains','sains',0,'Y','N'),(2,'Kuliner','kuliner',0,'Y','N'),(3,'Olah Raga','olah-raga',0,'Y','N'),(4,'Pariwisata','pariwisata',0,'Y','N'),(5,'Budaya','budaya',0,'Y','N');

/*Table structure for table `kategori_galeri` */

DROP TABLE IF EXISTS `kategori_galeri`;

CREATE TABLE `kategori_galeri` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_kategori` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `terhapus` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `urlnya` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kategori_galeri` */

insert  into `kategori_galeri`(`id`,`nama_kategori`,`slug_kategori`,`aktif`,`terhapus`,`urlnya`) values (1,'Wedding','wedding','Y','N',NULL),(2,'Pre- wedding ','pre-wedding','Y','N',NULL);

/*Table structure for table `kategori_produk` */

DROP TABLE IF EXISTS `kategori_produk`;

CREATE TABLE `kategori_produk` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `parent_kategori` bigint(20) unsigned NOT NULL DEFAULT '0',
  `nama_kategori` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_kategori` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `terhapus` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kategori_produk` */

/*Table structure for table `kontak_masuk` */

DROP TABLE IF EXISTS `kontak_masuk`;

CREATE TABLE `kontak_masuk` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namabelakang` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pesan` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` datetime NOT NULL,
  `ip` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dibaca` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kontak_masuk` */

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_code` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_created` datetime NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `menu` */

insert  into `menu`(`menu_id`,`menu_code`,`menu_nama`,`menu_created`) values (1,'horizontal','utama','2016-04-14 02:12:24'),(2,'vertical','samping','2016-04-14 02:12:24'),(3,'vertical2','tambahan 1','2016-04-14 02:12:24'),(4,'vertical3','tambahan 2','2016-04-14 02:12:24');

/*Table structure for table `menu_child` */

DROP TABLE IF EXISTS `menu_child`;

CREATE TABLE `menu_child` (
  `menu_child_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `menu_id` bigint(20) NOT NULL,
  `menu_child_parent` bigint(20) NOT NULL DEFAULT '0',
  `menu_child_code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_child_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_child_url` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_child_target` enum('_self','_blank','_parent','_top') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `aktif` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `posisi` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`menu_child_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `menu_child` */

insert  into `menu_child`(`menu_child_id`,`menu_id`,`menu_child_parent`,`menu_child_code`,`menu_child_nama`,`menu_child_url`,`menu_child_target`,`aktif`,`posisi`) values (1,1,0,'','Home Page','http://localhost/dreamx/','_self','Y',1),(2,1,0,'','Solutions','#feature','_self','Y',2),(3,1,0,'','Our Team','#ourteam','_self','Y',3),(4,1,0,'','Discover More','http://localhost/dreamx/page/3-discover-more','_self','Y',7),(5,1,3,'','About Us','#contact','_self','Y',4),(6,1,3,'','Career','http://localhost/dreamx/page/4-career-page','_self','Y',5),(7,1,3,'','Dreamaxtioner','#service','_self','Y',6),(9,1,0,'home','Sign In','#signin','_self','Y',8),(10,1,0,'home','Contact Us','http://localhost/dreamx/page/contact_us','_self','Y',9);

/*Table structure for table `news_ticker` */

DROP TABLE IF EXISTS `news_ticker`;

CREATE TABLE `news_ticker` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `berita` varchar(700) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_posting` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `news_ticker` */

insert  into `news_ticker`(`id`,`berita`,`link`,`tanggal_posting`) values (1,'volutpat felis, quis tristique ligula luctus vel. Sed nec mi eros. Integer augue enim, sollicitudin','#link','2016-03-22 04:18:22'),(2,'Fusce sapien arcu, molestie eget varius egestas, faucibus ac urna. Sed at nisi in velit egestas aliquam ut a felis.','#kedua','2016-03-22 04:19:12'),(3,'Aliquam nulla augue, porta non sagittis quis, accumsan vitae sem','#ketiga','2016-03-22 04:19:28'),(4,'ivamus vel ipsum ac augue sodales mollis euismod nec tellus. Fusce et augue rutrum nunc semper vehicula vel semper nisl.','#empat','2016-03-22 04:19:56'),(5,'Curabitur malesuada fermentum lacus vel accumsan. Duis ornare scelerisque nulla, ac pulvinar ligula tempus sit amet ','#test','2016-03-22 04:20:12'),(6,'Vivamus luctus mi eget lorem lobortis pharetra. Phasellus at tortor quam, a volutpat purus.','#hai','2016-03-22 04:20:45');

/*Table structure for table `pages` */

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `page_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `page_judul` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_url` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_foto` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_javascript` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_status` enum('published','draft') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `page_id_user` bigint(20) unsigned NOT NULL,
  `page_id_edit` bigint(20) unsigned NOT NULL,
  `page_created` datetime NOT NULL,
  `page_edited` datetime NOT NULL,
  `page_meta_keywords` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_meta_description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `highlight` int(11) DEFAULT '0',
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pages` */

insert  into `pages`(`page_id`,`page_judul`,`page_url`,`page_isi`,`page_foto`,`page_javascript`,`page_status`,`page_id_user`,`page_id_edit`,`page_created`,`page_edited`,`page_meta_keywords`,`page_meta_description`,`highlight`) values (1,'About Us','about-us','<p>This is Dreamaxtion</p>','http://localhost/aksi-indonesia/an-component/media/upload-gambar-pendukung/slider-bk.jpg','','published',1,1,'2016-07-26 10:13:33','2017-10-19 17:09:34','About US koko','About US y',0),(2,'JAM - Menggunakan Jan Dhan (Rekening Bank), Aadhar dan Mobile (Dompet Elektronik) untuk Membuat Produk ,Layanan , dan Cara Baru dalam Memenuhi Berbagai Kebutuhan','jam-menggunakan-jan-dhan-rekening-bank-aadhar-dan-mobile-dompet-elektronik-untuk-membuat-produk-layanan-dan-cara-baru-dalam-memenuhi-berbagai-kebutuhan','<p>Jan Dhan Yojana, Aadhaar dan Dompet Mobile atau ‘<strong>JAM</strong>’ telah ramai diperbincangkan dalam antero Keuangan Inklusif, tidak hanya di India, tetapi juga di seluruh dunia. JAM telah muncul di berbagai berita dan media sosial setelah diulas di <a href=&doublequote;http://indiabudget.nic.in/es2014-15/echapvol1-03.pdf&doublequote;>Economic Survey 2015</a> dan <a href=&doublequote;http://www.firstpost.com/business/economic-survey-highlights-challenges-to-jan-dhan-aadhaar-mobile-bapu-may-be-a-solution-2646382.html&doublequote;>Union Budget 2015</a>. Tritunggal JAM yakni <strong>J</strong>an Dhan, <strong>A</strong>adhar dan <strong>M</strong>obile telah dinilai sebagai alat penting dalam mencegah kebocoran aliran dana, memperkuat mekanisme penyaluran dana dan skema bantuan sosial; serta meningkatkan keberhasilan berbagai Program Bantuan Langsung (DBT-Direct Benefit Transfers).</p>','http://localhost/aksi-indonesia/an-component/media/upload-gambar-pendukung/milky-way-1023340_1280.jpg','','published',1,0,'2016-10-08 12:02:58','0000-00-00 00:00:00','Jan Dhan Yojana, Aadhaar dan Dompet Mobile','Jan Dhan Yojana, Aadhaar dan Dompet Mobile',1),(3,'Discover More','discover-more','<p><strong>test discover more</strong></p>','','','published',1,0,'2017-10-17 17:08:20','0000-00-00 00:00:00','discover more hr system dreamaxtion','discover more hr system dreamaxtion',0),(4,'Career page','career-page','<h2><strong>Carerr page Dreamaxtion</strong></h2>\n<p> </p>\n<h3>Vacancy :</h3>\n<ul>\n<li>Node Js Developer</li>\n<li>Frond end Developer</li>\n<li>System Administrator</li>\n</ul>','http://localhost/dreamx/an-component/media/upload-gambar-pendukung/Job-Search-Fiji-Islands.jpg','','published',1,0,'2017-10-17 17:21:11','0000-00-00 00:00:00','Carerr page Dreamaxtion','Carerr page Dreamaxtion',0);

/*Table structure for table `pencarian_artikel` */

DROP TABLE IF EXISTS `pencarian_artikel`;

CREATE TABLE `pencarian_artikel` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `keyword` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clean_keyword` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` datetime NOT NULL,
  `ip` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pencarian_artikel` */

/*Table structure for table `pihak_ketiga` */

DROP TABLE IF EXISTS `pihak_ketiga`;

CREATE TABLE `pihak_ketiga` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recaptcha_key` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recaptcha_secret_key` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `script_google_analytics` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disqus_unique_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pihak_ketiga` */

insert  into `pihak_ketiga`(`id`,`recaptcha_key`,`recaptcha_secret_key`,`script_google_analytics`,`disqus_unique_name`) values (1,'','','','');

/*Table structure for table `tags` */

DROP TABLE IF EXISTS `tags`;

CREATE TABLE `tags` (
  `id_tag` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_tag` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_tag` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_posting` bigint(20) NOT NULL,
  `user_update` bigint(20) NOT NULL,
  PRIMARY KEY (`id_tag`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tags` */

insert  into `tags`(`id_tag`,`nama_tag`,`slug_tag`,`user_posting`,`user_update`) values (1,'kebahagiaan','kebahagiaan',1,1),(2,'impian','impian',1,1),(3,'cinta','cinta',1,0),(4,'harapan','harapan',1,0),(5,'kebaikan','kebaikan',1,0);

/*Table structure for table `tema` */

DROP TABLE IF EXISTS `tema`;

CREATE TABLE `tema` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_tema` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `versi` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `web` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `screenshot` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tema` */

insert  into `tema`(`id`,`nama_tema`,`versi`,`aktif`,`author`,`web`,`screenshot`) values (22,'ando','1.0','Y','Ando Poluan','http://www.sandro.id','screenshot.jpg');

/*Table structure for table `tsection` */

DROP TABLE IF EXISTS `tsection`;

CREATE TABLE `tsection` (
  `noid` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(200) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`noid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tsection` */

insert  into `tsection`(`noid`,`label`,`status`,`datetime`) values (1,'WHY YOU MUST BE OUR PARTNER',1,'2017-10-17 14:44:03'),(2,'BACKED BY SCIENCE',1,'2017-10-17 15:39:17'),(3,'EMPOWER YOUR PEOPLE AND ORGANIZATION',1,'2017-10-17 15:39:18'),(4,'OUR BUSINESS OVERVIEW',1,'2017-10-17 15:38:47');

/*Table structure for table `tsection_item` */

DROP TABLE IF EXISTS `tsection_item`;

CREATE TABLE `tsection_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_section` int(11) NOT NULL,
  `caption_title` varchar(100) DEFAULT NULL,
  `caption_item` varchar(200) DEFAULT NULL,
  `picture` varchar(600) DEFAULT NULL,
  `status` smallint(6) DEFAULT '1',
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tsection_item` */

insert  into `tsection_item`(`id`,`id_section`,`caption_title`,`caption_item`,`picture`,`status`,`date_time`) values (1,1,'Agile','Adjust your human capital system or organization design in respond to customer, employee, market, or user needs..','http://localhost/dreamx/an-component/media/upload-gambar-pendukung/ser01.png',1,'2017-10-17 15:01:18'),(2,1,'Integrated','No more scattered data or software fatigue. Easily recruit, develop, manage, and retain your people using a single Human Capital Management (HCM) Syst.','http://localhost/dreamx/an-component/media/upload-gambar-pendukung/integrated.png',1,'2017-10-17 15:01:39'),(3,1,'Predictive','Data drivendecision making by using predictive analytics to gain insight, predict trends, analyst cost, and behavior patterns.','http://localhost/dreamx/an-component/media/upload-gambar-pendukung/predictive.png',1,'2017-10-17 15:01:46'),(4,1,'Secure','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','http://localhost/dreamx/an-component/media/upload-gambar-pendukung/ser04.png',1,'2017-10-17 15:01:47'),(5,4,'ATS','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','http://localhost/dreamx/an-component/media/upload-gambar-pendukung/ser01.png',0,'2017-10-19 17:39:45'),(6,4,'Caption 1','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','http://localhost/dreamx/an-component/media/upload-gambar-pendukung/ser01.png',1,'2017-10-17 15:40:40'),(7,4,'Caption 1','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','http://localhost/dreamx/an-component/media/upload-gambar-pendukung/ser01.png',1,'2017-10-17 15:40:41'),(8,4,'Caption 1','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','http://localhost/dreamx/an-component/media/upload-gambar-pendukung/ser01.png',1,'2017-10-17 15:40:41'),(9,4,'Caption 1','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','http://localhost/dreamx/an-component/media/upload-gambar-pendukung/ser01.png',1,'2017-10-17 15:40:44'),(10,4,'Caption 6','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','http://localhost/dreamx/an-component/media/upload-gambar-pendukung/ser01.png',1,'2017-10-17 15:49:07');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` bigint(11) unsigned NOT NULL AUTO_INCREMENT,
  `name_user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_user` int(11) NOT NULL,
  `avatar_user` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_user` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `terhapus` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `terdaftar` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `user` */

insert  into `user`(`id_user`,`name_user`,`nama_lengkap`,`email`,`password_user`,`level_user`,`avatar_user`,`status_user`,`terhapus`,`terdaftar`) values (1,'admin','admin','','0192023a7bbd73250516f069df18b500',1,'default.jpg','Y','N','0000-00-00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
